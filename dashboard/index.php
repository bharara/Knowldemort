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

<!--Banner-->
<div class="bg-color">
<div class="banner-text text-center">
  <div class="text-border">
    <h2 class="text-dec"> Hello! - <?php echo $_SESSION["name"] ?></h2>
    <h4 style="color: white;">Welcome to Knowldemort</h4>
  </div>
  <div class="intro-para text-center quote">
    <p class="small-text"> You have 6 new Notification</p>
  </div>
</div></div>
<!--/ Banner-->

<section id="faculity-member" class="section-padding">
<div class="container">
  <div class="row">
    <div class="header-section text-center">
      <h2>Events in Your University: </h2>
      <hr class="bottom-line">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="pm-staff-profile-container">
        <div class="pm-staff-profile-image-wrapper text-center">
          <div class="pm-staff-profile-image">
            <img src="/Knowldemort/images/c.png" alt="" class="img-thumbnail img-circle" />
          </div>
        </div>
        <div class="pm-staff-profile-details text-center">
          <p class="pm-staff-profile-name">Buzz Night</p>
          <p class="pm-staff-profile-bio">46 people are going</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="pm-staff-profile-container">
        <div class="pm-staff-profile-image-wrapper text-center">
          <div class="pm-staff-profile-image">
            <img src="/Knowldemort/images/android-logo.png" alt="" class="img-thumbnail img-circle" />
          </div>
        </div>
        <div class="pm-staff-profile-details text-center">
          <p class="pm-staff-profile-name">Science Bee</p>
          <p class="pm-staff-profile-bio">410 people including 3 people who are enrolled with you are going</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="pm-staff-profile-container">
        <div class="pm-staff-profile-image-wrapper text-center">
          <div class="pm-staff-profile-image">
            <img src="/Knowldemort/images/js.png" alt="" class="img-thumbnail img-circle" />
          </div>
        </div>
        <div class="pm-staff-profile-details text-center">
          <p class="pm-staff-profile-name">Dev Fest</p>
          <p class="pm-staff-profile-bio">Starting in Two Hours</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section id="work-shop" class="section-padding">
<div class="container">
  <div class="row">
    <div class="header-section text-center">
      <h2>New in Your Courses</h2>
      <hr class="bottom-line">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="pm-staff-profile-container">
        <div class="pm-staff-profile-image-wrapper text-center">
          <div class="pm-staff-profile-image">
            <img src="/Knowldemort/images/c.png" alt="" class="img-thumbnail img-circle" />
          </div>
        </div>
        <div class="pm-staff-profile-details text-center">
          <p class="pm-staff-profile-name"><a href="course.php?course=2">FOCP</a></p>
          <p class="pm-staff-profile-bio"> Saim added 2 new Slides</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="pm-staff-profile-container">
        <div class="pm-staff-profile-image-wrapper text-center">
          <div class="pm-staff-profile-image">
            <img src="/Knowldemort/images/android-logo.png" alt="" class="img-thumbnail img-circle" />
          </div>
        </div>
        <div class="pm-staff-profile-details text-center">
          <p class="pm-staff-profile-name"><a href="course.php?course=1">Web Engineering</p>
          <p class="pm-staff-profile-bio">Asim posted in forum</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="pm-staff-profile-container">
        <div class="pm-staff-profile-image-wrapper text-center">
          <div class="pm-staff-profile-image">
            <img src="/Knowldemort/images/js.png" alt="" class="img-thumbnail img-circle" />
          </div>
        </div>
        <div class="pm-staff-profile-details text-center">
          <p class="pm-staff-profile-name">DLD</p>
          <p class="pm-staff-profile-bio">Your comment got 1 reply</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- 	<div class="col-12">
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
	</div> -->

	<?php include $app_path . "includes/footer.php" ?>
	
</body>
</html>