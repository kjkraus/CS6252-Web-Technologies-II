<?php
/* Smarty version 3.1.30, created on 2018-02-16 02:35:30
  from "C:\xampp\htdocs\littlelibrary4\templates\deletebook.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8635628566d8_69622191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1b16d07496ecee2c02a996bb8a6fb08c5c596e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\littlelibrary4\\templates\\deletebook.tpl',
      1 => 1518744543,
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
function content_5a8635628566d8_69622191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>Delete Book</h2>
	<form method="post" id="editbookform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="remove_book" >
		<input type="hidden" id="idID" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<label for="idTitle">Title: </label>
			<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<br>
		<label for="idAuthor">Author: </label>
			<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
<br>
		<label for="idPages">Pages: </label>
			<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
<br>
		<label for="idPublisher">Publisher: </label>
			<?php echo $_smarty_tpl->tpl_vars['publisher']->value;?>
<br>
		<label for="idCost">Cost: </label>
			<?php echo $_smarty_tpl->tpl_vars['cost']->value;?>
<br>
		<input type="submit" value="Remove" id="idSubmit">
	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
