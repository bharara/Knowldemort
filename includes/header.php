<?php
	include "config.php";
	include "dbcode.php";
	session_start();
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $app_path ?>css/responsive.css">


	<div class="col-12">
		<?php
			include "$app_path". "includes/log_out_slider.php";
			if(isset($_SESSION["name"]))
				include "$app_path" . "includes/login_menu.php";
			else
				include "$app_path" . "includes/log_out_menu.php";
		?>
	</div>