<?php
/* Smarty version 3.1.30, created on 2018-04-02 01:34:31
  from "C:\xampp\htdocs\littlelibrary8\templates\shared\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac16c87f3cf75_03092194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be63eb2bd64823ef16894ae0092210af938fd993' => 
    array (
      0 => 'C:\\xampp\\htdocs\\littlelibrary8\\templates\\shared\\header.tpl',
      1 => 1522625667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac16c87f3cf75_03092194 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
	<h1>Little Library</h1>
	<!--  <h2><a href="index.php?action=show_login_page">Login</a></h2> -->
	<h2><a href="index.php?action=login_logout"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['logInOut']->value)===null||$tmp==='' ? 'Login' : $tmp);?>
</a></h2>
</header><?php }
}
