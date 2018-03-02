<?php
/* Smarty version 3.1.30, created on 2018-03-02 04:07:45
  from "C:\xampp\htdocs\project1\templates\update.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98c001039ad7_77528799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1243342e3d68ed55fd151c8ead6e9683f98b0dae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project1\\templates\\update.tpl',
      1 => 1519960063,
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
function content_5a98c001039ad7_77528799 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
<div class="container">  
<h2>TLC Messages > Update</h2>
<br><br>
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
    <div class="form-group">
       <div class="form-group">
    <label for="exampleTextArea">Category</label>
    <input type="text" class="form-control" id="categoryInput" value="<?php echo $_smarty_tpl->tpl_vars['message']->value->getCategory();?>
">
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Message content</label>
    <input type="text" class="form-control" id="exampleTextarea" rows="3" value="<?php echo $_smarty_tpl->tpl_vars['message']->value->getMessage();?>
"></textarea>
    <small id="messageHelp" class="form-text text-muted">Maximum 250 characters. This is the actual message intended for a recipient.</small>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Author</label>
    <input type="text" class="form-control" id="authorInput" value="<?php echo $_smarty_tpl->tpl_vars['message']->value->getAuthor();?>
">
    <small class="form-text text-muted">Maximum 10 characters. This entry will be displayed in the app. Please be discreet.</small>
  </div>  
  <form action="index.php" class="message" method="post">
          <div class='col-sm-3 form-group'>
            <input type="hidden" name="action" value="submit_update_message">
            <input type="hidden" id="idID" name="id" value="<?php echo $_smarty_tpl->tpl_vars['message']->value->getID();?>
">
            <input class="btn btn-primary" type="submit" value="Update" id="idSubmitUpdate">
          </div>
   </form>  
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
