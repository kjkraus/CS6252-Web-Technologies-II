{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main id="catalog">
    <h2>Catalog of Books</h2>
    <table>
	<?php foreach ($book_catalog as $book) { ?>
		<tr>
			<td>
			<?php if (!$book->issetImage()) { ?>
    			<img src="<?php echo $default_image; ?>" alt="Cover Image" width="100">
    		<?php } 
    		else { ?>
				<img src="<?php echo $book->getImage(); ?>" alt="Cover Image" width="100">
			<?php } ?>
			</td>
			<td>
			<b><?php echo $book->getTitle(); ?> </b><br>
			by <?php echo $book->getAuthor(); ?> 
			</td>
		</tr>
	<?php } ?>
	</table>
</main>

<?php
include 'shared/footer.html';
?>