
<?php
// session_start ()
  $course_info = $_GLOBALS["course"];

echo "
<div class='col-lg-4 col-md-4 col-sm-4'>
  <div class='pm-staff-profile-container'>
    <div class='pm-staff-profile-details text-center'>
      <p class='pm-staff-profile-name'> <a href='course.php?course=$course_info[id]'>$course_info[name]</a></p>
      <p class='pm-staff-profile-title'>By: <a href='instructor.php?id=$course_info[instructor_id]'> $course_info[instructor]</a></p>

      <p class='pm-staff-profile-bio'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>

      <a class='btn btn-green btn-block btn-flat' href='student/marks.php?course=$course_info[id]'> Enter Marks</a>
    </div>
  </div>
</div>
";
?>