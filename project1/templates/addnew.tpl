{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

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

{include file='shared/footer.tpl'}