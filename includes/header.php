<?php
	require_once "config.php";
	// include "dbcode.php";
	session_start();
?>
<?php
	if(isset($_SESSION["sid"]))
		include "$app_path" . "includes/login_menu.php?img=$_SESSION[img]";
	else
		include "$app_path" . "includes/log_out_menu.php";
?>
