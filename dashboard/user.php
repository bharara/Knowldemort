<!DOCTYPE html>
<html>
<head>
<?php
    include "../includes/header.php";
    if(!(isset($_SESSION["sid"]))) {
        $msg = "You need to Login First";
        $url = $app_path . "index.php?page=login&msg=". $msg;
        header("location: $url");
    }
?>
<link rel="stylesheet" href="../css/user-page.css" >

    <title><?php echo $_SESSION["name"]  ?>'s Profile - Knowldemort</title>
</head>
<body> 

<div class="userbox col-12">
    <div class="col-3">
        <img class="usrimage" src="/Knowldemort/images/usimg.jpg">
    </div>
    <div class="col-9">
        <h2> Itachi Uchiha</h2>
        <div class="col-6">
            <b> Degree: </b> <i> Bachelor's in Software Engineering</i><br>
            <b> Year: </b> <i> 2017 </i><br>
            <b> University </b> <i>National University Of Sciences and Technology</i><br>
        </div>
        <div class="col-3">
        </div>
    </div>
</div>

<div class="clear"></div>


<div class="courses">
    <h2>Courses</h2>
    <img class="courseimage" src="/Knowldemort/images/c.png">
    <img class="courseimage" src="/Knowldemort/images/android-logo.png">
    <img class="courseimage" src="/Knowldemort/images/js.png">
    <img class="courseimage" src="/Knowldemort/images/calc.jpeg">
    <div class="seemore">See More >></div>
</div>
<div class="projects">
    <h2>Projects</h2>
    <img class="courseimage" src="/Knowldemort/images/c.png">
    <img class="courseimage" src="/Knowldemort/images/android-logo.png">
    <img class="courseimage" src="/Knowldemort/images/js.png">
    <img class="courseimage" src="/Knowldemort/images/calc.jpeg">
    <div class="seemore">See More >></div>
</div>


    <?php include $app_path . "includes/general_footer.php" ?>
    
</body>
</html>