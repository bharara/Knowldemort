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
  $sql = "SELECT course_id as id, course_name as name, credit_hour, instructor_id, instructor FROM vw_course_display";
   $retval = mysqli_query($link, $sql);

   if (mysqli_num_rows($retval) > 0) {
    while($row = mysqli_fetch_assoc($retval)) {

        $_GLOBALS["course"] = $row;
  
        echo "<section class=section-padding>
          <div class=row align=center>";
        include "course_ind.php";
        echo "</div></section>";
      }
    }?>
    <?php include $app_path . "includes/footer.php" ?>
    
</body>
</html>
