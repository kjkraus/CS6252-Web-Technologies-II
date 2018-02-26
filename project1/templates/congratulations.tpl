{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
<div class="container">  
<h2>TLC Messages > Congratulations</h2>
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
        <form action="index.php" class="message" method="post">
          <input type="hidden" name="action" value="update_message">
          <input type="hidden" id="idID" name="id" value="{$message->getID()}">
          <input class="btn btn-default" type="submit" value="Update" id="idSubmitUpdate">
        </form>
        <form action="index.php" class="message" method="post">
          <input type="hidden" name="action" value="remove_message">
          <input type="hidden" id="idID" name="id" value="{$message->getID()}">
          <input class="btn btn-danger" type="submit" value="Delete" id="idSubmitDelete">
        </form>        
        <form action="index.php" class="wmessage" method="post">
	      <input type="hidden" name="action" value="review_message">
          <input type="hidden" id="idID" name="id" value="{$message->getID()}">
          <input class="btn btn-link" type="submit" value="View / Add Review" id="idSubmitReview">
        </form>   
     </div>
</div><br><br>
{/foreach}
</main>

{include file='shared/footer.tpl'}