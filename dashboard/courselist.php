<!DOCTYPE html>
<html>
<head>
<?php
    include "../includes/header.php";
    include "../includes/dbcode.php";
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
<?php
        $sql = 'SELECT cid , course_name, coursimg, credithours  FROM course';

   $retval = mysqli_query($link, $sql);

   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($link));
   }
   if (mysqli_num_rows($retval) > 0) {
            while($row = mysqli_fetch_assoc($retval)) {



               $coursename = $row["course_name"];
               $cid = $row["cid"];

               $credithours = $row["credithours"];
               ?>
<div class="userbox col-12">
    <div class="col-3 courseimage" >
        <img src=  <?php echo $row["coursimg"]; ?>  >
    </div>

    <div class="col-9">

               <h2 > <?php echo $row["course_name"]; ?></h2>
		<div class="col-4">
	        <b> Course Code: </b> <i> <?php echo $row["cid"]; ?></i><br>
	        <b> Credit Hours: </b> <i> <?php echo $row["credithours"]; ?></i><br>

		</div>
		<div class="col-4">
			<h4 style="padding: 0; margin: 0">Connected People Enrolled</h4>
		        <b> Saif Khan - </b>With You in 4 Other courses<br>
		        <b>Saim Butt - </b>You shared 11 courses in the past<br>
		        <b>*43 others in courses with you</b><br>
		</div>
		<div class="col-4">

			<b>Timetable: </b><i>Compatible</i><br><br>
			<a href="/Knowldemort/logoutPages/addenroll.php?id=<?php echo $row["cid"]; ?>&uid=<?php echo $_SESSION["sid"]; ?>">Enroll here</a>

		</div>
	</div>
</div>
               <?php
            }

   } else {
       echo "0 results";
   }


        ?>


    <?php include $app_path . "includes/general_footer.php" ?>
    
</body>
</html>
