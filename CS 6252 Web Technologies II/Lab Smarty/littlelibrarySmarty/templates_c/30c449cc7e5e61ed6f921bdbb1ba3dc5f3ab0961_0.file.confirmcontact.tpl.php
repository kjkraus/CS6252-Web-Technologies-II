<?php
/* Smarty version 3.1.30, created on 2018-02-02 03:00:55
  from "C:\xampp\htdocs\littlelibrarySmarty\templates\confirmcontact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a73c657a99d94_46573445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c449cc7e5e61ed6f921bdbb1ba3dc5f3ab0961' => 
    array (
      0 => 'C:\\xampp\\htdocs\\littlelibrarySmarty\\templates\\confirmcontact.tpl',
      1 => 1517536211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shared/head.tpl' => 1,
    'file:shared/header.tpl' => 1,
    'file:shared/nav.tpl' => 1,
  ),
),false)) {
function content_5a73c657a99d94_46573445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>Thank you for contacting us!</h2>
	We have received the following information:
	<p>
		Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<br>
		Email: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<br>
		<?php if (($_smarty_tpl->tpl_vars['phone']->value != '')) {?>
			Phone: <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
 <br>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['date']->value != '')) {?>
			Date: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 <br>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['library']->value != "none")) {?>
			Library: <?php echo $_smarty_tpl->tpl_vars['library']->value;?>
 <br>
		<?php }?>
		Comments: <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>
			
	</p>
	<form method="post" action="index.php">
		<input type="hidden" name="action" value="show_contact_page" id="idBack">
		<input type="submit" value="Back" id="idBack">
	</form>
</main>

<?php echo '<?php
';?>include 'shared/footer.html';
<?php echo '?>';
}
}
