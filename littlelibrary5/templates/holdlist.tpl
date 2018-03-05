{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>You have selected the following books for a hold:</h2>
	<!-- PART 2. Once a book has been selected for a hold, all books selected for a hold should be displayed on
	the corresponding page, i.e. template holdlist.tpl. You should display at least the title and
	author of each selected book.
	Display the books selected for a hold -->
	<table>
	{foreach item=hold from=$holds_catalog}
		<tr>
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
	<form method="post" action="index.php" id="morebooksform">
		<input type="hidden" name="action" value="show_catalog_page">
		<input type="submit" value="Select more books" id="idSelectMoreBooks">
	</form>
	<form method="post" action="index.php">
		<input type="hidden" name="action" value="submit_hold">
		<input type="submit" value="Submit hold request" id="idSunmitHolds">
	</form>
	<p class="confirmation"> {$confirmation|default:''} </p>
</main>

{include file='shared/footer.tpl'}