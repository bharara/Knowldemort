<?php
include "../includes/dbcode.php";
session_start();

$cid = $_GET["course"];
$sid = $_SESSION["sid"];

$query = "INSERT INTO course_enroll (course, student) VALUES (?, ?)";
$stmt = mysqli_prepare($link, $query);
mysqli_stmt_bind_param($stmt, "ss", $cid, $sid);

if (mysqli_stmt_execute($stmt)) {
	header("location: course.php?course=$cid&isenroll=1");
}
else {
	echo "error";
	// $message = "Database Error. Please Try again Later";
	header("location:../index.php?page=register&msg=".$message);
}
	
?>
