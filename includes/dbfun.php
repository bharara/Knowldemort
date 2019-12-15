<?php

function get_course_info (int $id) {
	include "dbcode.php";
	$query = "SELECT * FROM vw_course_display WHERE course_id = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "s", $id);

	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt, $course_id, $course_name, $ch, $year, $semester, $instructor, $instructor_id, $degree, $uni);
		mysqli_stmt_fetch($stmt);

		$course_info = [
			"id" => $course_id,
			"name" => $course_name,
			"ch" => $ch,
			"year" => $year,
			"semester" => $semester,
			"instructor" => $instructor,
			"instructor_id" => $instructor_id,
			"degree" => $degree,
			"uni" => $uni,
		];
		return $course_info;
	}

	else {
		// echo "Error";
		header("location:../index.php");
	}
}

function is_enrolled (int $cid) {
	include "dbcode.php";
	if (!(isset($_SESSION["sid"]))) {return false;}

	$sid = $_SESSION["sid"];
	$query = "SELECT enroll_id FROM course_enroll WHERE course = ? AND student = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "ss", $cid, $sid);

	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		if(mysqli_stmt_num_rows($stmt) == 1) {                    
			mysqli_stmt_bind_result($stmt, $eid);
			mysqli_stmt_fetch($stmt);
			return true;
		}
		return false;
	}

	else {
		echo "Error";
		// header("location:../index.php");
	}
}

function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
}
?>