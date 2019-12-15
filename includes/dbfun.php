<?php

function get_course_info (int $id) {
	include "dbcode.php";
	$query = "SELECT * FROM vw_course_display WHERE course_id = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "s", $id);

	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt, $course_id, $course_name, $year, $semester, $instructor, $degree, $uni);
		mysqli_stmt_fetch($stmt);

		$course_info = [
			"id" => $course_id,
			"name" => $course_name,
			"year" => $year,
			"semester" => $semester,
			"instructor" => $instructor,
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

function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
}
?>