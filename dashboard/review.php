<?php
  $review = $_GLOBALS["review"];
  $subdetails = substr($review['details'],0,80);
echo "
	<div class='col-lg-3 col-md-3 col-sm-3'>
	  <div class='pm-staff-profile-container'>
	  <div class='pm-staff-profile-image-wrapper text-center'>
          <div class='pm-staff-profile-image'>";
    if ($review['is_annon'] == 0)
            echo "<img src='../images/users/$review[img]' class='img-thumbnail img-circle'/>";
    else
            echo "<img src='../images/users/annon.jpg' class='img-thumbnail img-circle'/>";
echo "     </div>
        </div>
	    <div class='pm-staff-profile-details text-center'>
	      <p class='pm-staff-profile-name'>";
    if ($review['is_annon'] == 0)
    	echo "<a href='user.php?id=$review[sid]'>$review[sname]</a></p>";
    else
    	echo "<a>Annon</a></p>";
echo "
          <p class='pm-staff-profile-title'>$review[score] Stars <br> $review[title]</p>
	      <p class='pm-staff-profile-bio'>$subdetails <a href='review_ind.php'>More...</a></p>
	    </div>
	  </div>
	</div>";

?>