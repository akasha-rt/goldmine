<?php
/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc. All rights reserved.
 */

/**
 * Update _usdollar fields possibly affected by number formatting bug
 */
function fixUSDollarFields()
{
    global $db;
    // Fix Opportunities
    $db->query(
        "
        UPDATE opportunities
        SET amount_usdollar = amount / base_rate
        WHERE base_rate > 0
        AND format(amount / base_rate, 6) <> format(amount_usdollar, 6)
        AND deleted = 0
        "
    );
    $db->query(
        "
        UPDATE opportunities
        SET amount_usdollar = amount
        WHERE format(amount, 6) <> format(amount_usdollar, 6)
        AND (base_rate IS NULL OR base_rate = 1)
        AND deleted = 0
        "
    );

    // Fix Products
    $fields = array(
        'deal_calc' => 'deal_calc_usdollar',
        'discount_amount' => 'discount_amount_usdollar',
        'cost_price' => 'cost_usdollar',
        'discount_price' => 'discount_usdollar',
        'list_price' => 'list_usdollar',
        'book_value' => 'book_value_usdollar',
    );
    foreach ($fields as $field => $fieldUSDollar) {
        $db->query(
            "
            UPDATE products
            SET {$fieldUSDollar} = {$field} / base_rate
            WHERE base_rate > 0
            AND format({$field} / base_rate, 6) <> format({$fieldUSDollar}, 6)
            AND deleted = 0
            "
        );
        $db->query(
            "
            UPDATE products
            SET {$fieldUSDollar} = {$field}
            WHERE format({$field}, 6) <> format({$fieldUSDollar}, 6)
            AND (base_rate IS NULL OR base_rate = 1)
            AND deleted = 0
            "
        );
    }
}

/**
 * Updates currency values for Product Bundles and Quotes based on the Products table
 */
function fixQuoteAndProductBundleValues()
{
    global $db;

    // Collect all quote, product_bundle and products data
    $sql = "
            SELECT
            PBQ.quote_id AS quote_id,
            PBQ.bundle_id AS bundle_id,
            Q.currency_id AS currency_id,
            PB.shipping as shipping,
            P.quantity AS quantity,
            P.discount_price AS discount_price,
            P.discount_amount AS discount_amount,
            P.discount_select AS discount_select,
            T.value AS tax_value,
            P.tax_class AS tax_class
            FROM
            quotes Q LEFT JOIN taxrates T ON Q.taxrate_id = T.id,
            product_bundles PB,
            product_bundle_quote PBQ,
            product_bundle_product PBP,
            products P
            WHERE
            Q.id = PBQ.quote_id
            AND PBQ.bundle_id = PB.id
            AND PBQ.bundle_id = PBP.bundle_id
            AND PBP.product_id = P.id
        ";

    $bundles = array();
    $quotes = array();

    $result = $db->query($sql);
    while ($row = $db->fetchByAssoc($result)) {
        if (empty($bundles[$row['bundle_id']])) {
            $bundles[$row['bundle_id']] = array(
                'tax' => 0,
                'subtotal' => 0,
                'deal_tot' => 0,
                'new_sub' => 0,
            );
        }

        $subtotal = $row['quantity'] * $row['discount_price'];
        if ($row['discount_select'] != 1) {
            $deal_tot = $row['quantity'] * $row['discount_amount'];
        } else {
            $deal_tot = $row['quantity'] * ($row['discount_amount'] * $row['discount_price'] / 100);
        }
        $new_sub = $subtotal - $deal_tot;

        // Calculate the aggregate fields
        $bundles[$row['bundle_id']]['subtotal'] += $subtotal;
        $bundles[$row['bundle_id']]['deal_tot'] += $deal_tot;
        $bundles[$row['bundle_id']]['new_sub'] += $new_sub;

        // If field is taxable, add tax for it
        if ($row['tax_class'] == 'Taxable') {
            $bundles[$row['bundle_id']]['tax'] += ($row['tax_value'] * $new_sub) / 100;
        }

        $bundles[$row['bundle_id']]['shipping'] = $row['shipping'];
        $bundles[$row['bundle_id']]['currency_id'] = $row['currency_id'];
        $bundles[$row['bundle_id']]['quote_id'] = $row['quote_id'];
        $quotes[$row['quote_id']] = array(
            'tax' => 0,
            'subtotal' => 0,
            'deal_tot' => 0,
            'new_sub' => 0,
            'shipping' => 0,
            'total' => 0,
            'tax_usdollar' => 0,
            'subtotal_usdollar' => 0,
            'deal_tot_usdollar' => 0,
            'new_sub_usdollar' => 0,
            'shipping_usdollar' => 0,
            'total_usdollar' => 0,
        );
    }

    // Build total and _usdollar fields
    foreach ($bundles as $id => $value) {
        $bundles[$id]['total'] = $value['tax'] + $value['new_sub'] + $value['shipping'];

        $bundles[$id]['tax_usdollar'] = SugarCurrency::convertAmountToBase(
            $value['tax'],
            $value['currency_id']
        );
        $bundles[$id]['subtotal_usdollar'] = SugarCurrency::convertAmountToBase(
            $value['subtotal'],
            $value['currency_id']
        );
        $bundles[$id]['deal_tot_usdollar'] = SugarCurrency::convertAmountToBase(
            $value['deal_tot'],
            $value['currency_id']
        );
        $bundles[$id]['new_sub_usdollar'] = SugarCurrency::convertAmountToBase(
            $value['new_sub'],
            $value['currency_id']
        );
        $bundles[$id]['shipping_usdollar'] = SugarCurrency::convertAmountToBase(
            $bundles[$id]['shipping'],
            $value['currency_id']
        );
        $bundles[$id]['total_usdollar'] = SugarCurrency::convertAmountToBase(
            $bundles[$id]['total'],
            $value['currency_id']
        );
    }

    // Cycle through the bundles and update the values for them
    foreach ($bundles as $id => $values) {
        $quoteId = $values['quote_id'];
        unset($values['currency_id']);
        unset($values['quote_id']);

        // Build the fields to be updated
        $sqlFields = array();
        foreach ($values as $fieldId => $fieldValue) {
            $sqlFields[] = "$fieldId = '{$fieldValue}'";
            // Fill in quote values
            $quotes[$quoteId][$fieldId] += $fieldValue;
        }

        // Update the product_bundle values
        $sql = "UPDATE product_bundles SET "
            . implode(', ', $sqlFields)
            . " WHERE id = '$id'";
        $db->query($sql);
    }

    // Cycle through the quotes and update the values for them
    foreach ($quotes as $id => $values) {
        // Build the fields to be updated
        $sqlFields = array();
        foreach ($values as $fieldId => $fieldValue) {
            $sqlFields[] = "$fieldId = '{$fieldValue}'";
        }

        // Update the product_bundle values
        $sql = "UPDATE quotes SET "
            . implode(', ', $sqlFields)
            . " WHERE id = '$id'";
        $db->query($sql);
    }
}

/**
 * Upgrade script to fix duplicate product bundle indexes
 */
function fixProductBundleIndexes()
{
    global $db;

    // Pick all product bundles with duplicate indexes
    $result = $db->query(
        "
        SELECT *
        FROM product_bundle_quote
        WHERE quote_id IN
            (
                SELECT quote_id
                FROM product_bundle_quote
                GROUP BY quote_id, bundle_index
                HAVING count(quote_id) > 1
            )
        ORDER BY quote_id, bundle_index
        "
    );

    $bundleQuoteForUpdate = array();
    $counters = array();

    while ($row = $db->fetchByAssoc($result)) {
        // Create/Increase the counters for the bundles
        if (empty($counters[$row['quote_id']])) {
            $counters[$row['quote_id']] = 1;
        } else {
            $counters[$row['quote_id']]++;
        }

        // Save records as 'id' of product_bundle_quote to update, and the new bundle_index value
        $bundleQuoteForUpdate[$row['id']] = $counters[$row['quote_id']];
    }

    foreach ($bundleQuoteForUpdate as $id => $value) {
        $db->query(
            "
            UPDATE product_bundle_quote
            SET bundle_index = {$value}
            WHERE id = '{$id}'
            "
        );
    }
}

/**
 * Remove header_logo_url from pdfmanager table
 * if we're upgrading from 6.7.5
 */
function removePDFManagerHeaderLogoUrl()
{
    global $db;

    // Drop header_logo_url from pdfmanager table
    $sql = 'ALTER TABLE pdfmanager DROP COLUMN header_logo_url';
    $db->query($sql);
}
