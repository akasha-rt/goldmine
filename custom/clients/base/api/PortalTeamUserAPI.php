<?php

/**

 * Class PortalTeamUsers
 */
class PortalTeamUserAPI extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'createUser' => array(
                'reqType' => 'POST',
                'noLoginRequired' => false,
                'path' => array('createUser'),
                'method' => 'createUser',
                'shortHelp' => ' Create Portal User  EndPoint',
                'longHelp' => 'custom/clients/base/api/help/MyEndPoint_MyPOSTEndPoint_help.html',
            ),
            'createTeam' => array(
                'reqType' => 'POST',
                'noLoginRequired' => false,
                'path' => array('createTeam'),
                'method' => 'createTeam',
                'shortHelp' => ' Create portal team EndPoint',
                'longHelp' => 'custom/clients/base/api/help/MyEndPoint_MyPOSTEndPoint_help.html',
            ),
        );
    }

    /**
     * Method to be used for creating team
     */
    public function createTeam($api, $args)
    {
        $module = "PT_PortalTeams";
        $bean = BeanFactory::newBean($module);
        $bean->new_with_id = true;
        $bean->id = $args['ID'];
        $bean->first_name = 'Example Record';
        $bean->save();
        return $bean;
    }
    /**
     * Method to be used for creating team
     */
    public function createUser($api, $args)
    {
        $GLOBALS['log']->fatal("Args are " . print_r($args,1));
        $module = "PU_PortalUsers";
        $bean = BeanFactory::newBean($module);
        $bean->new_with_id = true;
        $bean->id = $args['id'];
        $bean->first_name = $args['name'];

        $bean->save();
        return $bean;
    }



}

?>