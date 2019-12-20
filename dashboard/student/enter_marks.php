<?php
session_start();
include "../../includes/dbcode.php";

$sid = $_SESSION["sid"];
$name = trim($_POST["item"]);
$item = trim($_POST["type"]);
$obt = trim($_POST["obt"]);
$avg = trim($_POST["avg"]);
$total = trim($_POST["total"]);
$date = trim($_POST["date"]);
$course = trim($_POST["course"]);

// Prepare an insert statement
$query = "INSERT INTO course_item_marks (item, student, total_marks, obtained_marks, item_name, average_marks, date, approved) VALUES (?, ?, ?, ?, ?, ?, ?, 0)";
$stmt = mysqli_prepare($link, $query);
mysqli_stmt_bind_param($stmt, "sssssss", $item, $sid, $total, $obt, $name, $avg, $date);
	if (mysqli_stmt_execute($stmt))
		header("location: marks.php?course=$course");
print_r($_POST);
echo "$query";

?>