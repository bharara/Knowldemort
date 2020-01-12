<?php
include "../includes/dbcode.php";
session_start();

$cid = $_GET["course"];
$sid = $_SESSION["sid"];

$query = "DELETE FROM `course_enroll` WHERE course = ? AND student = ?;";
$stmt = mysqli_prepare($link, $query);
mysqli_stmt_bind_param($stmt, "ss", $cid, $sid);

if (mysqli_stmt_execute($stmt)) {

	$id = array_search($cid, $_SESSION["courses"]);
	unset($_SESSION["courses"][$id]);
	array_values($_SESSION["courses"]);
	header("location: course.php?course=$cid&isenroll=0");
}
else {
	echo "error";
	// $message = "Database Error. Please Try again Later";
	// header("location:../index.php?page=register&msg=".$message);
}
	
?>
