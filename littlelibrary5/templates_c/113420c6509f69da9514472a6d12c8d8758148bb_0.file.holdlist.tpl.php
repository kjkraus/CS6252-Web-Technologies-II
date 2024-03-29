<?php
/* Smarty version 3.1.30, created on 2018-03-10 03:27:22
  from "C:\xampp\htdocs\littlelibrary5\templates\holdlist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa3428a9e43d3_87239487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '113420c6509f69da9514472a6d12c8d8758148bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\littlelibrary5\\templates\\holdlist.tpl',
      1 => 1520648753,
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
function content_5aa3428a9e43d3_87239487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>You have selected the following books for a hold:</h2>
	<table>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book_catalog']->value, 'book');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
		<tr>
			<td>
				<b><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
 </b><br>
				by <?php echo $_smarty_tpl->tpl_vars['book']->value->getAuthor();?>

			</td>
		</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
	<form method="post" action="index.php" id="morebooksform">
		<input type="hidden" name="action" value="show_catalog_page">
		<input type="submit" value="Select more books" id="idSelectMoreBooks">
	</form>
	<form method="post" action="index.php">
		<input type="hidden" name="action" value="submit_hold">
		<input type="submit" value="Submit hold request" id="idSunmitHolds">
	</form>
	<p class="confirmation"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['confirmation']->value)===null||$tmp==='' ? '' : $tmp);?>
 </p>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
