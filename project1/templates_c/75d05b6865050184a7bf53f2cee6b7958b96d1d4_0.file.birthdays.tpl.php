<?php
/* Smarty version 3.1.30, created on 2018-03-02 03:33:54
  from "C:\xampp\htdocs\project1\templates\birthdays.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98b8126111a4_66604415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d05b6865050184a7bf53f2cee6b7958b96d1d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project1\\templates\\birthdays.tpl',
      1 => 1519958032,
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
function content_5a98b8126111a4_66604415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
<div class="container">  
<h2>TLC Messages > Birthdays</h2>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message_catalog']->value, 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
?>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['message']->value->getCategory();?>

          <div class="panel-title pull-right">Author: <?php echo $_smarty_tpl->tpl_vars['message']->value->getAuthor();?>
</div>
        </div>
        <div class="panel-body">
          <img src="<?php echo $_smarty_tpl->tpl_vars['message']->value->getImage();?>
" class="img-responsive" style="width:100%" alt="Image">
          <?php echo $_smarty_tpl->tpl_vars['message']->value->getMessage();?>

        </div>
      </div>
        <form action="index.php" class="message" method="post">
          <div class='col-sm-3 form-group'>
            <input type="hidden" name="action" value="update_message">
            <input type="hidden" id="idID" name="id" value="<?php echo $_smarty_tpl->tpl_vars['message']->value->getID();?>
">
            <input class="btn btn-primary" type="submit" value="Update" id="idSubmitUpdate">
          </div>
        </form>
        <form action="index.php" class="message" method="post">
          <div class='col-sm-3 form-group'>
            <input type="hidden" name="action" value="remove_message">
            <input type="hidden" id="idID" name="id" value="<?php echo $_smarty_tpl->tpl_vars['message']->value->getID();?>
">
            <input class="btn btn-danger" type="submit" value="Delete" id="idSubmitDelete">
          </div>
        </form>        
        <form action="index.php" class="wmessage" method="post">
          <div class='col-sm-3 form-group'>
	        <input type="hidden" name="action" value="review_message">
            <input type="hidden" id="idID" name="id" value="<?php echo $_smarty_tpl->tpl_vars['message']->value->getID();?>
">
            <input class="btn btn-link" type="submit" value="View / Add Review" id="idSubmitReview">
          </div>
        </form>     
     </div>
</div><br><br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
