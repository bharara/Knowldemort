<?php
include "../includes/header.php";
include "../includes/dbcode.php";
$cid=$_REQUEST['cid'];
$uid=$_REQUEST['uid'];
$query = "DELETE FROM marks WHERE userid=$uid and courseid=$cid";
$result = mysqli_query($link,$query) or die ( mysqli_error($link));
header("Location: /Knowldemort/dashboard/user.php");
?>