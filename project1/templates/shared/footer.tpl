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
