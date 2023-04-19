<?php
/* Smarty version 3.1.45, created on 2023-04-13 11:53:52
  from '/var/www/html/starrettco_0413_12549075/themes/RacerX/tpls/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_6437ed50739091_45607628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e6043f80ac0a6711bad5d72377e25ade5ef9120' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/themes/RacerX/tpls/header.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:themes/RacerX/tpls/_head.tpl' => 1,
  ),
),false)) {
function content_6437ed50739091_45607628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:themes/RacerX/tpls/_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('theme_template'=>true), 0, false);
?>
<body class="yui-skin-sam sugar-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['appearance']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-theme">
    <a name="top"></a>
    <div style="position:fixed;top:0;left:0;width:1px;height:1px;z-index:21;"></div>
    <div class="clear"></div>

<div id="main">
    <div id="content">
        <?php if ($_smarty_tpl->tpl_vars['use_table_container']->value) {?>
        <table style="width:100%" id="contentTable"><tr><td>
        <?php }
}
}
