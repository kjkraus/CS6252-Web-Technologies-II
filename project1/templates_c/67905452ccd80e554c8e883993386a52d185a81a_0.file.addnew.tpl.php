<?php
/* Smarty version 3.1.30, created on 2018-03-02 11:13:40
  from "C:\xampp\htdocs\project1\templates\addnew.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9923d4b08ff2_32072297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67905452ccd80e554c8e883993386a52d185a81a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project1\\templates\\addnew.tpl',
      1 => 1519985615,
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
function content_5a9923d4b08ff2_32072297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
<div class="container">  
<h2>TLC Messages > +Add</h2>
<br><br>
  <div class="col-sm-4">
     <div class="form-group">
     <form method="post" id="submitnewform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="submit_new_message" >
		<label for="idCategory">Category</label>
		<textarea class="form-control" id="iddCategory" name="category" rows="1" cols="20" required="required"></textarea><br>
		<label for="idAuthor">Author</label>
		<textarea class="form-control" id="iddAuthor" name="author" rows="1" cols="20" required="required"></textarea>
		<small class="form-text text-muted">Maximum 10 characters.</small><br><br>
		<label for="idReview">Message Content</label>
		<textarea class="form-control" id="iddNewMessage" name="message" rows="2" cols="20" required="required"></textarea>
		<small id="messageHelp" class="form-text text-muted">Maximum 250 characters.</small><br><br>
		<button type="submit" class="btn btn-primary" value="Submit" id="idSubmit">Submit</button>
	</form>
</div>
</div>  
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
