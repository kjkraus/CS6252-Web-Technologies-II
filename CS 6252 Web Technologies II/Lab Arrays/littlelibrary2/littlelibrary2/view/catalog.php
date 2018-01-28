<?php
include 'shared/head.html';
include 'shared/header.html';
include 'shared/nav.html';
?>
<main id="catalog">
    <h2>Catalog of Books</h2>
    <table>
		<tr>
			<td>
				<img src="<?php echo $book->getImage(); ?>" alt="Cover Image" width="100">
			</td>
			<td>
			<b><?php echo $book->getTitle(); ?> </b><br>
			by <?php echo $book->getAuthor(); ?> 
			</td>
		</tr>
	</table>
	</table>
</main>

<?php
include 'shared/footer.html';
?>