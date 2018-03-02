<?php
/* Smarty version 3.1.30, created on 2018-03-02 03:15:40
  from "C:\xampp\htdocs\project1\templates\visitors.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98b3cc29b8d6_00071143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfa9b746b422537dff4a352b7aadb8e362ce074b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project1\\templates\\visitors.tpl',
      1 => 1519956937,
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
function content_5a98b3cc29b8d6_00071143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
  <div class="container">
  <h2>TLC Messages > Visitors</h2>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['visitor_catalog']->value, 'visitor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['visitor']->value) {
?>
  <div class="row">
    <div class="col-sm-4">
      <div class="alert alert-success" role="alert">
  		<strong><?php echo $_smarty_tpl->tpl_vars['visitor']->value->getSignature();?>
</strong> visited on <?php echo $_smarty_tpl->tpl_vars['visitor']->value->getDate();?>

	  </div>		    
    </div>
  </div>
<div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</main>
<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
