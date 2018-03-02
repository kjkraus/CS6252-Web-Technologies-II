<?php
/* Smarty version 3.1.30, created on 2018-03-02 01:59:39
  from "C:\xampp\htdocs\project1\templates\shared\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98a1fb025199_60520986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4e924036252af56931afa04fd186d5234e6b9c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project1\\templates\\shared\\footer.tpl',
      1 => 1519952375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a98a1fb025199_60520986 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="container-fluid text-center">
  <p>Copyright 2018 &copy; KJKraus</p>
  <form class="form-inline" method="post" id="signatureform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="sign_guest_book" >
		<label for="idSign">Sign our guest book </label>
		<textarea class="form-control" id="iddSign" name="signature" rows="1" cols="50" required="required" placeholder="names, initials, nickname, etc."></textarea>
		<button type="submit" class="btn btn-primary" value="Sign" id="idSubmit">Sign</button>
	</form>
</footer>

</body>
</html>
<?php }
}
