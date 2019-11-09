<?php
ob_start();
include "../includes/dbcode.php";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

	$query = "SELECT email FROM users WHERE email = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "s", $param_email);
	$param_email = trim($_POST["email"]);
	if (mysqli_stmt_execute($stmt)) {
	mysqli_stmt_store_result($stmt);
	} else {
		$message = "Not Even Started" . $stmt;
		header("location:../index.php?page=register&msg=".$message);
	}
	
	if(mysqli_stmt_num_rows($stmt) == 1){
		$message = "This Email is already taken.";
		header("location:../index.php?page=register&msg=".$message);
	} else
		$email = trim($_POST["email"]);

	mysqli_stmt_close($stmt);
	
	$name = trim($_POST["name"]);
	$password = trim($_POST["password"]);
	

	// Prepare an insert statement
	$query = "INSERT INTO users (Name, email, password) VALUES (?, ?, ?)";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_email, $param_password);
	$param_name = $name;
	$param_password = password_hash($password, PASSWORD_DEFAULT);
		
	if (mysqli_stmt_execute($stmt)) {
		$msg = "You sucessfully registered.";
		header("location: ../index.php?page=login&msg=". $msg);
	}
	else {
		$message = "Database Error. Please Try again Later";
		header("location:../index.php?page=register&msg=".$message);
	}

	// Close statement
	mysqli_stmt_close($stmt);	
	// Close connection
	mysqli_close($link);
}?>