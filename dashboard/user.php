<!DOCTYPE html>
<html>
<head>
<?php
  include "../includes/config.php";
  include "../includes/header.php";
  include "../includes/dbfun.php";
  session_start ();

  if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $info = get_student_info ($id);
  }
  else {
    $id = $_SESSION ["sid"];
    $info = $_SESSION;
  }

?>
  <title> <?php echo $info["name"];?>  - Knowldemort</title>
</head>
<body>
  <!--Banner-->
<div class="bg-color">
<div class="banner-text text-center">
  <div class="text-border">
    <h2 class="text-dec"><?php echo $info["name"];?></h2>
  </div>
  <div class="intro-para text-center quote">
    <?php echo "<img src='../images/users/$info[img]'>"?>
  </div>
</div></div>
<!--/ Banner-->

<!--work-shop-->
<?php
  $user_courses = get_user_courses ($id);
  $numcourses = count($user_courses);

  if ($numcourses > 0) {
?>

  <section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="header-section text-center">
        <h2>Courses</h2>
        <hr class="bottom-line">
      </div>

      <?php
      foreach($user_courses as $course_info) {
        // print_r($course_info);
        $_GLOBALS["course"] = $course_info;
        include "course_ind.php";

      }?>

    </div>
  </div>
  </section>
  <!--/ work-shop-->
<?php }; ?>
<?php include $app_path . "includes/footer.php" ?>
</body>
</html>