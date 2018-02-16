{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main id="catalog">
    <h2>Catalog of Books</h2>
    <table>
	{foreach item=book from=$book_catalog}
		<tr>
			<td>
				<form action="index.php" id="editform" method="post">
                    <input type="hidden" name="action" value="edit_book_form">
                    <input type="hidden" name="book_id" value="{$book->getID()}">
                    <input type="submit" value="Edit" id="idSubmitEdit">
                </form>
                <form action="index.php" id="deletebook" method="post">
                	<input type="hidden" name="action" value="delete_book">
                	<input type="hidden" name="book_id" value="{$book->getID()}">
                	<input type="submit" value="Delete" id="idSubmitDelete">
                </form>
			</td>
			<td>
				<img src="{$book->getImage()}" alt="Cover Image" width="100">
			</td>
			<td>
				<b>{$book->getTitle()} </b><br>
				by {$book->getAuthor()}
			</td>
		</tr>
	{/foreach}
	</table>
</main>

{include file='shared/footer.tpl'}