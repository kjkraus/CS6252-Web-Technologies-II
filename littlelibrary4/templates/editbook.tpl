{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>Edit Book</h2>
	<form method="post" id="editbookform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="update_book" >
		<input type="hidden" id="idID" name="id" value="{$id}">
		<label for="idTitle">*Title: </label>
		<input type="text" id="idTitle" name="title" value="{$title}" required="required">
		<label for="idAuthor">*Author: </label>
		<input type="text" id="idAuthor" name="author" value="{$author}" required="required">
		<label for="idCategory">Category:</label>
		{html_options name=category options=$categories selected=$categoryID id="idCategory"}
		<label for="idLibrary">Library:</label>
		{html_options name=library options=$libraries selected=$libraryID id="idLibrary"}
		<label for="idPages">Pages: </label>
		<input type="text" id="idPages" name="pages" value="{$pages}">
		<label for="idPublisher">Publisher: </label>
		<input type="text" id="idPublisher" name="publisher" value="{$publisher}">
		<label for="idCost">Cost: </label>
		<input type="text" id="idCost" name="cost" value="{$cost}">
		<input type="submit" value="Update" id="idSubmit">
	</form>
</main>

{include file='shared/footer.tpl'}