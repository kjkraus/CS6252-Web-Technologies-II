<?php
/* Smarty version 3.1.30, created on 2018-04-01 21:30:25
  from "C:\xampp\htdocs\littlelibrary8\templates\registration.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac133511d8027_36341182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '716de565c9889340440bf9c8d4e55106266a4590' => 
    array (
      0 => 'C:\\xampp\\htdocs\\littlelibrary8\\templates\\registration.tpl',
      1 => 1522610049,
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
function content_5ac133511d8027_36341182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>User Registration</h2>
	<form method="post" id="userregistrationform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="process_registration_form" >
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('firstName');?>
</span>
		<label for="idName">* First Name: </label>
		<input type="text" id="idName" name="firstName" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('firstName');?>
">
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('lastName');?>
</span>
		<label for="idName">* Last Name: </label>
		<input type="text" id="idName" name="lastName" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('lastName');?>
">
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('email');?>
</span>
		<label for="idEmail">* E-mail: </label>
		<input type="email" id="idEmail" name="email" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('email');?>
">
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('phone');?>
</span>
		<label for="idPhone">Phone: </label>
		<input type="tel" id="idPhone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('phone');?>
">
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('password');?>
</span>
		<label for="idEmail">* Password: </label>
		<input type="text" id="idPassword" name="password" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('password');?>
">
		<input type="submit" value="Submit" id="idSubmit">
	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
