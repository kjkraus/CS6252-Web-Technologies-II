{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>Thank you for contacting us!</h2>
	We have received the your message an will contact you as soon as possible.
	<p>
		Name: {$name}<br>
		Email: {$email}<br>
		{if ($phone != "")}
			Phone: {$phone} <br>
		{/if}
		{if ($date != "")}
			Date: {$date} <br>
		{/if}
		{if ($library != "none")}
			Library: {$library} <br>
		{/if}
		Comments: {$comments}			
	</p>
	<form method="post" action="index.php">
		<input type="hidden" name="action" value="show_contact_page" id="idBack">
		<input type="submit" value="Back" id="idBack">
	</form>
</main>

{include file='shared/footer.tpl'}