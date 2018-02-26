<?php
/* Smarty version 3.1.30, created on 2018-02-25 21:00:48
  from "C:\xampp\htdocs\project1\templates\addnew.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9315f03279f6_60936014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67905452ccd80e554c8e883993386a52d185a81a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project1\\templates\\addnew.tpl',
      1 => 1519588845,
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
function content_5a9315f03279f6_60936014 (Smarty_Internal_Template $_smarty_tpl) {
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
  <div class="form-group">
    <label for="exampleSelect1">Category</label>
    <select class="form-control" id="exampleSelect1">
      <option>Humor</option>
      <option>Romance</option>
      <option>Birthdays</option>
      <option>Congratulations</option>
      <option>Apologies</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Message content</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    <small id="messageHelp" class="form-text text-muted">Maximum 250 characters. This is the actual message intended for a recipient.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Author</label>
    <input type="text" class="form-control" id="authorInput" placeholder="Name, intials, nickname etc.">
    <small class="form-text text-muted">Maximum 10 characters. This entry will be displayed in the app. Please be discreet.</small>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>          
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
