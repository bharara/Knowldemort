<!DOCTYPE html>
<html>
<head>
<?php
    include "../includes/header.php";
    require_once "dbcode.php";
    if(!(isset($_SESSION["sid"]))) {
        $msg = "You need to Login First";
        $url = $app_path . "index.php?page=login&msg=". $msg;
        header("location: $url");
    }
    $userid = "123";
    //$sql = "SELECT uid , cid FROM enrolled WHERE uid ='".$userid."'";
    $sql = "SELECT uid , Name, degree, year, uni, userimg FROM users WHERE uid ='".$userid."'";

   $retval = mysqli_query($link, $sql);

   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($link));
   }
   if (mysqli_num_rows($retval) > 0) {
            while($row = mysqli_fetch_assoc($retval)) {
?>

<link rel="stylesheet" href="../css/user-page.css" >
<link rel="stylesheet" href="../css/form.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

    <title><?php echo $_SESSION["name"]  ?>'s Profile - Knowldemort</title>
</head>
<body> 

<div class="userbox col-12">
    <div class="col-3 usrimage">
        <img src=<?php echo $row["userimg"]; ?>>
    </div>
    <div class="col-9">
        <h2> <?php echo $_SESSION["name"] ; 
        echo "   ";
         echo "<a href='update.php?id=". $_SESSION['name'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil' style = 'font-size:30px; color:white'></span></a>"; ?>
      </h2>
        <div class="col-6">
            <b> Degree: </b> <i> <?php echo $row["degree"]; ?></i><br>
            <b> Year: </b> <i> <?php echo $row["year"]; ?> </i><br>
            <b> University </b> <i><?php echo $row["uni"]; ?></i><br>
        </div>
        <div class="col-3">
        </div>
    </div>
</div>
<?php
            }

   } else {
       echo "0 results";
   }


        ?>
<div class="userbox col-12">
    <h2>Enrolled Courses</h2>
    <?php

    $userid = "123";
    $csql = "SELECT e.userid , e.courseid, c.coursename, coursimg FROM enrolled e, courses c WHERE e.userid ='".$userid."' and e.courseid = c.cid";


   $cretval = mysqli_query($link, $csql);

   if(! $cretval ) {
      die('Could not get data: ' . mysqli_error($link));
   }
   if (mysqli_num_rows($cretval) > 0) {
            while($row = mysqli_fetch_assoc($cretval)) {

?>
   <div class="col-3 courseimage"><a href="/Knowldemort/dashboard/course.php"><img src= <?php echo $row["coursimg"]; ?> ></a></div>
 <?php
            }

   } else {
       echo "0 results";
   }
     ?>
    <button type=button class="center col-12">See More <i class="fa fa-arrow-down"></i></button>
    </div>
</div>

<div class="userbox col-12">
    <h2>Projects</h2>
    <div class="col-3 courseimage"><img src="/Knowldemort/images/c.png"></div>
    <div class="col-3 courseimage"><img src="/Knowldemort/images/android-logo.png"></div>
    <div class="col-3 courseimage"><img src="/Knowldemort/images/js.png"></div>
    <div class="col-3 courseimage"><img src="/Knowldemort/images/calc.jpeg"></div>
    <button type=button class="center col-12">See More <i class="fa fa-arrow-down"></i></button>
    </div>
</div>


    <?php include $app_path . "includes/general_footer.php" ?>
    
</body>
</html>
