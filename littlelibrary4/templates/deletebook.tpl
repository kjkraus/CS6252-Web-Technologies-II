{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>Delete Book</h2>
	<form method="post" id="editbookform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="remove_book" >
		<input type="hidden" id="idID" name="id" value="{$id}">
		<label for="idTitle">Title: </label>
			{$title}<br>
		<label for="idAuthor">Author: </label>
			{$author}<br>
		<label for="idPages">Pages: </label>
			{$pages}<br>
		<label for="idPublisher">Publisher: </label>
			{$publisher}<br>
		<label for="idCost">Cost: </label>
			{$cost}<br>
		<input type="submit" value="Remove" id="idSubmit">
	</form>
</main>

{include file='shared/footer.tpl'}