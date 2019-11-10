<!DOCTYPE html>
<html>
<head>
<?php
	include "../includes/header.php";
	if(!(isset($_SESSION["sid"]))) {
		$msg = "You need to Login First";
		$url = $app_path . "index.php?page=login&msg=". $msg;
		header("location: $url");
	}
?>

	<title>Knowldemort - One Site to Learn it All</title>
</head>
<body> 

	<div style="min-height: 500px">
		
	</div>

	<?php include $app_path . "includes/general_footer.php" ?>
	
</body>
</html>