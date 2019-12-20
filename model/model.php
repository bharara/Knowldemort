<?php

function calculate_time ($weight) {
	if ($weight < 50)
		return 1;
	elseif ($weight < 70)
		return 2;
	else
		return 3;
}

function get_final_agg ($mine, $avg, $time) {  
  exec("python C:/xampp/htdocs/Knowldemort/model/semi_to_agg.py $mine $avg $time", $output);
  return $output;
}

function get_predicted_grade_pre ($agg, $avg) {
  exec("python C:/xampp/htdocs/Knowldemort/model/agg_to_grade.py $agg $avg", $output);
  return $output;
}

function get_predicted_grade ($cid, $sid) {
	require_once "../../includes/dbfun.php";
	$marks = get_current_agg ($cid, $sid);
	$time = calculate_time ($marks["weight"]);

	$mine = get_final_agg ($marks["mine"], $marks["avg"], $time)[0];
	$avg = get_final_agg ($marks["avg"], $marks["avg"], $time)[0];
	$grade =  get_predicted_grade_pre($mine, $mine);
	return [
		"grade" => $grade[0],
		"mineP" => round($mine),
		"avgP" => round($avg),
		"mine" => round($marks["mine"]),
		"avg" => round($marks["avg"]),
		"weight" => $marks["weight"]
	];
}
?>