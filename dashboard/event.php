<!DOCTYPE html>
<html>
<head>
<?php
  include "../includes/config.php";
  include "../includes/header.php";

  if(!(isset($_GET["event"]))) {
    $url = $app_path . "index.php";
    header("location: $url");
  }

  $id = $_GET["event"];
  $is_attending = $_GET["isattend"];
  include "../includes/dbfun.php";
  $event_info = get_event_info ($id);


?>

  <title> <?php echo $event_info["name"];?>  - Knowldemort</title>
</head>
<body>
  <!--Banner-->
<div class="bg-color">
<div class="banner-text text-center">
  <div class="text-border">
    <h2 class="text-dec"><?php echo $event_info["name"];?></h2>
  </div>
  <div class="intro-para text-center quote">
    <?php echo "<p class='small-text'>
    Organizer(s): $event_info[organizer]<br>
    Venue: $event_info[address]<br>
    Date: $event_info[dates]
    </p>";?>
  </div>
  <div class="col-3">
    <?php
      if ($is_attending)
        echo "<a class='btn btn-green btn-flat' href='leaveevent.php?event=$event_info[id]'>Leave Event</a>";
      else
        echo "<a class='btn btn-green btn-flat' href='joinevent.php?event=$event_info[id]'>Join here</a>";
      ?>
   </div>
</div></div>


<?php
  include "../includes/footer.php"; ?>
</body>
</html>