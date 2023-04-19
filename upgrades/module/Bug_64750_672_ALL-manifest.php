<?php

   $manifest =array(
       'acceptable_sugar_flavors' => array ('PRO','CORP','ENT','ULT'),
       'acceptable_sugar_versions' => array(
           'exact_matches' => array ('6.7.2'),
       ),
       'author' => 'SugarCRM',
       'description' => 'HotFix: New Opportunities with Closed status not calculating amount_usdollar',
       'icon' => '',
       'is_uninstallable' => false,
       'name' => 'Bug 64750 672 (ALL)',
       'published_date' => '2013-09-05 10:47:30',
       'type' => 'module',
       'version' => '1378378050',
   );

   $installdefs =array(
       'id' => 'package_1378378050',
       'copy' => array(
            0 => array(
                'from' => '<basepath>/Files/modules/Opportunities/Opportunity.php',
	            'to' => 'modules/Opportunities/Opportunity.php',
	        ),
	    ),
	);

?>