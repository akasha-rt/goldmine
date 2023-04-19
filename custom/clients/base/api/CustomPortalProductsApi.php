<?php
/**
 *  STAR-139 Current User/Team Assigned Products

 */

require_once 'clients/base/api/FilterApi.php';

class CustomPortalProductsApi extends FilterApi {

    public function registerApiRest() {
        return array(
            'getAssignedProducts' => array(
                'reqType' => 'GET',
                'path' => array('getAssignedProducts','?'),
                'pathVars' => array('','userID'),
                'method' => 'getAssignedProducts',
                'shortHelp' => 'Returns Products linked to Current Team/Users',
                'longHelp' => '',
            ),
        );
    }

    public function getAssignedProducts(ServiceBase $api, array $args,$acl = 'list') {

        $GLOBALS['log']->fatal("check");
        $GLOBALS['log']->fatal($args['userID']);
//        $GLOBALS['log']->fatal(print_r($args,1));
//        return $api;
        if (!empty($args['q'])) {
            if (!empty($args['filter']) || !empty($args['filter_id']) || !empty($args['deleted'])) {
                // These flags can be used with the filter API, but not with the search API
                throw new SugarApiExceptionInvalidParameter();
            }
        }


        $api->action = 'list';
        list($args, $q, $options, $seed) = $this->filterListSetup($api, $args, $acl = 'list');
        if (isset($options['id_query'])) {
            unset($options['id_query']);
        }
        return $this->runQuery($api, $args, $q, $options, $seed);
    }

    public function filterListSetup(ServiceBase $api, array $args, $acl = 'list') {
        if (!isset($args['filter']) || !is_array($args['filter'])) {
            $args['filter'] = array();
        }
        $args['module'] = "ProductTemplates";
        list($args, $q, $options, $seed) = parent::filterListSetup($api, $args, $acl);

        $this->getCustomQuery($q, $args);

        return array($args, $q, $options, $seed);
    }

    protected function getCustomQuery($sugarQuery, $args) {
        $sugarQuery->joinTable(
            'producttemplates_pt_portalteams_1_c', array('alias' => 'teams', 'joinType' => 'INNER', 'linkingTable' => true)
        )
        ->on()
        ->equalsField($sugarQuery->getFromAlias() . '.id', 'teams.producttemplates_pt_portalteams_1producttemplates_ida')
        ->equals('teams.deleted', 0);
        // JOIN FOR PRODUCT ACCESSORIES WILL BE HERE
        $sugarQuery->joinTable(
            'pt_portalteams_pu_portalusers_c', array('alias' => 'team_users', 'joinType' => 'INNER', 'linkingTable' => true)
        )
        ->on()
        ->equalsField('team_users.pt_portalteams_pu_portaluserspt_portalteams_ida', 'teams.producttemplates_pt_portalteams_1pt_portalteams_idb')
        ->equals('team_users.pt_portalteams_pu_portaluserspu_portalusers_idb', $args['userID'])
        ->equals('team_users.deleted', 0);
        
        $sugarQuery->joinTable(
            'producttemplates_pu_portalusers_1_c', array('alias' => 'users', 'joinType' => 'INNER', 'linkingTable' => true)
        )
        ->on()
        ->equalsField($sugarQuery->getFromAlias() . '.id', 'users.producttemplates_pu_portalusers_1producttemplates_ida')
        ->equals('users.producttemplates_pu_portalusers_1pu_portalusers_idb', $args['userID'])
        ->equals('users.deleted', 0);
    }


}
