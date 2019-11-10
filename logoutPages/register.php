
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
	 <?php
		if(isset($_GET["msg"])) {
			echo "<p class=error>" . $_GET["msg"] . "</p>";
			unset ($_GET["msg"]);
	}?>

	<h1>Register Here</h1>
	<input type="text" name="name" placeholder="Name">
	<input type="email" name="email" placeholder="name@example.com">
	<input type="password" name="password" placeholder="Password">
	<input type="password" name="rpassword" placeholder="Repeat Password">
	<br><br>
	<input type="submit" name="submit" value="Submit">
	<p>Already Have an Account? <a href="index.php?page=login">Login Here</a>.</p>
</form>
