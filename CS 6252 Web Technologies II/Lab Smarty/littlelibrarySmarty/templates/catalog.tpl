{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main id="catalog">
    <h2>Catalog of Books</h2>
    <table>
	{foreach item=book from=$book_catalog} 
		<tr>
			<td>
			{if (!$book->issetImage())} 
    			<img src="{$default_image}"  alt="Cover Image" width="100"> 
    		{else}
				<img src="{$book->getImage()}"  alt="Cover Image" width="100">
			{/if} 
			</td>
			<td>
			<b>{$book->getTitle()}</b><br>
			by {$book->getAuthor()} 
			</td>
		</tr>
	{/foreach} 
	</table>
</main>

<?php
include 'shared/footer.html';
?>