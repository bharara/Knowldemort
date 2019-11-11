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

    <title><?php echo $_SESSION["name"]  ?>'s Profile - Knowldemort</title>
</head>
<body>

	<h1> Courses Offered by Your School </h1>

<div class="userbox col-12">
    <div class="col-3 courseimage" >
        <img src="/Knowldemort/images/js.png">
    </div>
    <div class="col-9">
        <h2> JavaScript</h2>
		<div class="col-4">
	        <b> Course Code: </b> <i> CS2210</i><br>
	        <b> Credit Hours: </b> <i> 3+1 </i><br>
	        <b> Instructor Name: </b> <i>Abdul Hadi</i><br>
		</div>
		<div class="col-4">
			<h4 style="padding: 0; margin: 0">Connected People Enrolled</h4>
		        <b> Saif Khan - </b>With You in 4 Other courses<br>
		        <b>Saim Butt - </b>You shared 11 courses in the past<br>
		        <b>*43 others in courses with you</b><br>
		</div>
		<div class="col-4">
			<b>Timetable: </b><i>Compatible</i><br><br>
			<button class="col-12">Enroll</button>
		</div>
	</div>
</div>


    <?php include $app_path . "includes/general_footer.php" ?>
    
</body>
</html>