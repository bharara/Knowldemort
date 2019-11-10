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
<link rel="stylesheet" href="../css/form.css" >

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

<div class="userbox col-12">
    <h2>Courses</h2>
    <div class="col-3"><img class="courseimage" src="/Knowldemort/images/c.png"></div>
    <div class="col-3"><img class="courseimage" src="/Knowldemort/images/android-logo.png"></div>
    <div class="col-3"><img class="courseimage" src="/Knowldemort/images/js.png"></div>
    <div class="col-3"><img class="courseimage" src="/Knowldemort/images/calc.jpeg"></div>
    <button type=button class="seemore">See More <i class="fa fa-arrow-down"></i></button>
    </div>
</div>

<div class="userbox col-12">
    <h2>Projects</h2>
    <div class="col-3"><img class="courseimage" src="/Knowldemort/images/c.png"></div>
    <div class="col-3"><img class="courseimage" src="/Knowldemort/images/android-logo.png"></div>
    <div class="col-3"><img class="courseimage" src="/Knowldemort/images/js.png"></div>
    <div class="col-3"><img class="courseimage" src="/Knowldemort/images/calc.jpeg"></div>
    <button type=button class="seemore">See More <i class="fa fa-arrow-down"></i></button>
    </div>
</div>


    <?php include $app_path . "includes/general_footer.php" ?>
    
</body>
</html>