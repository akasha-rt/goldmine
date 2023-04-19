<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
class AfterSaveDashboard
{
    public function afterSaveDashboardMethod($bean, $event, $arguments)
    {
        global $db;
        if ($arguments["isUpdate"] === true) {
            if (($arguments['dataChanges']['default_dashboard'] && $arguments['dataChanges']['default_dashboard']['after'] == 1) || (isset($arguments['dataChanges']['metadata']) && $bean->default_dashboard == 1)) {
                $dashboardMetadata = json_decode($bean->metadata);
                if ($dashboardMetadata->components) {
                    $filterIds = array();
                    if ($dashboardMetadata->components[0]->rows) {
                        $components = $dashboardMetadata->components[0]->rows;
                        foreach ($components as $key => $dashletComponents) {
                            foreach ($dashletComponents as $dashletComponentKey => $dashletComponent) {
                                if (isset($dashletComponent->view)) {
                                    if (isset($dashletComponent->view->filter_id)) {
                                        $filterIds[] = "'" . $dashletComponent->view->filter_id . "' ";
                                    }
                                }
                            }
                        }
                    }
                    if (!empty($filterIds)) {
                        $ids_string    = implode(",", $filterIds);
                        $queryToUpdate = "update filters set default_filter = 1 where id IN (" . $ids_string . " )";
                        $db->query($queryToUpdate);
                    }
                }
            }
        }
    }
}
