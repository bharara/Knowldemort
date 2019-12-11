<?php  include "../includes/config.php"; ?>

<!--Navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="<?php echo $app_path ?>dashboard">Know<span>ldemort</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li><a href="<?php echo $app_path ?>dashboard/courselist.php">Course Catalog</a></li>
         <li><a href="<?php echo $app_path ?>dashboard/user.php">My Profile <i class="fa fa-user"></i></a></li>
         <li><a href="<?php echo $app_path ?>dashboard/">Notifications <i class="fa fa-bell"></i> (6)</a></li>
         <li><a href="<?php echo $app_path ?>dashboard/">Calendar <i class="fa fa-calendar"></i></a></li>
         <!-- <li>
          <form class="search">
            <input class="search" type="text" placeholder="Search..">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </li> -->
        <li class="btn-trial"><a href="<?php echo $app_path ?>logoutPages/sign_out.php">Sign Out <i class="fa fa-sign-out"></i></a></li>
      </ul>
    </div>
  </div>
</nav>
<!--/ Navigation bar-->
