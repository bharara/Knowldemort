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

function get_instructor_courses (int $id) {
	include "dbcode.php";
	$query = "SELECT * FROM vw_instructor_courses WHERE instructor = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "s", $id);

	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt, $course_id, $course_name, $ch, $year, $semester, $degree, $uni, $now, $ins, $students);

		$allrevs = array();

		while(mysqli_stmt_fetch($stmt)){
			$course_info = [
			"id" => $course_id,
			"name" => $course_name,
			"ch" => $ch,
			"year" => $year,
			"semester" => $semester,
			"degree" => $degree,
			"uni" => $uni,
			"now" => $now,
			"students" => $students
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

function is_enrolled ($cid) {
	if(!isset($_SESSION)) 
        session_start();
	return in_array($cid, $_SESSION["courses"]);
}

function get_instructor_info ($id) {
	include "dbcode.php";
	$query = "SELECT * FROM instructor WHERE id = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "s", $id);

	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt, $name, $img, $id);
		mysqli_stmt_fetch($stmt);

		return ["name" => $name, "img" => $img];
	}

	else {
		// echo "Error";
		header("location:../index.php");
	}
}

function student_course_list ($id) {
	include "dbcode.php";

	$query = "SELECT course FROM course_enroll WHERE student = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "s", $id);

	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt, $cid);

		$allrevs = array();
		while(mysqli_stmt_fetch($stmt)){      
			$allrevs[] = $cid;   
		}
		
		return $allrevs;
	}

	else {
		// echo "Error";
		header("location:../index.php");
	}
}

function get_instructor_reviews ($id) {
	include "dbcode.php";

	$query = "SELECT * FROM vw_instructor_review WHERE instructor = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "s", $id);

	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt, $rid, $iid, $sid, $sname, $img, $title, $details, $score, $is_annon);

		$allrevs = array();

		while(mysqli_stmt_fetch($stmt)){
			$item_info = [
			"rid" => $rid,
			"sid" => $sid,
			"sname" => $sname,
			"img" => $img,
			"title" => $title,
			"details" => $details,
			"score" => $score,
			"is_annon" => $is_annon
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


function get_student_info ($id) {
	include "dbcode.php";
	$query = "SELECT name, email, img FROM users WHERE uid = ?";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "s", $id);

	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt, $name, $email, $img);
		mysqli_stmt_fetch($stmt);

		return ["name" => $name, "email" => $email,  "img" => $img];
	}

	else {
		// echo "Error";
		header("location:../index.php");
	}
}

function is_a_student ($i_courses, $s_courses) {
	foreach($i_courses as $course) {
		if (in_array($course["id"], $s_courses))
			return true;
    }
    return false;
}

function get_current_agg ($cid, $sid) {
	include "dbcode.php";
	$query = "SELECT sum(mymarks_agg), sum(avgmarks_agg), sum(weight)
			FROM vw_agg_marks
			WHERE course = ? AND student = ?
			GROUP BY course, student";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_bind_param($stmt, "ss", $cid, $sid);

	if (mysqli_stmt_execute($stmt)) {
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt, $mine, $avg, $weight);
		mysqli_stmt_fetch($stmt);

		return ["mine" => $mine, "avg" => $avg,  "weight" => $weight];
	}
	else {
		header("location:../index.php");
	}
}

?>