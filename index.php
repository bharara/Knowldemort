<!DOCTYPE html>
<html>
<head>
<?php
	include "includes/header.php";
    echo $app_path;
	if(isset($_SESSION["sid"])) {
		$url = $app_path . "dashboard";
		header ("Location: $url");
}?>

	<title>Knowldemort - One Site to Learn it All</title>
</head>
<body> 

	<!-- <div style="min-height: 700px"> -->
		<?php
			if (isset($_GET["page"])) {
				include 'logoutPages/' . $_GET["page"] . '.php';
			}
			else {
				include 'includes/home.php';
			}
		?>
	<!-- </div> -->

	
	<?php include "includes/footer.php" ?>

</body>
</html>