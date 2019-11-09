
<link rel="stylesheet" type="text/css" href="<?php echo $app_path ?>css/form.css">

<script language="javascript" >
	function validate_log(){
		if(registerForm.name.value=="") {
			alert("Enter Name");
			registerForm.name.focus()
			return false;
		}
		else if(registerForm.email.value=="") {
			alert("Enter Email");
			registerForm.email.focus()
			return false;
		}
		else if(registerForm.password.value=="" || registerForm.rpassword.value=="") {
			alert("Enter Password");
			registerForm.password.focus()
			return false;
		}
		else if(registerForm.password.value.length < 8) {
			alert ("Password must contain atleat 8 letters")
			registerForm.password.focus()
			return false;
		}
		else if(registerForm.password.value!=registerForm.rpassword.value) {
			alert("Passwords don't match");
			registerForm.rpassword.focus()
			return false;
		}
	}
</script>

<form class="center form" name="registerForm" action="logoutPages/register_user.php" method="post" onSubmit="return validate_log()" >
	<div> <?php
		if(isset($_GET["msg"])) {
			echo $_GET["msg"];
			unset ($_GET["msg"]);
		} ?></div>

	<h3 align="center">Register Here</h3>
	Name:<br>
	<input type="text" name="name">
	Email:<br>
	<input type="email" name="email">
	<br>
	Password:<br>
	<input type="password" name="password">
	Repeat Password:<br>
	<input type="password" name="rpassword">
	<br><br>
	<input type="submit" name="submit" value="Submit">
</form>
