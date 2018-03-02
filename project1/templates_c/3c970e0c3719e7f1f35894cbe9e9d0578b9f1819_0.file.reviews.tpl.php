<?php
/* Smarty version 3.1.30, created on 2018-03-02 11:01:26
  from "C:\xampp\htdocs\project1\templates\reviews.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9920f64922c0_78535625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c970e0c3719e7f1f35894cbe9e9d0578b9f1819' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project1\\templates\\reviews.tpl',
      1 => 1519984882,
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
function content_5a9920f64922c0_78535625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
<div class="container">  
<h2>TLC Messages > Reviews</h2>
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
          <div class="panel-footer">
		    <button class="btn btn-default" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
    	 	  Copy to clipboard
		    </button>
		    <div class="pull-right">
    		  3 Reviews
		    </button>
		  </div>		    
        </div>
      </div>
    <div class="form-group">
     <form method="post" id="reviewform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="submit_review" >
		<input type="hidden" id="idID" name="message_id" value="<?php echo $_smarty_tpl->tpl_vars['message']->value->getID();?>
">
		<label for="idReview">Add your review </label>
		<textarea class="form-control" id="iddReview" name="review" rows="2" cols="20" required="required"></textarea><br>
		<button type="submit" class="btn btn-primary" value="Submit" id="idSubmit">Submit</button>
	 </form>  
	 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
	 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['review_catalog']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
	 <br>
        <div class="alert alert-info" role="alert">
           Reviewed on <?php echo $_smarty_tpl->tpl_vars['review']->value->getDate();?>
.
           <p>"<strong><?php echo $_smarty_tpl->tpl_vars['review']->value->getReview();?>
</strong>"</p>
	    </div>
	 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
		    
      </div>
    </div>
  <div>
</div>
</div>
</div><br><br>

</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
