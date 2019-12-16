<?php
  ob_start();
  include "../includes/dbcode.php";
  $id =  $_GET['id'];
  $uid =  $_GET['uid'];
  $sql = "SELECT uid , cid, course_name FROM users, course WHERE cid ='".$id."' and uid='".$uid."'";

   $retval = mysqli_query($link, $sql);

   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   if (mysqli_num_rows($retval) > 0) {
            while($row = mysqli_fetch_assoc($retval)) {
               echo "uid: " . $row["uid"]. "<br>";
               echo "cid: " . $row["cid"]. "<br>";
               echo "coursename: /Knowldemort/dashboard/". $row["course_name"].".php" . "<br>";
               $uid = $row["uid"];
               $cid = $row["cid"];

            }
   } else {
       echo "0 results";
   }


   echo "Fetched data successfully\n";

   $inssql = "INSERT INTO course_enroll ". "( course, student  ) ". "VALUES('$cid','$uid')";
   $ret = mysqli_query(  $link, $inssql );

            if(! $ret ) {
               die('Could not enter data: ' . mysqli_error($link));
            }

            echo "Entered data successfully\n";

   mysqli_close($link);

   header("Location: /Knowldemort/dashboard/courselist.php");
?>