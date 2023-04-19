<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/RevenueLineItems/Ext/Vardefs/rli_vardef.ext.php

$dictionary['RevenueLineItem']['importable'] = true;
$dictionary['RevenueLineItem']['unified_search'] = true;
?>
<?php
// Merged from custom/Extension/modules/RevenueLineItems/Ext/Vardefs/sugarfield_probability.php

 // created: 2021-05-21 16:38:34
$dictionary['RevenueLineItem']['fields']['probability']['len']='11';
$dictionary['RevenueLineItem']['fields']['probability']['massupdate']=false;
$dictionary['RevenueLineItem']['fields']['probability']['hidemassupdate']=false;
$dictionary['RevenueLineItem']['fields']['probability']['comments']='The probability of closure';
$dictionary['RevenueLineItem']['fields']['probability']['duplicate_merge']='enabled';
$dictionary['RevenueLineItem']['fields']['probability']['duplicate_merge_dom_value']='1';
$dictionary['RevenueLineItem']['fields']['probability']['merge_filter']='disabled';
$dictionary['RevenueLineItem']['fields']['probability']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['RevenueLineItem']['fields']['probability']['calculated']=false;
$dictionary['RevenueLineItem']['fields']['probability']['formula']='';
$dictionary['RevenueLineItem']['fields']['probability']['enforced']=false;
$dictionary['RevenueLineItem']['fields']['probability']['enable_range_search']=false;
$dictionary['RevenueLineItem']['fields']['probability']['min']=0;
$dictionary['RevenueLineItem']['fields']['probability']['max']=100;
$dictionary['RevenueLineItem']['fields']['probability']['disable_num_format']='';

 
?>
<?php
// Merged from custom/Extension/modules/RevenueLineItems/Ext/Vardefs/denorm_account_name.php


// 'account_name'
$dictionary['RevenueLineItem']['fields']['account_name']['is_denormalized'] = true;
$dictionary['RevenueLineItem']['fields']['account_name']['denormalized_field_name'] = 'denorm_account_name';

// 'denorm_account_name'
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['name'] = 'denorm_account_name';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['type'] = 'varchar';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['dbType'] = 'varchar';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['vname'] = 'LBL_ACCOUNT_NAME';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['len'] = '150';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['comment'] = 'Name of the Company';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['unified_search'] = true;
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['full_text_search'] = array (
  'enabled' => true,
  'boost' => '1.91',
  'searchable' => true,
);
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['audited'] = true;
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['required'] = false;
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['importable'] = 'required';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['merge_filter'] = 'disabled';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['massupdate'] = false;
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['comments'] = 'Name of the Company';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['duplicate_merge'] = 'enabled';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['duplicate_merge_dom_value'] = '1';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['calculated'] = false;
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['studio'] = false;

?>
<?php
// Merged from custom/Extension/modules/RevenueLineItems/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['RevenueLineItem']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/RevenueLineItems/Ext/Vardefs/sugarfield_sales_stage.php

 // created: 2023-01-31 17:00:03
$dictionary['RevenueLineItem']['fields']['sales_stage']['default']='';
$dictionary['RevenueLineItem']['fields']['sales_stage']['len']=100;
$dictionary['RevenueLineItem']['fields']['sales_stage']['massupdate']=true;
$dictionary['RevenueLineItem']['fields']['sales_stage']['hidemassupdate']=false;
$dictionary['RevenueLineItem']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['RevenueLineItem']['fields']['sales_stage']['duplicate_merge']='enabled';
$dictionary['RevenueLineItem']['fields']['sales_stage']['duplicate_merge_dom_value']='1';
$dictionary['RevenueLineItem']['fields']['sales_stage']['merge_filter']='disabled';
$dictionary['RevenueLineItem']['fields']['sales_stage']['calculated']=false;
$dictionary['RevenueLineItem']['fields']['sales_stage']['dependency']=false;
$dictionary['RevenueLineItem']['fields']['sales_stage']['required']=false;
$dictionary['RevenueLineItem']['fields']['sales_stage']['visibility_grid']=array (
);
$dictionary['RevenueLineItem']['fields']['sales_stage']['importable']='true';

 
?>
<?php
// Merged from custom/Extension/modules/RevenueLineItems/Ext/Vardefs/sugarfield_likely_case.php

 // created: 2023-02-28 18:29:23
$dictionary['RevenueLineItem']['fields']['likely_case']['default']=0.0;
$dictionary['RevenueLineItem']['fields']['likely_case']['len']=26;
$dictionary['RevenueLineItem']['fields']['likely_case']['required']=false;
$dictionary['RevenueLineItem']['fields']['likely_case']['massupdate']=false;
$dictionary['RevenueLineItem']['fields']['likely_case']['hidemassupdate']=false;
$dictionary['RevenueLineItem']['fields']['likely_case']['duplicate_merge']='enabled';
$dictionary['RevenueLineItem']['fields']['likely_case']['duplicate_merge_dom_value']='1';
$dictionary['RevenueLineItem']['fields']['likely_case']['merge_filter']='disabled';
$dictionary['RevenueLineItem']['fields']['likely_case']['calculated']='1';
$dictionary['RevenueLineItem']['fields']['likely_case']['enforced']=false;
$dictionary['RevenueLineItem']['fields']['likely_case']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['RevenueLineItem']['fields']['likely_case']['enable_range_search']=false;

 
?>
<?php
// Merged from custom/Extension/modules/RevenueLineItems/Ext/Vardefs/sugarfield_date_closed.php

 // created: 2023-02-28 18:36:06
$dictionary['RevenueLineItem']['fields']['date_closed']['required']=true;
$dictionary['RevenueLineItem']['fields']['date_closed']['massupdate']=true;
$dictionary['RevenueLineItem']['fields']['date_closed']['hidemassupdate']=false;
$dictionary['RevenueLineItem']['fields']['date_closed']['comments']='Expected or actual date the product (for opportunity) will close';
$dictionary['RevenueLineItem']['fields']['date_closed']['duplicate_merge']='enabled';
$dictionary['RevenueLineItem']['fields']['date_closed']['duplicate_merge_dom_value']='1';
$dictionary['RevenueLineItem']['fields']['date_closed']['merge_filter']='disabled';
$dictionary['RevenueLineItem']['fields']['date_closed']['calculated']=false;
$dictionary['RevenueLineItem']['fields']['date_closed']['enable_range_search']='1';
$dictionary['RevenueLineItem']['fields']['date_closed']['full_text_search']=array (
);
$dictionary['RevenueLineItem']['fields']['date_closed']['related_fields']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/RevenueLineItems/Ext/Vardefs/sugarfield_list_price.php

 // created: 2023-03-07 19:23:01
$dictionary['RevenueLineItem']['fields']['list_price']['default']=0.0;
$dictionary['RevenueLineItem']['fields']['list_price']['len']=26;
$dictionary['RevenueLineItem']['fields']['list_price']['massupdate']=false;
$dictionary['RevenueLineItem']['fields']['list_price']['hidemassupdate']=false;
$dictionary['RevenueLineItem']['fields']['list_price']['comments']='List price of sales item';
$dictionary['RevenueLineItem']['fields']['list_price']['duplicate_merge']='enabled';
$dictionary['RevenueLineItem']['fields']['list_price']['duplicate_merge_dom_value']='1';
$dictionary['RevenueLineItem']['fields']['list_price']['merge_filter']='disabled';
$dictionary['RevenueLineItem']['fields']['list_price']['calculated']=false;
$dictionary['RevenueLineItem']['fields']['list_price']['enable_range_search']=false;
$dictionary['RevenueLineItem']['fields']['list_price']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/RevenueLineItems/Ext/Vardefs/sugarfield_netpriceusd_c.php

 // created: 2023-03-08 17:23:53
$dictionary['RevenueLineItem']['fields']['netpriceusd_c']['labelValue']='Net Price USD';
$dictionary['RevenueLineItem']['fields']['netpriceusd_c']['enforced']='';
$dictionary['RevenueLineItem']['fields']['netpriceusd_c']['dependency']='';
$dictionary['RevenueLineItem']['fields']['netpriceusd_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['RevenueLineItem']['fields']['netpriceusd_c']['required_formula']='';
$dictionary['RevenueLineItem']['fields']['netpriceusd_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/RevenueLineItems/Ext/Vardefs/sugarfield_standarddiscount_c.php

 // created: 2023-03-08 17:25:45
$dictionary['RevenueLineItem']['fields']['standarddiscount_c']['labelValue']='Standard Discount';
$dictionary['RevenueLineItem']['fields']['standarddiscount_c']['enforced']='';
$dictionary['RevenueLineItem']['fields']['standarddiscount_c']['dependency']='';
$dictionary['RevenueLineItem']['fields']['standarddiscount_c']['required_formula']='';
$dictionary['RevenueLineItem']['fields']['standarddiscount_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/RevenueLineItems/Ext/Vardefs/sugarfield_pricelistdate_c.php

 // created: 2023-03-08 17:27:29
$dictionary['RevenueLineItem']['fields']['pricelistdate_c']['labelValue']='Price List Date';
$dictionary['RevenueLineItem']['fields']['pricelistdate_c']['enforced']='';
$dictionary['RevenueLineItem']['fields']['pricelistdate_c']['dependency']='';
$dictionary['RevenueLineItem']['fields']['pricelistdate_c']['required_formula']='';
$dictionary['RevenueLineItem']['fields']['pricelistdate_c']['readonly_formula']='';

 
?>
