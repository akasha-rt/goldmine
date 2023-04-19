<?php
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

require_once 'include/MVC/View/views/view.list.php';

class UsersViewLoginas extends ViewList
{
    public function preDisplay()
    {
        $params   = array();
        $params[] = "Select User to Login as: ";
        echo getClassicModuleTitle('Users', $params, true);

        //bug #46690: Developer Access to Users/Teams/Roles
        if (!$GLOBALS['current_user']->isAdminForModule('Users') && !$GLOBALS['current_user']->isDeveloperForModule('Users')) {
            //instead of just dying here with unauthorized access will send the user back to his/her settings
            SugarApplication::redirect('index.php?module=Users&action=DetailView&record=' . $GLOBALS['current_user']->id);
        }
        $this->lv         = new ListViewSmarty();
        $this->lv->delete = false;
        $this->lv->email  = false;

    }

    public function listViewProcess()
    {
        $this->processSearchForm();
        $this->lv->searchColumns = $this->searchForm->searchColumns;

        if (!$this->headers) {
            return;
        }

        if (empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false) {
            $this->lv->ss->assign("SEARCH", true);
            if (!empty($this->where)) {
                $this->where .= " AND";
            }
            $this->where .= " (users.status !='Reserved' or users.status is null) ";
            $this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
            $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
            echo $this->lv->display();
            //javascript for changing backlink on users name
            $code = <<<EOQ
<script type="text/javascript">
function changeBackLinks(){
$('[class$=ListRowS1] td a').each(function(){
	var last_url = $(this).attr('href');
	var edit_view_index = last_url.indexOf('EditView');
	if(edit_view_index ==  '-1'){
		var keyword = 'record=';
		var index_of_id = last_url.indexOf(keyword);
		var user_id = last_url.substring(index_of_id + keyword.length);
		$(this).attr('href','index.php?module=Administration&action=LoginAs&user_id='+user_id);
	}
});
}
changeBackLinks();
</script>
EOQ;
            echo $code;
        }
    }
}
