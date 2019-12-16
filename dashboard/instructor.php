<!DOCTYPE html>
<html>
<head>
<?php
  include "../includes/config.php";
  include "../includes/header.php";
  include "../includes/dbfun.php";
  session_start();

  if(!(isset($_GET["id"])))
    header("location: index.php");
  else
    $id = $_GET["id"];

  $instructor_info = get_instructor_info ($id);
  $courses = get_instructor_courses ($id);
  $reviews = get_instructor_reviews($id);
  if (isset($_SESSION["sid"]))
    $is_student = is_a_student($courses, $_SESSION["courses"]);
  else
    $is_student = false;


?>
  <title> <?php echo $instructor_info["name"];?>  - Knowldemort</title>
</head>
<body>
  <!--Banner-->
<div class="bg-color">
<div class="banner-text text-center">
  <div class="text-border">
    <h2 class="text-dec"><?php echo $instructor_info["name"];?></h2>
  </div>
  <div class="intro-para text-center quote">
    <?php echo "<img class=limitimg src='../images/instructors/$instructor_info[img]'>"?>
  </div>
</div></div>
<!--/ Banner-->

<?php
  $numcourses = count($courses);
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
      foreach($courses as $course_info) {
        echo "
        <div class='col-lg-4 col-md-4 col-sm-4'>
          <div class='pm-staff-profile-container'>
            <div class='pm-staff-profile-details text-center'>
              <p class='pm-staff-profile-name'> <a href='course.php?course=$course_info[id]'>$course_info[name]</a></p>
              <p class='pm-staff-profile-bio'>
              Offered at $course_info[uni] <br>
              Students Enrolled $course_info[students]</p>
            </div>
          </div>
        </div>
        ";}?>
    </div>
  </div>
  </section>
<?php }; ?>


<?php
  $numReviews = count($reviews);

  if ($numReviews > 0 || $is_student) {
?>
  <section id="work-shop" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="header-section text-center">
        <h2>Reviews</h2>
        <hr class="bottom-line">
        <?php
          if ($is_student) {
          echo "<a class='btn btn-green'>Add Review </a><br>";
        }?>
      </div>

      <?php
      foreach($reviews as $review) {
        $_GLOBALS["review"] = $review;
        include "review.php";
      }?>
    </div>
  </div>
  </section>



<?php }
include $app_path . "includes/footer.php"; ?>
</body>
</html>