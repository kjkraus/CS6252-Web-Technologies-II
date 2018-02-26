{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
<div class="container">   
<h2>Recently Added</h2> 
  {foreach item=message from=$message_catalog}
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">{$message->getCategory()}
          <div class="panel-title pull-right">Author: {$message->getAuthor()}</div>
        </div>
        <div class="panel-body"><img src="{$message->getImage()}" class="img-responsive" style="width:100%" alt="Image"></div>
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
    </div>
    <!-- <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          HUMOR<div class="panel-title pull-right">Author: BEV</div>
        </div>
        <div class="panel-body"><img src="model/images/dropped.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
		    <button class="btn btn-default" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
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
		    <button class="btn btn-default" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
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
		    <button class="btn btn-default" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
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
		    <button class="btn btn-default" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
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
		    <button class="btn btn-default" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
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
 
    {/foreach}
</div> <br>  
</main>

{include file='shared/footer.tpl'}