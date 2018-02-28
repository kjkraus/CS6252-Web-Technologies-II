{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
<div class="container">  
<h2>TLC Messages > Reviews</h2>
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
    <div class="form-group">
      <label for="exampleTextarea">Add Your Review</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
      <small id="messageHelp" class="form-text text-muted">Maximum 3000 characters.</small>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>    
    </div>
</div><br><br>
{/foreach}
</main>

{include file='shared/footer.tpl'}