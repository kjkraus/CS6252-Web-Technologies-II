<?php
/* Smarty version 3.1.30, created on 2018-03-02 04:04:58
  from "C:\xampp\htdocs\project1\templates\addnew.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98bf5af2bc96_71125448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67905452ccd80e554c8e883993386a52d185a81a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project1\\templates\\addnew.tpl',
      1 => 1519959261,
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
function content_5a98bf5af2bc96_71125448 (Smarty_Internal_Template $_smarty_tpl) {
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
  <form>
  <div class="col-sm-4">
   <div class="form-group">
       <div class="form-group">
    <label for="exampleTextArea">Category</label>
    <input type="text" class="form-control" id="categoryInput" >
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Message content</label>
    <input type="text" class="form-control" id="exampleTextarea" rows="3">
    <small id="messageHelp" class="form-text text-muted">Maximum 250 characters. This is the actual message intended for a recipient.</small>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Author</label>
    <input type="text" class="form-control" id="authorInput">
    <small class="form-text text-muted">Maximum 10 characters. This entry will be displayed in the app. Please be discreet.</small>
  </div>  
  <form action="index.php" class="message" method="post">
    <div class='col-sm-3 form-group'>
      <input type="hidden" name="action" value="submit_update_message">
      <input type="hidden" id="idID" name="id" >
      <input class="btn btn-primary" type="submit" value="Submit" id="idSubmitUpdate">
    </div>
  </form>  
</div>        
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
