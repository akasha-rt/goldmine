<?php

	if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

	require_once('include/connectors/sources/ext/rest/rest.php');

	class ext_rest_salesfusion extends ext_rest
	{

        public $orgName;
        public $iframeUrl;

		public function __construct()
		{
			parent::__construct();

			$this->_has_testing_enabled = false;
			$this->_enable_in_wizard = false;
			$this->_enable_in_hover = true;

            $this->orgName = $this->getProperty("organization_name");
            $this->iframeUrl = $this->getProperty("iframe_url");
		}


		public function getItem($args=array(), $module=null){}
		public function getList($args=array(), $module=null){}

	}
