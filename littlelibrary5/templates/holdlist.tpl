{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>You have selected the following books for a hold:</h2>
	<table>
	{foreach item=book from=$book_catalog}
		<tr>
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