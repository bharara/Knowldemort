<!DOCTYPE html>
<html>
<head>
<?php
  include "../includes/config.php";
  include "../includes/header.php";
  include "../includes/dbfun.php";
  session_start ();

  if(isset($_GET["id"]))
    $id = $_GET["id"];
  else
    $id = $_SESSION ["sid"];

?>
  <title> <?php echo $_SESSION["name"];?>  - Knowldemort</title>
</head>
<body>
  <!--Banner-->
<div class="bg-color">
<div class="banner-text text-center">
  <div class="text-border">
    <h2 class="text-dec"><?php echo $_SESSION["name"];?></h2>
  </div>
  <div class="intro-para text-center quote">
    <?php echo "<img src='../images/users/$_SESSION[img]'>"?>
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

        <!-- <div class="pm-staff-profile-image-wrapper text-center"> -->
          <!-- <div class="pm-staff-profile-image"> -->
            <!-- <img src="images/mentor.jpg" alt="" class="img-thumbnail img-circle" /> -->
          <!-- </div> -->
        <!-- </div> -->

    </div>
  </div>
  </section>
  <!--/ work-shop-->
<?php }; ?>
<?php include $app_path . "includes/footer.php" ?>
</body>
</html>