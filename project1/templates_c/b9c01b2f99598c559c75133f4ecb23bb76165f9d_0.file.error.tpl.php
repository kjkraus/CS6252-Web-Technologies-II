<?php
/* Smarty version 3.1.30, created on 2018-02-22 02:05:10
  from "C:\xampp\htdocs\project1\templates\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8e17461b4af3_16173057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9c01b2f99598c559c75133f4ecb23bb76165f9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project1\\templates\\error.tpl',
      1 => 1519261091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shared/head.tpl' => 1,
    'file:shared/header.tpl' => 1,
    'file:shared/nav.tpl' => 1,
    'file:shared/footer.tpl' => 1,
  ),
),false)) {
function content_5a8e17461b4af3_16173057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>Page not found</h2>
	<?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>

</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
