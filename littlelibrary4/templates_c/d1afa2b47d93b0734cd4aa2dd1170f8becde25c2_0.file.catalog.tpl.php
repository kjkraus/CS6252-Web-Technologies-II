<?php
/* Smarty version 3.1.30, created on 2018-02-16 01:55:55
  from "C:\xampp\htdocs\littlelibrary4\templates\catalog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a862c1b926807_98906844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1afa2b47d93b0734cd4aa2dd1170f8becde25c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\littlelibrary4\\templates\\catalog.tpl',
      1 => 1518742548,
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
function content_5a862c1b926807_98906844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main id="catalog">
    <h2>Catalog of Books</h2>
    <table>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book_catalog']->value, 'book');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
		<tr>
			<td>
				<form action="index.php" id="editform" method="post">
                    <input type="hidden" name="action" value="edit_book_form">
                    <input type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->getID();?>
">
                    <input type="submit" value="Edit" id="idSubmitEdit">
                </form>
                <form action="index.php" id="deletebook" method="post">
                	<input type="hidden" name="action" value="delete_book">
                	<input type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->getID();?>
">
                	<input type="submit" value="Delete" id="idSubmitDelete">
                </form>
			</td>
			<td>
				<img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->getImage();?>
" alt="Cover Image" width="100">
			</td>
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
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
