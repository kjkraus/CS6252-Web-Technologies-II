{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

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

{include file='shared/footer.tpl'}