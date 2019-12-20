<!DOCTYPE html>
<html>
<head>
<?php
  include "../../includes/config.php";
  session_start();
  include "../../includes/header.php";

  if(!(isset($_GET["course"]))) {
    $url = $app_path . "index.php";
    header("location: $url");
  }

  $id = $_GET["course"];
  require_once "../../includes/dbfun.php";
  $course_info = get_course_info ($id);
  $is_enrolled = is_enrolled($id);
  $course_items = get_course_items ($id, $_SESSION["sid"]);

  require_once "../../model/model.php";
  $grades = get_predicted_grade ($id, $_SESSION["sid"]);
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
    Delivered by: <a href='../instructor.php?id=$course_info[instructor_id]'> $course_info[instructor]</a><br>
    Credit Hours: $course_info[ch]
    </p>";?>
  </div>
</div></div>
<!--/ Banner-->
<section id="work-shop" class="section-padding">
  <table width="50%" align="center" border="1" style="text-align: center;">
    <tr>
      <th style="text-align: center;">Item</th>
      <th style="text-align: center;">My Marks</th>
      <th style="text-align: center;">Average</th>
      <th style="text-align: center;">Total</th>
    </tr>
    <?php echo "
      <tr>
        <td>Current Absolute Marks </td>
        <td>$grades[mine]</td>
        <td>$grades[avg]</td>
        <td>$grades[weight]</td>
      </tr>
      <tr>
        <td>Predicted Absolute Marks </td>
        <td>$grades[mineP]</td>
        <td>$grades[avgP]</td>
        <td>100%</td>
      </tr>
        <td colspan=3>Predicted Grade</td>
        <td>$grades[grade]</td>
      </tr>";?>
  </table>
</section>


<section class="section-padding">

  <form id="marksform" name="marksform" action="enter_marks.php" method="post" align=center style="padding-bottom: 40px;" >
    <input type=text placeholder="Item" name=item required>
    <select name="type" class="form-check-inline" required>
      <?php
        $items = get_item_names ($id); 
        foreach($items as $item) {
          echo "<option value=$item[id]>$item[name]</option>";
        }?>
    </select>
    <input type=number placeholder="Obtained Marks" name=obt step="0.01" required>
    <input type=text placeholder="Average Marks" name=avg step="0.01" required>
    <input type=text placeholder="Total Marks" name=total step="0.01" required>
    <input type=text value="<?php echo date('Ymd') ?>" name=date required>
    <input type=hidden name=course value='<?php echo "$id" ?>' required>
    <input class='btn btn-green' type=submit value="Enter">
  </form>

  <table width="50%" align="center">
    <tr>
      <th> Item </th>
      <th> Type </th>
      <th> Obtained Marks </th>
      <th> Average Marks </th>
      <th> Total Marks </th>
      <th> Weightage </th>
      <th> Date </th>
    </tr>
    <?php
    foreach($course_items as $item_info) {
      echo "<tr>
        <td>$item_info[name]</td>
        <td>$item_info[type]</td>
        <td>$item_info[obt]</td>
        <td>$item_info[avg]</td>
        <td>$item_info[total]</td>
        <td>$item_info[weight]</td>
        <td>$item_info[date]</td>
      </tr>";
    }?>

  </table>

</section>
<?php include $app_path . "/includes/footer.php" ?>
</body>
</html>