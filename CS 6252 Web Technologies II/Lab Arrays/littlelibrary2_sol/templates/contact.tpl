{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>Contact Us</h2>
	<form method="post" id="contactform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="process_contact_form">
		<label for="idName">* Name: </label>
		<input type="text" id="idName" name="name" required="required">
		<label for="idEmail">* E-mail: </label>
		<input type="email" id="idEmail" name="email" required="required">
		<label for="idPhone">Phone: </label>
		<input type="tel" id="idPhone" name="phone">
		<label for="idDate">Date: </label>
		<input type="date" id="idDate" name="date">
		<label for="idLibraries">Select Library:</label>
		<select  id="idLibraries" name="library">
			<?php foreach ($libraries as $library) { ?>
				<option value="<?php echo $library?>"><?php echo $library?></option>
			<?php }?>
		</select>
		<label for="idComments">* Comments: </label>
		<textarea id="myComments" name="comments" rows="2" cols="20" required="required"></textarea>
		<input type="submit" value="Send Now" id="idSubmit">
	</form>
</main>

<?php
include 'shared/footer.html';
?>