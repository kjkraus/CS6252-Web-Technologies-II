<?php
/* Smarty version 3.1.30, created on 2018-02-26 03:47:58
  from "C:\xampp\htdocs\project1\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a93755e94cf03_48111887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b808188b01ea6f104b66e5a2a2cfd1ab42b41146' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project1\\templates\\home.tpl',
      1 => 1519613247,
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
function content_5a93755e94cf03_48111887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
<div class="container">   
<h2>Recently Added</h2> 
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
        <div class="panel-body"><img src="<?php echo $_smarty_tpl->tpl_vars['message']->value->getImage();?>
" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
		    <button class="btn btn-default" data-clipboard-text="Just because you can doesn't mean you should � clipboard.js">
    	 	  Copy to clipboard
		    </button>
		    <div class="pull-right">
    		  3 Reviews
		    </button>
		  </div>
        </div>
      </div>
    </div>
    <!-- <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          HUMOR<div class="panel-title pull-right">Author: BEV</div>
        </div>
        <div class="panel-body"><img src="model/images/dropped.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
		    <button class="btn btn-default" data-clipboard-text="Just because you can doesn't mean you should � clipboard.js">
    	 	  Copy to clipboard
		    </button>
		    <div class="pull-right">
		    <button class="btn btn-link" >
    		  3 Reviews
		    </button>
		  </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          HUMOR<div class="panel-title pull-right">Author: BEV</div>
        </div>
        <div class="panel-body"><img src="model/images/dropped.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
		    <button class="btn btn-default" data-clipboard-text="Just because you can doesn't mean you should � clipboard.js">
    	 	  Copy to clipboard
		    </button>
		    <div class="pull-right">
		    <button class="btn btn-link" >
    		  3 Reviews
		    </button>
		  </div>
        </div>
      </div>
    </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          HUMOR<div class="panel-title pull-right">Author: BEV</div>
        </div>
        <div class="panel-body"><img src="model/images/dropped.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
		    <button class="btn btn-default" data-clipboard-text="Just because you can doesn't mean you should � clipboard.js">
    	 	  Copy to clipboard
		    </button>
		    <div class="pull-right">
		    <button class="btn btn-link" >
    		  3 Reviews
		    </button>
		  </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          HUMOR<div class="panel-title pull-right">Author: BEV</div>
        </div>
        <div class="panel-body"><img src="model/images/dropped.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
		    <button class="btn btn-default" data-clipboard-text="Just because you can doesn't mean you should � clipboard.js">
    	 	  Copy to clipboard
		    </button>
		    <div class="pull-right">
		    <button class="btn btn-link" >
    		  3 Reviews
		    </button>
		  </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          HUMOR<div class="panel-title pull-right">Author: BEV</div>
        </div>
        <div class="panel-body"><img src="model/images/dropped.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
		    <button class="btn btn-default" data-clipboard-text="Just because you can doesn't mean you should � clipboard.js">
    	 	  Copy to clipboard
		    </button>
		    <div class="pull-right">
		    <button class="btn btn-link" >
    		  3 Reviews
		    </button>
		  </div>
        </div>
      </div>
    </div> -->
 
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div> <br>  
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
