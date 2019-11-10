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
					<img src="/Knowldemort/images/c.png">
					<br><i>46 people are going</i><br>
				</div>

				<div class="col-3 courseimage">
					<img src="/Knowldemort/images/android-logo.png">
					<br><i>410 people including 3 people who are enrolled with you are going</i><br>
				</div>
				<div class="col-3 courseimage">
					<img src="/Knowldemort/images/js.png">
					<br><i>Starting in 4 hours</i><br>
				</div>
				<div class="col-3 courseimage">
					<img src="/Knowldemort/images/calc.jpeg">
					<br><i>Added by a club you are a member of</i><br>
				</div>
				<button type=button class="center col-12">See More <i class="fa fa-arrow-down"></i><br></button>
		    </div>

		    <div class="userbox col-12">
		    	<h2>Content Added in Your Courses: </h2>
				<div class="col-3 courseimage">
					<img src="/Knowldemort/images/c.png">
					<br><i> Saim added 2 new Slides </i><br>
				</div>

				<div class="col-3 courseimage">
					<img src="/Knowldemort/images/android-logo.png">
					<br><i> Asim posted in forum</i><br>
				</div>
				<div class="col-3 courseimage">
					<img src="/Knowldemort/images/js.png">
					<br><i> 6 people posted in forum</i><br>
				</div>
				<div class="col-3 courseimage">
					<img src="/Knowldemort/images/calc.jpeg">
					<br><i>Your comment got 1 reply</i><br>
				</div>
				<button type=button class="center col-12">See More <i class="fa fa-arrow-down"></i><br></button>
		    </div>
		</div>
		<div class="col-3 sidebar">
			<h1 class="col-12">Meanwhile</h1>

			<div class="row">
				<div class="col-1"> &nbsp;</div>
				<table class="col-10 center" align="center">
					<tr><td colspan="2"><h3>Your Grades (Predicted)</h3></td></tr>
					<tr>
						<th>Course</th>
						<th>Grade</th>
					</tr>
					<tr><td>C1</td><td>B+</td></tr>
					<tr><td>C2</td><td>C</td></tr>
					<tr><td>C3</td><td>A</td></tr>
					<tr><td>C4</td><td>B+</td></tr>
				</table>
			</div>

			<div class="row">
				<h3>To Do</h3>
				<ul>
					<li><i class="fa fa-tasks"></i> <i>Lab7 in Web Engineering </i></li>
					<li><i class="fa fa-tasks"></i> <i>Assignment 2 in C2</i></li>
					<li><i class="fa fa-tasks"></i> <i>SDA Project</i></li>
				</ul>
			</div>

			<div class="row">
				<h3>Add your marks</h3>
				<p>Your friends are uploading marks in these course items. Upload Yours too to get an accurate grade prediction </p>
				<ul>
					<li><i class="fa fa-graduation-cap"></i> <i>Quiz4 in Web Engineering </i></li>
					<li><i class="fa fa-graduation-cap"></i> <i> Assignment 1 in C2</i></li>
					<li><i class="fa fa-graduation-cap"></i> <i>OHT1 in C5</i></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-1"> &nbsp;</div>
				<table class="col-10 center" align="center">
					<tr><td colspan="2"><h3>Your GPA</h3></td></tr>
					<tr><td>cGPA</td><td>3.48</td></tr>
					<tr><td>Current Predicted</td><td>3.17</td></tr>
					<tr><td>Projected CPGA</td><td>3.40</td></tr>
				</table>
			</div>

			<div class="row">
				<h3>Recommended Content</h3>
				<p>You can get a B+ in C4 by studying: </p>
				<ul>
					<li><i class="fa fa-link"></i> <i>Contect Link 1</i></li>
					<li><i class="fa fa-link"></i> <i>Contect Link 2</i></li>
					<li><i class="fa fa-link"></i> <i>Youtube Link 1</i></li>
				</ul>
			</div>
		</div>
	</div>

	<?php include $app_path . "includes/general_footer.php" ?>
	
</body>
</html>