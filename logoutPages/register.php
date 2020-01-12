
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

<section class="section-padding">
<form align=center name="contactForm" method="post">
		 <?php
		if(isset($_GET["msg"])) {
			echo "<p class=error>" . $_GET["msg"] . "</p>";
			unset ($_GET["msg"]);
	}?>


	<h1>Register Here</h1>

	<input type="text" name="name" placeholder="Name"><br><br>
	<input type="email" name="email" placeholder="name@example.com"><br><br>
	<input type="password" name="password" placeholder="Password"><br><br>
	<input type="password" name="rpassword" placeholder="Repeat Password"><br><br>
	<br><br>
	<input class='btn btn-green' type="submit" name="submit" value="Submit"><br><br>

	<p>Already Have an Account? <a href="index.php?page=login">Login Here</a>.</p>


</form>
</section>