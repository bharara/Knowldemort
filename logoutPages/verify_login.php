<?php
ob_start();
include "../includes/dbcode.php";

	$password = trim($_POST["password"]);

	$query = "SELECT uid, Name, email, password, type FROM users WHERE email = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "s", $param_email);
	$param_email = trim($_POST["email"]);
	
	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		if(mysqli_stmt_num_rows($stmt) == 1) {                    
			// Bind result variables
			mysqli_stmt_bind_result($stmt, $sid, $name, $email, $hashed_password, $type);
			mysqli_stmt_fetch($stmt);
			if(password_verify($password, $hashed_password)){
				session_start();
				
				// Store data in session variables
				$_SESSION["sid"] = $sid;
				$_SESSION["name"] = $name;
				$_SESSION["email"] = $email;
				$_SESSION["type"] = $type;


				$url = $url = 'http://localhost/Knowldemort/';
				header("Location: $url");
			}
			else {
				$message = "Incorrect Password";
				header("location:../index.php?page=login&msg=".$message);
			}
		}
		else {
			$message = "Incorrect Email";
			header("location:../index.php?page=login&msg=".$message);
		}
	}
	else {
		$message = "Database Unavailable";
		header("location:../index.php?page=login&msg=".$message);
	}

	
?>
