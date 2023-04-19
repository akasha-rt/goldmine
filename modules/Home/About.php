<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
 * Copyright (C) 2004-2014 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/


//NOTE: Under the License referenced above, you are required to leave in all copyright statements in both
//the code and end-user application.

global $sugar_config, $mod_strings;
include('ThirdPartyCredits.php');
?>
<style type="text/css">
ul li {
list-style-type: square;
}
</style>
<?php echo getVersionedScript("modules/Home/about.js"); ?>
<span>
<div class="about" style="padding: 10px 15px 20px 15px;">
<p>
<h1><IMG src="include/images/sugar_md.png" alt="SugarCRM" width="425" height="30" ondblclick='abouter.display();'></h1>
<br>
<b><?php echo $mod_strings['LBL_VERSION']." ".$sugar_version." (".$mod_strings['LBL_BUILD']." ".$sugar_build.")";
    if( is_file( "custom_version.php" ) ){
        include( "custom_version.php" );
        print( "&nbsp;&nbsp;&nbsp;" . $custom_version );
    }
?>
</b></p>

<?php
echo "<P>Copyright ".$app_strings['LBL_SUGAR_COPYRIGHT_SUB']."</P>";




$imgTagString = '<P><A href="http://www.sugarcrm.com" target="_blank"> <!--not_in_theme!--><img style="margin-top: 2px" border="0" width="120" height="34" src="'.getJSPath('include/images/poweredby_sugarcrm_65.png').'" alt="'.$mod_strings['LBL_POWERED_BY_SUGAR'].'"></A>';


echo $imgTagString;
?>

<?php


?>

<P> SugarCRM &reg;,
<?php


// Product Name for Professional edition.
$theProductName = "Sugar Professional";
echo $theProductName."&#8482; ".$mod_strings['LBL_AND']." Sugar&#8482; ".$mod_strings['LBL_ARE'];
?>
<a href="http://www.sugarcrm.com/crm/open-source/trademark-information.html"
	target="_blank">
	<?php echo $mod_strings['LBL_TRADEMARKS']."</a> ".$mod_strings['LBL_OF']; ?> SugarCRM Inc.</p>


<p ><table width="100%" border="0" cellspacing="0" cellpadding="0" class="contentBox">
<tr>
    <td  style="padding-right: 10px;" valign="top" rowspan="2" width="300" >

<object  classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="//fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="300" height="300" id="SugarPlanet" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="include/images/SugarPlanet.swf" />
<param name="quality" value="high" />
<param name="bgcolor" value="#ffffff" />
<param name="wmode" value="opaque" />
<embed  src="include/images/SugarPlanet.swf" wmode="opaque" quality="high" bgcolor="#ffffff" width="300" height="300" name="SugarPlanet" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="//www.macromedia.com/go/getflashplayer" />
</object>
<br>
<h3><?php echo $mod_strings['LBL_GET_SUGARCRM_RSS']; ?></h3>

<ul class="noBullet">
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarcrm.com/crm/index2.php?no_html=1&stype=rss20&task=returnRSS&option=com_rss_feed_manager&channel=Corporate" target="_blank"><!--not_in_theme!--><img src="<?php echo getJSPath('include/images/rss_xml.gif'); ?>" border="0" alt="XML" align="top">&nbsp;<?php echo $mod_strings['LBL_SUGARCRM_NEWS']; ?></a></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarcrm.com/forums/external.php?type=rss" target="_blank"><!--not_in_theme!--><img src="<?php echo getJSPath('include/images/rss_xml.gif'); ?>" border="0" alt="XML" align="top">&nbsp;<?php echo $mod_strings['LBL_SUGARCRM_FORUMS']; ?></a></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarforge.org/export/rss_sfnews.php" target="_blank"><!--not_in_theme!--><img src="<?php echo getJSPath('include/images/rss_xml.gif'); ?>" border="0" alt="XML" align="top">&nbsp;<?php echo $mod_strings['LBL_SUGARFORGE_NEWS']; ?></a></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarcrm.com/crm/index2.php?no_html=1&stype=rss20&task=returnRSS&option=com_rss_feed_manager&channel=all" target="_blank"><!--not_in_theme!--><img src="<?php echo getJSPath('include/images/rss_xml.gif'); ?>" border="0" alt="XML" align="top">&nbsp;<?php echo $mod_strings['LBL_ALL_NEWS']; ?></a></li>
</ul>
<br>
<h3><?php echo $mod_strings['LBL_JOIN_SUGAR_COMMUNITY']; ?></h3>
<ul class="noBullet">
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarforge.org/" target="_blank">SugarForge</a>: <?php echo $mod_strings['LBL_DETAILS_SUGARFORGE']; ?><br></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarexchange.com/" target="_blank">SugarExchange</a>: <?php echo $mod_strings['LBL_DETAILS_SUGAREXCHANGE']; ?><br></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarcrm.com/crm/university" target="_blank"><?php echo $mod_strings['LBL_TRAINING']; ?></a>: <?php echo $mod_strings['LBL_DETAILS_TRAINING']; ?><br></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarcrm.com/forums/" target="_blank"><?php echo $mod_strings['LBL_FORUMS']; ?></a>: <?php echo $mod_strings['LBL_DETAILS_FORUMS']; ?><br></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarcrm.com/wiki/" target="_blank"><?php echo $mod_strings['LBL_WIKI']; ?></a>: <?php echo $mod_strings['LBL_DETAILS_WIKI']; ?></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://developer.sugarcrm.com/" target="_blank"><?php echo $mod_strings['LBL_DEVSITE']; ?></a>: <?php echo $mod_strings['LBL_DETAILS_DEVSITE']; ?></li>
</ul>

</td>

    <td colspan="2" valign="top" style="padding: 15px 10px 0px 10px;"><h3>SugarCRM Inc.</h3>

		10050 North Wolfe Road, Suite SW2-130, Cupertino, CA, 95014 USA,&nbsp;
		+1 (408) 454-6940,&nbsp;

<a href="http://www.sugarcrm.com" target="_blank">http://www.sugarcrm.com</a>

<iframe id='abouterdiv' border=0  width=500 style='overflow:hidden;display:none' frameborder="0" marginwidth="0" marginheight="0">
</iframe>
</td>
</tr>

<tr>
    <td valign="top" style="padding: 15px 10px 15px 10px;">
<p><B><a href="http://www.sugarforge.org/content/community/community-spotlight/contributions.php" target="_blank"><?php echo $mod_strings['LBL_LINK_CURRENT_CONTRIBUTORS']; ?></a></b></p>

<P>&nbsp;</p>
<P><h3><?php echo $mod_strings['LBL_SOURCE_CODE']; ?></h3></p>
<ul style="margin-bottom: 20px; padding-left: 0px;">
<LI><?php echo $mod_strings['LBL_SOURCE_SUGAR']; ?> (<A href="http://www.sugarcrm.com" target="_blank">http://www.sugarcrm.com</A>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_XTEMPLATE']; ?> (<A href="http://sourceforge.net/projects/xtpl" target="_blank">http://sourceforge.net/projects/xtpl</A>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_NUSOAP']; ?> (<a href="http://sourceforge.net/projects/nusoap/" target="_blank">http://sourceforge.net/projects/nusoap/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_HTTP_WEBDAV_SERVER']; ?> (<a href="http://pear.php.net/package/HTTP_WebDAV_Server" target="_blank">http://pear.php.net/package/HTTP_WebDAV_Server</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_PCLZIP']; ?> (<a href="http://www.phpconcept.net/pclzip/" target="_blank">http://www.phpconcept.net/pclzip/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_SMARTY']; ?> (<a href="http://www.smarty.net/" target="_blank">http://www.smarty.net/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_YAHOO_UI_LIB']; ?> (<a href="http://developer.yahoo.net/yui/" target="_blank">http://developer.yahoo.net/yui/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JSHRINK']; ?> (<a href="https://github.com/tedivm/JShrink/" target="_blank">https://github.com/tedivm/JShrink/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_PHPMAILER']; ?> (<a href="http://sourceforge.net/projects/phpmailer/" target="_blank">http://sourceforge.net/projects/phpmailer/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_CRYPT_BLOWFISH']; ?> (<a href="http://pear.php.net/package/Crypt_Blowfish/" target="_blank">http://pear.php.net/package/Crypt_Blowfish/</a>) </LI>
<LI><?php echo $mod_strings['LBL_SOURCE_XML_HTMLSAX3']; ?> (<a href="http://pear.php.net/package/XML_HTMLSax3/" target="_blank">http://pear.php.net/package/XML_HTMLSax3/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_YAHOO_UI_LIB_EXT']; ?> (<a href="http://www.jackslocum.com/blog/" target="_blank">http://www.jackslocum.com/blog/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_SWFOBJECT']; ?> (<a href="http://blog.deconcept.com/swfobject/" target="_blank">http://blog.deconcept.com/swfobject</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_TINYMCE']; ?> (<a href="http://wiki.moxiecode.com/index.php/TinyMCE:Index" target="_blank">http://wiki.moxiecode.com/index.php/TinyMCE:Index</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_TCPDF']; ?> (<a href="http://www.tcpdf.org/" target="_blank">http://www.tcpdf.org/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_RECAPTCHA']; ?> (<a href="http://recaptcha.net/" target="_blank">http://recaptcha.net/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_CSSMIN']; ?> (<a href="http://code.google.com/p/cssmin/" target="_blank">http://code.google.com/p/cssmin/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_PHPSAML']; ?> (<a href="https://github.com/onelogin/php-saml" target="_blank">https://github.com/onelogin/php-saml/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_ISCROLL']; ?> (<a href="http://cubiq.org/iscroll" target="_blank">http://cubiq.org/iscroll</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JIT']; ?> (<a href="http://thejit.org/" target="_blank">http://thejit.org/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_FLASHCANVAS']; ?> (<a href="http://flashcanvas.net/" target="_blank">http://flashcanvas.net/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_ZEND']; ?> (<a href="http://framework.zend.com/" target="_blank">http://framework.zend.com/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_PARSECSV']; ?> (<a href="http://code.google.com/p/parsecsv-for-php/" target="_blank">http://code.google.com/p/parsecsv-for-php/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_PHPJS']; ?> (<a href="http://phpjs.org/" target="_blank">http://phpjs.org/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_PHPSQL']; ?> (<a href="http://code.google.com/p/php-sql-parser/" target="_blank">http://code.google.com/p/php-sql-parser/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_HTMLPURIFIER']; ?> (<a href="http://htmlpurifier.org/" target="_blank">http://htmlpurifier.org/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_PHPEXCEL']; ?> (<a href="http://www.codeplex.com/PHPExcel" target="_blank">http://www.codeplex.com/PHPExcel</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JQUERY']; ?> (<a href="http://jquery.com/" target="_blank">http://jquery.com/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_PLACEHOLDER']; ?> (<a href="https://github.com/danielstocks/jQuery-Placeholder" target="_blank">https://github.com/danielstocks/jQuery-Placeholder</a>) <?php echo $mod_strings['LBL_SOURCE_PLACEHOLDER_BROKEN_URL']; ?></LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JQUERYUI']; ?> (<a href="https://github.com/jquery/jquery-ui" target="_blank">https://github.com/jquery/jquery-ui</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_BACKBONE']; ?> (<a href="http://backbonejs.org/" target="_blank">http://backbonejs.org/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_CHOSEN']; ?> (<a href="http://harvesthq.github.com/chosen/" target="_blank">http://harvesthq.github.com/chosen/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_HANDLEBARS']; ?> (<a href="http://handlebarsjs.com/" target="_blank">http://handlebarsjs.com</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JASMINE']; ?> (<a href="http://pivotal.github.com/jasmine/" target="_blank">http://pivotal.github.com/jasmine/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JQUERY_IFRAME']; ?> (<a href="http://cmlenz.github.com/jquery-iframe-transport/" target="_blank">http://cmlenz.github.com/jquery-iframe-transport/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_SINON']; ?> (<a href="http://sinonjs.org/" target="_blank">http://sinonjs.org/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_STASH']; ?> (<a href="http://rezitech.github.com/stash/" target="_blank">http://rezitech.github.com/stash/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_BOOTSTRAP']; ?> (<a href="http://twitter.github.com/bootstrap/" target="_blank">http://twitter.github.com/bootstrap/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_ASYNC']; ?> (<a href="https://github.com/caolan/async/" target="_blank">https://github.com/caolan/async/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_TIMEAGO']; ?> (<a href="https://github.com/rmm5t/jquery-timeago" target="_blank">https://github.com/rmm5t/jquery-timeago</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_XHPROF']; ?> (<a href="https://github.com/facebook/xhprof" target="_blank">https://github.com/facebook/xhprof</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_ELASTICA']; ?> (<a href="https://github.com/ruflin/Elastica" target="_blank">https://github.com/ruflin/Elastica</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_FACEBOOKSDK']; ?> (<a href="https://github.com/facebook/facebook-php-sdk" target="_blank">https://github.com/facebook/facebook-php-sdk</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JQUERY']; ?> (<a href="http://jquery.com/" target="_blank">http://jquery.com</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JQUERY_UI']; ?> (<a href="http://jqueryui.com/" target="_blank">http://jqueryui.com</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_OVERLIB']; ?> (<a href="http://www.macridesweb.com/oltest/" target="_blank">http://www.macridesweb.com/oltest</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_XMLSECLIBS']; ?> (<a href="http://code.google.com/p/xmlseclibs/" target="_blank">http://code.google.com/p/xmlseclibs/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_WICK']; ?> (<a href="http://wick.sourceforge.net/" target="_blank">http://wick.sourceforge.net/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_PNGBEHAVIOR']; ?> (<a href="http://webfx.eae.net/dhtml/pngbehavior/pngbehavior.html" target="_blank">http://webfx.eae.net/dhtml/pngbehavior/pngbehavior.html</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_HTMLSAFE']; ?> (<a href="http://pear.php.net/package/HTML_Safe/" target="_blank">http://pear.php.net/package/HTML_Safe/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_OAUTH2PHP']; ?> (<a href="http://github.com/quizlet/oauth2-php" target="_blank">http://github.com/quizlet/oauth2-php</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_ADOBEFONTS']; ?> (<a href="http://partners.adobe.com/public/developer/font/index.html" target="_blank">http://partners.adobe.com/public/developer/font/index.html</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_ELEMENTREADY']; ?> (<a href="http://thunderguy.com/semicolon/2007/08/14/elementready-jquery-plugin/" target="_blank">http://thunderguy.com/semicolon/2007/08/14/elementready-jquery-plugin/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_HOVERINTENT']; ?> (<a href="http://cherne.net/brian/resources/jquery.hoverIntent.html" target="_blank">http://cherne.net/brian/resources/jquery.hoverIntent.html</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_SLIMSCROLL']; ?> (<a href="http://rocha.la/jQuery-slimScroll" target="_blank">http://rocha.la/jQuery-slimScroll</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_TIPTIP']; ?> (<a href="http://code.drewwilson.com/entry/tiptip-jquery-plugin" target="_blank">http://code.drewwilson.com/entry/tiptip-jquery-plugin</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_SHOWLOADING']; ?> (<a href="http://www.contextllc.com" target="_blank">http://www.contextllc.com</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_SUPERFISH']; ?> (<a href="http://users.tpg.com.au/j_birch/plugins/superfish/changelog.txt" target="_blank">http://users.tpg.com.au/j_birch/plugins/superfish/changelog.txt</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_DATATABLE']; ?> (<a href="http://datatables.net/" target="_blank">http://datatables.net/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JEDITABLE']; ?> (<a href="http://www.appelsiini.net/projects/jeditable" target="_blank">http://www.appelsiini.net/projects/jeditable</a>)</LI>
</ul>

<?php foreach($credits as $type => $details) {
	echo "<P><h3>". $type . "</h3></p>";
	echo "<ul style=\"margin-bottom: 20px; padding-left: 0px;\">";
		foreach($details as $key => $value) {
			echo "<li><b>".$value['name']."</b> by ".$value['author']." (<a href='http://{$value['website']}' target='_blank'>".$value['website']."</a>)</li>";
		}
	echo "</ul>";
}?>
	</td>

</tr>
</table>

</span>

<br>


</div>
