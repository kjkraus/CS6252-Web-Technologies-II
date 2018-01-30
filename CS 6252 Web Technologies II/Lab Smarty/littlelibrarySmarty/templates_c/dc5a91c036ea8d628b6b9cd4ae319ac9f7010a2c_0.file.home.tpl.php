<?php
/* Smarty version 3.1.30, created on 2018-01-30 01:58:47
  from "C:\xampp\htdocs\littlelibrarySmarty\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6fc347471758_45521972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc5a91c036ea8d628b6b9cd4ae319ac9f7010a2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\littlelibrarySmarty\\templates\\home.tpl',
      1 => 1517110134,
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
function content_5a6fc347471758_45521972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>Welcome to the Little Library</h2>
	<img src="templates/images/aLibrary.jpg" alt="image of empty library" width="216" height="240">
</main>

<?php echo '<?php
';?>include 'shared/footer.html';
<?php echo '?>';
}
}
