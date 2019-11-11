<?php
  include "config.php";
?>
<link rel="stylesheet" type="text/css" href="<?php echo $app_path ?>css/head.css">

<div class="topnav" id="myTopnav">
  <a href="<?php echo $app_path ?>dashboard">Home</a>
  
  <div class="dropdown">
  <!--
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  -->
  </div>

  <a href="<?php echo $app_path ?>dashboard/courselist.php">Course Catalog</a>
  <a href="<?php echo $app_path ?>dashboard/user.php">My Profile <i class="fa fa-user"></i></a>
  <a href="<?php echo $app_path ?>dashboard/">Notifications <i class="fa fa-bell"></i> (6)</a>
  <a href="<?php echo $app_path ?>dashboard/">Calendar <i class="fa fa-calendar"></i></a>
  <form class="search">
    <input class="search" type="text" placeholder="Search..">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <a href="<?php echo $app_path ?>logoutPages/sign_out.php">Sign Out <i class="fa fa-sign-out"></i></a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="drop_down_menu()">&#9776;</a>
</div>

<script type="text/javascript" src="<?php echo $app_path ?>js/menu.js">></script>