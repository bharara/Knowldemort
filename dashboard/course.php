<!DOCTYPE html>
<html>
<head>
<?php
  include "../includes/config.php";
  include "../includes/header.php";

  if(!(isset($_GET["course"]))) {
    $url = $app_path . "index.php";
    header("location: $url");
  }

  $id = $_GET["course"];
  include "../includes/dbfun.php";
  $course_info = get_course_info ($id);

?>
  <title> <?php echo $course_info["name"];?>  - Knowldemort</title>
</head>
<body>


<?php include $app_path . "includes/footer.php" ?>
</body>
</html>