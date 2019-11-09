<?php
	ob_start();
	$email = mysqli_real_escape_string($conn,$_POST["email"]);
	$password = mysqli_real_escape_string($conn,$_POST["password"]);

	$query = "SELECT uid, Name, email, password, type FROM users WHERE email = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "s", $param_email);
	$param_email = $email;
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);

	if(mysqli_stmt_num_rows($stmt) == 1) {                    
		// Bind result variables
		mysqli_stmt_bind_result($stmt, $sid, $name, $email, $type, $hashed_password);
		mysqli_stmt_fetch($stmt);
		if(password_verify($password, $hashed_password)){
			session_start();
			
			// Store data in session variables
			$_SESSION["loggedin"] = true;
			$_SESSION["sid"] = $sid;
			$_SESSION["name"] = $name;
			$_SESSION["email"] = $email;
			$_SESSION["type"] = $type;

			header("Location:home");
		}
		else {
			$message = "Incorrect Password";
			header("location:../index.php?page=login&msg=".$message);
		}
	}
	else {
		$message = "Incorrect Username";
		header("location:../index.php?page=login&msg=".$message);
	}
?>
