
{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
<div class="container">  
<h2>TLC Messages > Update</h2>
<br><br>
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
     </div>
     <div class="form-group">
       <form method="post" id="submitupdateform" action="index.php">
	  	  <input type="hidden" id="idHidden" name="action" value="submit_update_message" >
	  	  <input type="hidden" id="idID" name="message_id" value="{$message->getID()}">
		  <label for="idCategory">Category</label>
		  <textarea class="form-control" id="idCategory" name="category" rows="1" cols="20" required="required"></textarea><br>
		  <label for="idAuthor">Author</label>
		  <textarea class="form-control" id="idAuthor" name="author" rows="1" cols="20" required="required"></textarea>
		  <small class="form-text text-muted">Maximum 10 characters.</small><br><br>
		  <label for="idMessage">Message Content</label>
		  <textarea class="form-control" id="idUpdateMessage" name="message" rows="2" cols="20" required="required"></textarea>
		  <small id="messageHelp" class="form-text text-muted">Maximum 250 characters.</small><br><br>
		  <button type="submit" class="btn btn-primary" value="Submit" id="idSubmit">Update</button>
	   </form>
     </div>
   <!-- <div class="form-group">
       <div class="form-group">
    <label for="exampleTextArea">Category</label>
    <input type="text" class="form-control" id="categoryInput" value="{$message->getCategory()}">
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Message content</label>
    <input type="text" class="form-control" id="exampleTextarea" rows="3" value="{$message->getMessage()}"></textarea>
    <small id="messageHelp" class="form-text text-muted">Maximum 250 characters. This is the actual message intended for a recipient.</small>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Author</label>
    <input type="text" class="form-control" id="authorInput" value="{$message->getAuthor()}">
    <small class="form-text text-muted">Maximum 10 characters.</small>
  </div>  
  <form action="index.php" class="message" method="post">
          <div class='col-sm-3 form-group'>
            <input type="hidden" name="action" value="submit_update_message">
            <input type="hidden" id="idID" name="id" value="{$message->getID()}">
            <input class="btn btn-primary" type="submit" value="Update" id="idSubmitUpdate">
          </div>
   </form>  -->
</div><br><br>
{/foreach}
</main>

{include file='shared/footer.tpl'}