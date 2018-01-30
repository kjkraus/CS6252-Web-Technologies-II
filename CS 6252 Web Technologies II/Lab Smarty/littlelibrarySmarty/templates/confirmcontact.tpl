{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>Thank you for contacting us!</h2>
	We have received the following information:
	<p>
		Name: <?php echo $name;?><br>
		Email: <?php echo $email;?><br>
		<?php if ($phone != "") {?>
			Phone: <?php echo $phone?> <br>
		<?php } ?>
		<?php if ($date != "") {?>
			Date: <?php echo $date; ?> <br>
		<?php } ?>
		<?php if ($library != "none") {?>
			Library: <?php echo $library; ?> <br>
		<?php } ?>
		Comments: <?php echo $comments;?>			
	</p>
	<form method="post" action="index.php">
		<input type="hidden" name="action" value="show_contact_page" id="idBack">
		<input type="submit" value="Back" id="idBack">
	</form>
</main>

<?php
include 'shared/footer.html';
?>