<?php  include "config.php"; ?>

<!--Navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="<?php echo $app_path ?>">Know<span>ldemort</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?page=contact">Contact</a></li>
        <li><a href="index.php?page=about">About</a></li>
        <li><a href="#" data-target="#login" data-toggle="modal">Log-In <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
        <li class="btn-trial"><a href="index.php?page=register"/>Sign-Up <i class="fa fa-user-plus"></i></a></li>
      </ul>
    </div>
  </div>
</nav>
<!--/ Navigation bar-->

<!--Modal box-->
  <div class="modal fade" id="login" role="dialog">
    <?php include "$app_path/logoutPages/login.php";?>
  </div>
<!--/ Modal box-->