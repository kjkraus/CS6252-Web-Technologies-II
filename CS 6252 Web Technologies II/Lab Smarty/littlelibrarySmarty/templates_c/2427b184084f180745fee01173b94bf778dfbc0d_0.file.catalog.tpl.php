<?php
/* Smarty version 3.1.30, created on 2018-02-02 03:02:19
  from "C:\xampp\htdocs\littlelibrarySmarty\templates\catalog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a73c6ab692715_66831674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2427b184084f180745fee01173b94bf778dfbc0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\littlelibrarySmarty\\templates\\catalog.tpl',
      1 => 1517536935,
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
function content_5a73c6ab692715_66831674 (Smarty_Internal_Template $_smarty_tpl) {
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
			<?php if ((!$_smarty_tpl->tpl_vars['book']->value->issetImage())) {?> 
    			<img src="<?php echo $_smarty_tpl->tpl_vars['default_image']->value;?>
"  alt="Cover Image" width="100"> 
    		<?php } else { ?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->getImage();?>
"  alt="Cover Image" width="100">
			<?php }?> 
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

<?php echo '<?php
';?>include 'shared/footer.html';
<?php echo '?>';
}
}
