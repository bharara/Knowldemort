
<link rel="stylesheet" type="text/css" href="<?php echo $app_path ?>css/form.css">

<script language="javascript" >
	function validate_log(){
		if(loginForm.email.value=="") {
			alert("Enter Email");
			loginForm.email.focus()
			return false;
		}
		else if(loginForm.password.value=="") {
			alert("Enter Password");
			loginForm.password.focus()
			return false;
		}
	}
</script>

<form class="center form" name="loginForm" action="logoutPages/verify_login.php" method="post" onSubmit="return validate_log()" >
	<div> <?php
		if(isset($_GET["msg"])) {
			echo $_GET["msg"];
			unset ($_GET["msg"]);
		} ?></div>

	<h1>Login</h1>
	<input type="email" name="email" placeholder="Email"> <br>
	<input type="password" name="password" placeholder="Password">
	<br><br>

	<input type="submit" name="submit" value="Submit">
	<p>Don't have an account? <a href="index.php?page=register">Sign up now</a>.</p>
</form>
