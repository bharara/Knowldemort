
<link rel="stylesheet" type="text/css" href="<?php echo $app_path ?>css/head.css">

<div class="slideshow-container">
  
  <div class="mySlides fade"><a><img src="<?php echo $app_path ?>images/plc.jpg"/></a></div>
  <div class="mySlides fade"><a><img src="<?php echo $app_path ?>images/plc.jpg"/></a></div>
  <div class="mySlides fade"><a><img src="<?php echo $app_path ?>images/plc.jpg"/></a></div>
</div>

<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script type="text/javascript" src="<?php echo $app_path ?>js/slider.js">></script>