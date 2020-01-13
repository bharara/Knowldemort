
<?php
// session_start ()
  $event_info = $_GLOBALS["event"];

echo "
<div class='col-lg-4 col-md-4 col-sm-4'>
  <div class='pm-staff-profile-container'>
    <div class='pm-staff-profile-details text-center'>
      <p class='pm-staff-profile-name'> <a href='event.php?event=$event_info[id]'>$event_info[name]</a></p>
      <p class='pm-staff-profile-title'>By: <a href='instructor.php?id=$event_info[organizer]'> $event_info[organizer]</a></p>

      <p class='pm-staff-profile-bio'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>


    </div>
  </div>
</div>
";
?>