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
  $is_enrolled = $_GET["isenroll"];
  include "../includes/dbfun.php";
  $course_info = get_course_info ($id);
  //$is_enrolled = is_enrolled($id);
  $reviews = get_course_reviews($id);
?>

  <title> <?php echo $course_info["name"];?>  - Knowldemort</title>
</head>
<body>
  <!--Banner-->
<div class="bg-color">
<div class="banner-text text-center">
  <div class="text-border">
    <h2 class="text-dec"><?php echo $course_info["name"];?></h2>
  </div>
  <div class="intro-para text-center quote">
    <?php echo "<p class='small-text'>
    Offered at: $course_info[uni]<br>
    Delivered by: <a href='instructor.php?id=$course_info[instructor_id]'> $course_info[instructor]</a><br>
    Credit Hours: $course_info[ch]
    </p>";?>
  </div>
    <div class="col-3">
    <?php
      if ($is_enrolled)
        echo "<a class='btn btn-green btn-flat' href='unenroll.php?course=$course_info[id]'>Unenroll</a>";
      else
        echo "<a class='btn btn-green btn-flat' href='enroll.php?course=$course_info[id]'>Enroll here</a>";
      ?>
   </div>
</div></div>
<!--/ Banner-->
<?php
  $numReviews = count($reviews);

  if ($numReviews > 0 || $is_enrolled) {
?>
  <section id="work-shop" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="header-section text-center">
        <h2>Reviews</h2>
        <hr class="bottom-line">
        <?php
          if ($is_enrolled) {
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