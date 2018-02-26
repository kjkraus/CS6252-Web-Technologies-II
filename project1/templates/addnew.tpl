{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

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

{include file='shared/footer.tpl'}