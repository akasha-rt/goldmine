<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
namespace Sugarcrm\Sugarcrm\custom\Hint\Helper;

use Sugarcrm\Sugarcrm\custom\Hint\ConfigurationManager;
class ViewdefsParser
{
    /**
     * Updates given components with a new one injecting it
     * right after the sidebar main pane
     *
     * Additionally modifies layout class if required
     *
     * @param array $components
     * @param array $newComponent
     * @param string|null $cssClass
     * @return array
     */
    public static function injectAfterSidebarMainpane(array $components, array $newComponent, string $cssClass = null)
    {
        $shouldShowHintTab = ConfigurationManager::isHintUser();
        $isSugarPROUser = ConfigurationManager::isSugarProUser();
        if ($isSugarPROUser || $shouldShowHintTab) {
            foreach ($components as $i => $createComponent) {
                // skip wrong component
                if (empty($createComponent['layout']['name']) || $createComponent['layout']['name'] !== 'sidebar') {
                    continue;
                }

                // add custom class
                if (!is_null($cssClass)) {
                    $components[$i]['layout']['css_class'] = $cssClass;
                }

                $sidebarComponents = $createComponent['layout']['components'] ?? [];
                foreach ($sidebarComponents as $j => $sidebarComponent) {
                    // skip wrong component
                    if (empty($sidebarComponent['layout']['name']) || $sidebarComponent['layout']['name'] !== 'main-pane') {
                        continue;
                    }

                    // inject component right after the current one
                    array_splice($sidebarComponents, $j + 1, 0, [$newComponent]);
                    break;
                }
                $components[$i]['layout']['components'] = $sidebarComponents;
            }
        }
        return $components;
    }

    public static function injectAfter(array $components, array $newComponent)
    {
        $shouldShowHintTab = ConfigurationManager::isHintUser();
        $isSugarPROUser = ConfigurationManager::isSugarProUser();
        if ($isSugarPROUser || $shouldShowHintTab) {
            $previewPane = [
                'layout' => 'preview',
                'label' => 'preview',
            ];

            $version = ConfigurationManager::versionComparePHP();
            if ($version >= 0) {
                foreach ($components as $i => $createComponent) {
                    // skip wrong component
                    if (empty($createComponent['layout']['name']) || $createComponent['layout']['name'] !== 'sidebar') {
                        continue;
                    }
                    $sidebarComponents = $createComponent['layout']['components'] ?? [];
                    foreach ($sidebarComponents as $j => $sidebarComponent) {
                        if (!empty($createComponent['layout']['name']) && $sidebarComponent['layout']['name'] === 'preview-pane') {
                            $previewPaneRecordArray = $sidebarComponent['layout']['components'];
                            foreach ($previewPaneRecordArray as $k => $previewPaneComponent) {
                                if (!empty($previewPaneComponent) && $previewPaneComponent['layout'] === 'preview') {
                                    $sidebarComponent['layout']['components'][$k] = $previewPane;
                                    // if the previewPaneComponent has xmeta fields (preview editing, for example)
                                    // we must append this to the sidebar component
                                    if (!empty($previewPaneComponent['xmeta'])) {
                                        $sidebarComponent['layout']['components'][$k]['xmeta'] = $previewPaneComponent['xmeta'];
                                    }
                                }
                            }
                            $sidebarComponent['layout']['components'][] = $newComponent;
                            $sidebarComponents[$j] = $sidebarComponent;
                            break;
                        }
                    }
                    $components[$i]['layout']['components'] = $sidebarComponents;
                }
            }
        }
        return $components;
    }

    public static function updateNameToDropDown() {
        return [
            'name' => 'name',
            'type' => 'hint-accounts-search-dropdown'
        ];
    }

    public static function updateAvatarForAccounts() {
        return [
            'name' => 'hint_account_pic_c',
            'type' => 'hint-accounts-logo',
            'readonly' => true,
            'dismiss_label' => true,
            'white_list' => true
        ];
    }

    public static function updateEmailType() {
        return [
            'name' => 'email',
            'type' => 'hint-email'
        ];
    }

    public static function updateAvatarForContactsAndLeads() {
        return [
            'name' => 'picture',
            'type' => 'hint-contacts-photo',
            'readonly' => false,
            'dismiss_label' => true,
            'white_list' => true,
            'related_fields' => ['hint_contact_pic_c']
        ];
    }

    /**
     * @param $currentPanel
     * @param $allPanels passed in as a reference for all panels in sugar
     * @param $pkey panel key
     */
    public static function parseViewContactsAndLeads($currentPanel, &$allPanels, $pkey) {
        if (!empty($currentPanel['fields'])) {
            foreach ($currentPanel['fields'] as $fkey => $field) {
                ViewdefsParser::setContactsAndLeadsFields($allPanels, $pkey, $fkey, $field);
            }
        }
    }

    /**
     * @param $currentPanel
     * @param $allPanels passed in as a reference for all panels in sugar
     * @param $pkey panel key
     */
    public static function parseViewAccounts($currentPanel, &$allPanels, $pkey) {
        if (!empty($currentPanel['fields'])) {
            foreach ($currentPanel['fields'] as $fkey => $field) {
                ViewdefsParser::setAccountFields($allPanels, $pkey, $fkey, $field);
            }
        }
    }

    /**
     * @param $allPanels passed in as a reference for all panels in sugar
     * @param $pkey panel key
     * @param $fkey field key
     */
    public static function setAccountFields(&$allPanels, $pkey, $fkey) {
        if (is_array($allPanels[$pkey]['fields'][$fkey])) {
            $fieldToTest = $allPanels[$pkey]['fields'][$fkey]['name'];
            switch($fieldToTest){
                case 'name':
                    $allPanels[$pkey]['fields'][$fkey] = ViewdefsParser::updateNameToDropDown();
                    break;
                case 'picture':
                    $allPanels[$pkey]['fields'][$fkey] = ViewdefsParser::updateAvatarForAccounts();
                    break;
                default:
                    break;
            }
        }
    }

    /**
     * @param $fieldType type of the field to check if its an array and contain specific property.
     * @param $propertyName  property name to check if exists in the array.
     */
    public static function hasProp($fieldType, $propertyName) {
        return is_array($fieldType) && array_key_exists($propertyName, $fieldType);
    }

    /**
     * @param $allPanels passed in as a reference for all panels in sugar
     * @param $pkey panel key
     * @param $fkey field key
     * @param $field actual field
     */
    public static function setContactsAndLeadsFields(&$allPanels, $pkey, $fkey, $field) {
        $fieldType = $allPanels[$pkey]['fields'][$fkey];
        // The name property exists for those fields which are inherited from another field types.
        $fieldToTest = ViewdefsParser::hasProp($fieldType, 'name') ? $fieldType['name'] : $fieldType;
        if ($field === 'email' || (ViewdefsParser::hasProp($field, 'name') && $field['name'] === 'email')) {
            $fieldToTest = 'email';
        }

        switch($fieldToTest){
            case 'email':
                $allPanels[$pkey]['fields'][$fkey] = ViewdefsParser::updateEmailType();
                break;
            case 'picture':
                $allPanels[$pkey]['fields'][$fkey] = ViewdefsParser::updateAvatarForContactsAndLeads();
                break;
            default:
                break;
        }
    }

    /**
     * Finds "header" panel and changes the type of "name" field
     * to the given one
     *
     * @param array $panels
     * @param string $type
     * @return array
     */
    public static function updateHeaderPanelNameType(array $panels, string $type)
    {
        foreach($panels as $pkey => $panel) {
            if ($panel['name'] !== 'header' || empty($panel['fields'])) {
                continue;
            }

            $fields = $panel['fields'];
            foreach($fields as $fkey => $field) {
                // array definition
                if (is_array($field) && $field['name'] === 'name') {
                    $fields[$fkey]['type'] = $type;
                    continue;
                }

                // just panel name as a string
                if ($field === 'name') {
                    $fields[$fkey] = [
                        'name' => 'name',
                        'type' => $type,
                    ];
                }
            }
            $panels[$pkey]['fields'] = $fields;
        }

        return $panels;
    }

    /**
     * Filter the Hint fields which should NOT be included in the record metadata.
     * Hint configuration is stored in the configuration module specific to the
     * module in question.
     *
     * @param $module
     * @param $hintPanel
     * @return array
     */
    public static function filterRecordFields($module, $hintPanel)
    {
        $adminBean = \BeanFactory::newBean('Administration');
        $moduleConfig = $adminBean->getConfigForModule($module);

        if (!isset($moduleConfig['hintConfig'])) {
            return $hintPanel['fields'];
        }

        $filteredFields = [];

        $allFieldsThatWillBeDisplayed = array_merge(
            $moduleConfig['hintConfig']['basic'],
            $moduleConfig['hintConfig']['expanded']
        );

        $isAccountsModule = $module === 'Accounts';
        if (!$isAccountsModule) {
            $accountsModuleconfig = $adminBean->getConfigForModule('Accounts');
            $allAccountsFieldsThatWillBeDisplayed = array_merge(
                $accountsModuleconfig['hintConfig']['basic'],
                $accountsModuleconfig['hintConfig']['expanded']
            );
        }


        foreach ($hintPanel['fields'] as $field) {

            $key = is_array($field) ? $field['name'] : $field;
            $whiteList = (is_array($field) && array_key_exists('white_list', $field)) ? $field['white_list'] : false;
            $accountKey = (is_array($field) && array_key_exists('account_key', $field)) ? $field['account_key'] : false;
            $parentKey = (is_array($field) && array_key_exists('parent_key', $field)) ? $field['parent_key'] : false;

            $isFieldConfiguredToBeShown = in_array($key, $allFieldsThatWillBeDisplayed);
            $isParentKeyConfiguredToBeShown = $parentKey && in_array($parentKey, $allFieldsThatWillBeDisplayed);

            //When we're processing modules other than accounts (eg. contacts, leads) we may need to look at fields that are in the accounts metadata since those views are 'composed' of accounts info.  The
            //$isAccountsModule flag adds this restriction so that this logic is not considered when processing the accounts module itself.
            $isFieldInAccountsModuleAndConfiguredToBeShown = !$isAccountsModule
                && (in_array($key, $allAccountsFieldsThatWillBeDisplayed)
                    || ($accountKey
                        && in_array($accountKey, $allAccountsFieldsThatWillBeDisplayed)));

            if ($whiteList || $isFieldConfiguredToBeShown
                || $isParentKeyConfiguredToBeShown || $isFieldInAccountsModuleAndConfiguredToBeShown) {

                $filteredFields[] = $field;
            }
        }

        return $filteredFields;
    }
}
