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


	<h1> Events </h1>
<?php
  $sql = "SELECT eventid as id, eventname as name, address, dates, organizer FROM vw_event_display";
   $retval = mysqli_query($link, $sql);

   if (mysqli_num_rows($retval) > 0) {
    while($row = mysqli_fetch_assoc($retval)) {

        $_GLOBALS["event"] = $row;

        echo "<section class=section-padding>
          <div class=row align=center>";
        include "event_ind.php";
        echo "</div></section>";
      }
    }?>







    <?php include  "../includes/footer.php" ?>

</body>
</html>
