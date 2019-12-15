<!DOCTYPE html>
<html>
<head>
<?php
    // include "../includes/header.php";
    require_once "../includes/dbcode.php";
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
    <script type="text/javascript">
    function show() {
       var x = document.getElementById("add");
       if (x.style.display === "block") {
           x.style.display = "none";
       } else {
           x.style.display = "block";
       }
   }


</script>
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
<div class="userbox col-12">
     <h2>Marksheet</h2>
     <?php

    $userid = "123";

    $sql = "SELECT m.courseid, m.userid, m.q1, m.q2, m.a1, m.a2, m.oht1, m.oht2, m.ese, m.totalobtmarks, m.totalmarks, m.avgmarks, u.uid, c.cid, c.coursename FROM marks m, users u, courses c WHERE u.uid ='".$userid."' and m.courseid = c.cid and m.userid = u.uid ";

   $retval = mysqli_query($link, $sql);

   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($link));
   }
   if (mysqli_num_rows($retval) > 0) {
            while($row = mysqli_fetch_assoc($retval)) {

?>

     <table class="table">
    <thead>
      <tr class="info">
        <th>Course Name</th>
        <th>Quiz 1</th>
        <th>Quiz 2</th>
        <th>Assignment 1</th>
        <th>Assignment 2</th>
        <th>OHT 1</th>
        <th>OHT 2</th>
        <th>ESE </th>
        <th>Obtained Marks</th>
        <th>Total Marks</th>
        <th>Average marks</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <th><?php echo $row["coursename"]; ?></th>
        <th><?php echo $row["q1"]; ?></th>
        <th><?php echo $row["q2"]; ?></th>
        <th><?php echo $row["a1"]; ?></th>
        <th><?php echo $row["a2"]; ?></th>
        <th><?php echo $row["oht1"]; ?></th>
        <th><?php echo $row["oht2"]; ?></th>
        <th><?php echo $row["ese"]; ?></th>
        <th><?php echo $row["totalobtmarks"]; ?></th>
        <th><?php echo $row["totalmarks"]; ?></th>
        <th><?php echo $row["avgmarks"]; ?></th>
        <th><a href="../phpfiles/edit.php?cid=<?php echo $row["courseid"]; ?>&uid=<?php echo $row["userid"]; ?>">Edit</a></th>
        <th><a href="../phpfiles/deleterecord.php?cid=<?php echo $row["courseid"]; ?>&uid=<?php echo $row["userid"]; ?>">Delete</a></th>
      </tr>




<?php
            }

   } else {
       echo "0 results";
   }
     ?>
    </tbody>
  </table>
      <button style="background-color:blue; color:white; size: 100px; align: center;" onclick="show()">Add Record</button>
      <br/><br/>
      <div id="add" style="color:black; display: none;">

      <form  method="post" action="../phpfiles/edit.php"  class="col-4">
        <input type="hidden" name="new" value="1" />
        <p>Course id: <input type="text" name="courseid"  required /></p>
        <p>Quiz 1: <input type="text" name="q1" optional /></p>
        <p>Quiz 2: <input type="text" name="q2" optional /></p>
        <p>Assignment 1: <input type="text" name="a1" optional /></p>
        <p>Assignment 2: <input type="text" name="a2" optional /></p>
        <p>OHT 1: <input type="text" name="oht1" optional /></p>
        <p>OHT 2: <input type="text" name="oht2" optional /></p>
        <p>ESE: <input type="text" name="ese" optional /></p>
        <p>Total marks: <input type="text" name="totalmarks" optional /></p>
        <p>Obtained marks: <input type="text" name="totalobtmarks" optional /></p>
        <p>Average marks: <input type="text" name="avgmarks" optional /></p>
        <p><input name="submit" type="submit" value="Submit" /></p>
      </form>

      </div>


 </div>

    <?php include $app_path . "includes/general_footer.php" ?>
    
</body>
</html>
