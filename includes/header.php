<?php
	require_once "config.php";
	// include "dbcode.php";
	session_start();
?>
<?php
	if(isset($_SESSION["sid"]))
		include  "login_menu.php";
	else
		include "$app_path" . "includes/log_out_menu.php";
?>
