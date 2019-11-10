<!DOCTYPE html>
<html>
<head>
<?php
	include "includes/header.php";
	if(isset($_SESSION["sid"]))
		header ("Location: dashboard");
?>

	<title>Knowldemort - One Site to Learn it All</title>
</head>
<body> 

	<div style="min-height: 700px">
		<?php
			if (isset($_GET["page"])) {
				include 'logoutPages/' . $_GET["page"] . '.php';
			}
		?>
	</div>

	
	<?php include "includes/general_footer.php" ?>

</body>
</html>