<?php

namespace Sugarcrm\Sugarcrm\custom\Hint;

use Sugarcrm\Sugarcrm\custom\Hint\Logger\Logger as HintLogger;

class ConfigurationManager
{
    public static function updateHintConfigEntry($key, $value) {
        $admin = \BeanFactory::newBean('Administration');
        $module = HintConstants::HINT_CONFIG_MAP[$key]['module'];
        $platform = HintConstants::HINT_CONFIG_MAP[$key]['platform'];
        $name = HintConstants::HINT_CONFIG_MAP[$key]['name'];
        $admin->saveSetting($module, $name, $value, $platform);
    }

    public static function getHintConfigEntry($key) {
        $configBean = \BeanFactory::newBean('Administration');
        $query = new \SugarQuery();
        $query->select(['*']);
        $query->from($configBean);
        $query->where()
            ->equals('category', HintConstants::HINT_CONFIG_MAP[$key]['module'])
            ->equals('platform', HintConstants::HINT_CONFIG_MAP[$key]['platform'])
            ->equals('name', HintConstants::HINT_CONFIG_MAP[$key]['name']);
        $response = $query->execute();
        return count($response) > 0 ? $response[0] : null;
    }

    public static function updateHintFieldViewDefsConfigEntries($value, $module) {
        $admin = \BeanFactory::newBean('Administration');
        $platform = 'base';
        $name = 'hintConfig';
        $admin->saveSetting($module, $name, $value, $platform);
    }

    public static function createInitialModuleConfig($configFieldsForModule) {
        $configArray = [];
        for ($x = 0; $x < count($configFieldsForModule); $x++) {
            $key = $configFieldsForModule[$x];
            $configArray[$key] = true;
        }
        return $configArray;
    }

    public static function shouldShowCustomUninstall() {
        // Sugar versions where platform fix is available.
        $fixedSugarVersions = [
            '^10\.([2-9]+)\.([1-9]+)',   // 10.2.1 and above
            '^10\.([3-9]+)\.([0-9]+)',   // 10.3.0 and above
            '^11\.([0-9]+)\.([0-9]+)',   // 11.x.x
        ];
        $newPackageManagerExists = class_exists(\Sugarcrm\Sugarcrm\PackageManager\PackageManager::class);
        $sugarVersion = $GLOBALS['sugar_config']['sugar_version'];
        if ($newPackageManagerExists) {
            foreach ($fixedSugarVersions as $match) {
                if (preg_match("/$match/i", $sugarVersion)) {
                    return true;
                }
            }
        }
        return false;
    }

    public static function getHintUpgradeHistory() {
        $upgradeHistoryBean = \BeanFactory::newBean('UpgradeHistory');
        $query = new \SugarQuery();
        $query->select(['*']);
        $query->from($upgradeHistoryBean);
        $query->where()
            ->equals('id_name', 'hint-package')
            ->equals('status', 'installed');
        $response = $query->execute();
        return count($response) > 0 ? $response[0] : null;
    }

    public static function doesTableContainsRows($tableModuleName) {
        $tableBean = \BeanFactory::newBean($tableModuleName);
        $query = new \SugarQuery();
        $query->select(['*']);
        $query->from($tableBean);
        $response = $query->execute();
        return count($response) > 0 ? true : false;
    }

    /**
     * Ensure current user has admin permissions
     * @throws \SugarApiExceptionNotAuthorized
     */
    public static function ensureAdminUser() {
        global $current_user, $app_strings;

        if (!$current_user->isAdmin()) {
            $logger = new HintLogger();
            $logger->alert('Hint: Non Admin user exception');
            throw new \SugarApiExceptionNotAuthorized($app_strings['EXCEPTION_NOT_AUTHORIZED']);
        }
    }

    public static function isHintUser() {
        global $current_user, $sugar_version;
        $id = $current_user->id;
        // Depending on the sugar version and the license type it displays the Hint-Tab.
        if (version_compare($sugar_version, '10.3.0', '>=')) {
            $userBean = \BeanFactory::retrieveBean('Users', $id);
            $licenses = strtolower($userBean->license_type);
            if (strpos($licenses, 'hint')) {
                return true;
            }
            return false;
        }
        return true;
    }

    public static function isSugarProUser() {
        global $sugar_version, $sugar_flavor;
        $isValidSugerVersion = version_compare($sugar_version, '10.3.0', '>=');
        return $sugar_flavor === 'PRO' && $isValidSugerVersion;
    }

    public static function versionComparePHP()
    {
        $sugarVersion = $GLOBALS['sugar_config']['sugar_version'];
        $validSugarVersion = '9.1.0';
        if ($sugarVersion) {
            $versionLimit = explode('.', $validSugarVersion);
            $currentSugarVerion = explode('.', $sugarVersion);
            $len = min(count($versionLimit), count($currentSugarVerion));

            for ($i = 0; $i < $len; $i++) {
                if (intval($versionLimit[$i]) > intval($currentSugarVerion[$i])) {
                    return -1;
                }

                if (intval($versionLimit[$i]) < intval($currentSugarVerion[$i])) {
                    return 1;
                }
            }
            if (count($versionLimit) > count($currentSugarVerion)) {
                return -1;
            }
            if (count($versionLimit) < count($currentSugarVerion)) {
                return 1;
            }
            return 1;
        }
        return -1;
    }
}
