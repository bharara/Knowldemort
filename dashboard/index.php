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
	<link rel="stylesheet" href="../css/user-page.css" >
	<link rel="stylesheet" href="../css/form.css" >
	<title>Knowldemort - One Site to Learn it All</title>
</head>
<body> 

	<div class="col-12">
		<h1> Hello <?php echo $_SESSION["name"] ?>! Welcome to Knowldemort </h1>
		<p> You have 6 new Notification </p>
	</div>

	<div class="col-12">
		<div class="col-9">
			<div class="userbox col-12">
		    	<h2>Events in Your University: </h2>
				<div class="col-3 courseimage">
					<i>46 people are going</i><br>
					<img src="/Knowldemort/images/c.png">
				</div>

				<div class="col-3 courseimage">
					<i>410 people including 3 people who are enrolled with you are going</i><br>
					<img src="/Knowldemort/images/android-logo.png">
				</div>
				<div class="col-3 courseimage">
					<i>Starting in 4 hours</i><br>
					<img src="/Knowldemort/images/js.png">
				</div>
				<div class="col-3 courseimage">
					<i>Added by a club you are a member of</i><br>
					<img src="/Knowldemort/images/calc.jpeg">
				</div>
				<button type=button class="center col-12">See More <i class="fa fa-arrow-down"></i><br></button>
		    </div>

		    <div class="userbox col-12">
		    	<h2>Content Added in Your Courses: </h2>
				<div class="col-3 courseimage">
					<i> Saim added 2 new Slides </i><br>
					<img src="/Knowldemort/images/c.png">
				</div>

				<div class="col-3 courseimage">
					<i> Asim posted in forum</i><br>
					<img src="/Knowldemort/images/android-logo.png">
				</div>
				<div class="col-3 courseimage">
					<i> 6 people posted in forum</i><br>
					<img src="/Knowldemort/images/js.png">
				</div>
				<div class="col-3 courseimage">
					<i>Your comment got 1 reply</i><br>
					<img src="/Knowldemort/images/calc.jpeg">
				</div>
				<button type=button class="center col-12">See More <i class="fa fa-arrow-down"></i><br></button>
		    </div>
		</div>
		<div class="col-3 sidebar">
			<h1>Mean While</h1>
		</div>
	</div>

	<?php include $app_path . "includes/general_footer.php" ?>
	
</body>
</html>