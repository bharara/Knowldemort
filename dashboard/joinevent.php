<?php
//for events
include "../includes/dbcode.php";
session_start();

$eid = $_GET["event"];
$sid = $_SESSION["sid"];

$query = "INSERT INTO eventattend (eventid, person) VALUES (?, ?)";
$stmt = mysqli_prepare($link, $query);
mysqli_stmt_bind_param($stmt, "ss", $eid, $sid);

if (mysqli_stmt_execute($stmt)) {
	header("location: event.php?event=$eid&isattend=1");
}
else {
	echo "error";
	// $message = "Database Error. Please Try again Later";
	header("location:../index.php?page=register&msg=".$message);
}


?>