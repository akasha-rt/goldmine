<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:49
  from '/var/www/html/starrettco_0413_12549075/modules/Teams/tpls/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d7dde5083_40894534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aebc66cb61bbb8515bb07c77e1a309f1bf529056' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/modules/Teams/tpls/DetailView.tpl',
      1 => 1664193964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d7dde5083_40894534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugar_teamset_badges.php','function'=>'smarty_function_sugar_teamset_badges',),));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team', false, 'key', 'tn', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_tn']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tn']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_tn']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_tn']->value['total'];
echo htmlspecialchars($_smarty_tpl->tpl_vars['team']->value['title'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['team']->value['badges']) {?> (<em><?php echo smarty_function_sugar_teamset_badges(array('items'=>$_smarty_tpl->tpl_vars['team']->value['badges']),$_smarty_tpl);?>
</em>)<?php }
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_tn']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tn']->value['last'] : null)) {?>, <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
