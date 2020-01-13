<?php
include "../includes/dbcode.php";
session_start();

$eid = $_GET["event"];
$sid = $_SESSION["sid"];

$query = "DELETE FROM `eventattend` WHERE eventid = ? AND person = ?;";
$stmt = mysqli_prepare($link, $query);
mysqli_stmt_bind_param($stmt, "ss", $eid, $sid);

if (mysqli_stmt_execute($stmt)) {

	$id = array_search($eid, $_SESSION["events"]);
	unset($_SESSION["events"][$id]);
	array_values($_SESSION["events"]);
	header("location: event.php?event=$eid&isattend=0");
}
else {
	echo "error";
	// $message = "Database Error. Please Try again Later";
	 header("location:../index.php?page=register&msg=".$message);
}

?>
