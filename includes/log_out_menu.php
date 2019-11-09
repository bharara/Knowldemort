
<link rel="stylesheet" type="text/css" href="<?php echo $app_path ?>css/head.css">

<div class="topnav" id="myTopnav">
  <a href="<?php echo $app_path ?>">Home</a>
  <a href="#contact">Contact</a>
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
  <a href="#about">About</a>

  <a href="index.php?page=login">Log-In <i class="fa fa-sign-in" aria-hidden="true"></i></a>
  <a href="index.php?page=register"/>Sign-Up <i class="fa fa-user-plus"></i></a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="drop_down_menu()">&#9776;</a>
</div>

<script type="text/javascript" src="<?php echo $app_path ?>js/menu.js">></script>