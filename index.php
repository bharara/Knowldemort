<!DOCTYPE html>
<html>
<head>
<?php
	include "includes/header.php";
?>

	<title>Knowldemort - One Site to Learn it All</title>
</head>
<body> 

	<div style="min-height: 1000px">
		<?php
			if (isset($_GET["page"])) {
				include 'logoutPages/' . $_GET["page"] . '.php';
			}
		?>
	</div>

	<footer class="col-12">
		<?php include "includes/general_footer.php" ?>
	</footer>

</body>
</html>