<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_bounced_c.php

 // created: 2022-05-13 13:48:03
$dictionary['Campaign']['fields']['bounced_c']['enforced']='false';
$dictionary['Campaign']['fields']['bounced_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_forwards_c.php

 // created: 2022-05-13 13:48:04
$dictionary['Campaign']['fields']['forwards_c']['enforced']='false';
$dictionary['Campaign']['fields']['forwards_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_delivered_c.php

 // created: 2022-05-13 13:48:04
$dictionary['Campaign']['fields']['delivered_c']['enforced']='false';
$dictionary['Campaign']['fields']['delivered_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_notreported_c.php

 // created: 2022-05-13 13:48:04
$dictionary['Campaign']['fields']['notreported_c']['enforced']='false';
$dictionary['Campaign']['fields']['notreported_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_social_c.php

 // created: 2022-05-13 13:48:04
$dictionary['Campaign']['fields']['social_c']['enforced']='false';
$dictionary['Campaign']['fields']['social_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_totalclicks_c.php

 // created: 2022-05-13 13:48:04
$dictionary['Campaign']['fields']['totalclicks_c']['enforced']='false';
$dictionary['Campaign']['fields']['totalclicks_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_peoplewhoclicked_c.php

 // created: 2022-05-13 13:48:04
$dictionary['Campaign']['fields']['peoplewhoclicked_c']['enforced']='false';
$dictionary['Campaign']['fields']['peoplewhoclicked_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_postdate_c.php

 // created: 2022-05-13 13:48:04
$dictionary['Campaign']['fields']['postdate_c']['options']='date_range_search_dom';
$dictionary['Campaign']['fields']['postdate_c']['enforced']='false';
$dictionary['Campaign']['fields']['postdate_c']['dependency']='';
$dictionary['Campaign']['fields']['postdate_c']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_totalopens_c.php

 // created: 2022-05-13 13:48:04
$dictionary['Campaign']['fields']['totalopens_c']['enforced']='false';
$dictionary['Campaign']['fields']['totalopens_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_sent_c.php

 // created: 2022-05-13 13:48:04
$dictionary['Campaign']['fields']['sent_c']['enforced']='false';
$dictionary['Campaign']['fields']['sent_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_peoplewhoopened_c.php

 // created: 2022-05-13 13:48:04
$dictionary['Campaign']['fields']['peoplewhoopened_c']['enforced']='false';
$dictionary['Campaign']['fields']['peoplewhoopened_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_unsubscribed_c.php

 // created: 2022-05-13 13:48:04
$dictionary['Campaign']['fields']['unsubscribed_c']['enforced']='false';
$dictionary['Campaign']['fields']['unsubscribed_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_unopened_c.php

 // created: 2022-05-13 13:48:04
$dictionary['Campaign']['fields']['unopened_c']['enforced']='false';
$dictionary['Campaign']['fields']['unopened_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['Campaign']['full_text_search']=false;

?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_campaign_type.php

 // created: 2023-01-27 20:28:54
$dictionary['Campaign']['fields']['campaign_type']['massupdate']=true;
$dictionary['Campaign']['fields']['campaign_type']['hidemassupdate']=false;
$dictionary['Campaign']['fields']['campaign_type']['comments']='The type of campaign';
$dictionary['Campaign']['fields']['campaign_type']['duplicate_merge']='enabled';
$dictionary['Campaign']['fields']['campaign_type']['duplicate_merge_dom_value']='1';
$dictionary['Campaign']['fields']['campaign_type']['merge_filter']='disabled';
$dictionary['Campaign']['fields']['campaign_type']['unified_search']=false;
$dictionary['Campaign']['fields']['campaign_type']['full_text_search']=array (
);
$dictionary['Campaign']['fields']['campaign_type']['calculated']=false;
$dictionary['Campaign']['fields']['campaign_type']['dependency']=false;
$dictionary['Campaign']['fields']['campaign_type']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/opportunities_campaigns_1_Campaigns.php

// created: 2023-01-27 20:36:23
$dictionary["Campaign"]["fields"]["opportunities_campaigns_1"] = array (
  'name' => 'opportunities_campaigns_1',
  'type' => 'link',
  'relationship' => 'opportunities_campaigns_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_CAMPAIGNS_1_FROM_CAMPAIGNS_TITLE',
  'id_name' => 'opportunities_campaigns_1opportunities_ida',
  'link-type' => 'one',
);
$dictionary["Campaign"]["fields"]["opportunities_campaigns_1_name"] = array (
  'name' => 'opportunities_campaigns_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CAMPAIGNS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_campaigns_1opportunities_ida',
  'link' => 'opportunities_campaigns_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Campaign"]["fields"]["opportunities_campaigns_1opportunities_ida"] = array (
  'name' => 'opportunities_campaigns_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CAMPAIGNS_1_FROM_CAMPAIGNS_TITLE_ID',
  'id_name' => 'opportunities_campaigns_1opportunities_ida',
  'link' => 'opportunities_campaigns_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/campaigns_opportunities_1_Campaigns.php

// created: 2023-02-14 15:41:44
$dictionary["Campaign"]["fields"]["campaigns_opportunities_1"] = array (
  'name' => 'campaigns_opportunities_1',
  'type' => 'link',
  'relationship' => 'campaigns_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_CAMPAIGNS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'campaigns_opportunities_1opportunities_idb',
);
$dictionary["Campaign"]["fields"]["campaigns_opportunities_1_name"] = array (
  'name' => 'campaigns_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CAMPAIGNS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'campaigns_opportunities_1opportunities_idb',
  'link' => 'campaigns_opportunities_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Campaign"]["fields"]["campaigns_opportunities_1opportunities_idb"] = array (
  'name' => 'campaigns_opportunities_1opportunities_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CAMPAIGNS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'campaigns_opportunities_1opportunities_idb',
  'link' => 'campaigns_opportunities_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
