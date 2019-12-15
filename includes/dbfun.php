<?php


function get_course_info (int $id) {
	include "dbcode.php";
	$query = "SELECT * FROM vw_course_display WHERE course_id = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "s", $id);

	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt, $course_id, $course_name, $ch, $year, $semester, $instructor, $instructor_id, $degree, $uni, $now);
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
			"now" => $now
		];
		return $course_info;
	}

	else {
		// echo "Error";
		header("location:../index.php");
	}
}

function get_user_courses (int $id) {
	include "dbcode.php";
	$query = "SELECT * FROM vw_student_courses WHERE student = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "s", $id);

	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt, $course_id, $course_name, $ch, $year, $semester, $instructor, $instructor_id, $degree, $uni, $now, $s);

		$allrevs = array();

		while(mysqli_stmt_fetch($stmt)){
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
			"now" => $now
		];      
			$allrevs[] = $course_info;       
		}
		
		return $allrevs;
	}

	else {
		// echo "Error";
		header("location:../index.php");
	}
}

function get_item_names (int $cid) {
	include "dbcode.php";

	$query = "SELECT id, item_name FROM course_item WHERE course = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "s", $cid);

	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt, $item, $item_name);

		$allrevs = array();
		while(mysqli_stmt_fetch($stmt)){      
			$allrevs[] = ["id" => $item, "name" => $item_name];   
		}
		
		return $allrevs;
	}

	else {
		// echo "Error";
		header("location:../index.php");
	}
}

function get_course_items (int $cid, int $sid) {
	include "dbcode.php";

	$query = "SELECT * FROM vw_student_item_marks WHERE student = ? AND course = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "ss", $sid, $cid);

	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt, $total_marks, $obtained_marks, $item_name, $average_marks, $type, $date, $course, $student, $weight);

		$allrevs = array();

		while(mysqli_stmt_fetch($stmt)){
			$item_info = [
			"total" => $total_marks,
			"obt" => $obtained_marks,
			"name" => $item_name,
			"type" => $type,
			"avg" => $average_marks,
			"date" => $date,
			"weight" => $weight
		];      
			$allrevs[] = $item_info;       
		}
		
		return $allrevs;
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
		// echo "Error";
		header("location:../index.php");
	}
}

function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
}
?>