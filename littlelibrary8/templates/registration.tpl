{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>User Registration</h2>
	<form method="post" id="userregistrationform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="process_registration_form" >
		<span class="error">{$fields->getError('firstName')}</span>
		<label for="idName">* First Name: </label>
		<input type="text" id="idName" name="firstName" value="{$fields->getValue('firstName')}">
		<span class="error">{$fields->getError('lastName')}</span>
		<label for="idName">* Last Name: </label>
		<input type="text" id="idName" name="lastName" value="{$fields->getValue('lastName')}">
		<span class="error">{$fields->getError('email')}</span>
		<label for="idEmail">* E-mail: </label>
		<input type="email" id="idEmail" name="email" value="{$fields->getValue('email')}">
		<span class="error">{$fields->getError('phone')}</span>
		<label for="idPhone">Phone: </label>
		<input type="tel" id="idPhone" name="phone" value="{$fields->getValue('phone')}">
		<span class="error">{$fields->getError('password')}</span>
		<label for="idEmail">* Password: </label>
		<input type="text" id="idPassword" name="password" value="{$fields->getValue('password')}">
		<input type="submit" value="Submit" id="idSubmit">
	</form>
</main>

{include file='shared/footer.tpl'}