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
        <div class="panel-body">
          <img src="{$message->getImage()}" class="img-responsive" style="width:100%" alt="Image">
          {$message->getMessage()}
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
		<input type="hidden" id="idID" name="message_id" value="{$message->getID()}">
		<label for="idReview">Add your review </label>
		<textarea class="form-control" id="iddReview" name="review" rows="2" cols="20" required="required"></textarea>
		<button type="submit" class="btn btn-primary" value="Submit" id="idSubmit">Submit</button>
	 </form>  
	 {/foreach} 
	 {foreach item=review from=$review_catalog}
	 <br>
        <div class="alert alert-info" role="alert">
           Reviewed on {$review->getDate()}.
           <p>"<strong>{$review->getReview()}</strong>"</p>
	    </div>
	 {/foreach}		    
      </div>
    </div>
  <div>
</div>
</div>
</div><br><br>

</main>

{include file='shared/footer.tpl'}