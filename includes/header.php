<?php
	include "config.php";
	include "dbcode.php";
	session_start();
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $app_path ?>css/responsive.css">


	<div class="col-12">
		<?php include "includes/log_out_slider.php" ?>
		<?php
			if(isset($_SESSION["name"])) { 
				include "includes/log_out_menu.php";
				echo "<h1> Hello </h1>";
			}
			else {
				include "includes/log_out_menu.php";
			}?>
	</div>