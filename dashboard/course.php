<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "../includes/header.php";
    if(!(isset($_SESSION["sid"]))) {
        $msg = "You need to Login First";
        $url = $app_path . "index.php?page=login&msg=". $msg;
        header("location: $url");
    }
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/user-page.css" >
    <link rel="stylesheet" href="../css/responsive.css" >
    <link rel="stylesheet" href="../css/form.css" >
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Course Page</title>
</head>
<body>

<div class="userbox col-12">
    <div class="col-3">
        <img class="usrimage" src="/Knowldemort/images/js.png">
    </div>
    <div class="col-9">
        <h2> JavaScript</h2>

            <b> Course Code: </b> <i> CS2210</i><br>
            <b> Credit Hours: </b> <i> 3+1 </i><br>
            <b> Instructor Name: </b> <i>Abdul Hadi</i><br>
    </div>

</div>

<div class="userbox col-12">

  <h2> Timetable</h2>

    <table class="table  table-bordered" style="text-align:center">
  <thead>
    <tr>
      <th scope="col">Timings</th>
      <th scope="col">9:00-9:50</th>
      <th scope="col">10:00-10:50</th>
      <th scope="col">11:00-11:50</th>
      <th scope="col">11:00-11:50</th>
      <th scope="col">12:00-12:50</th>
      <th scope="col">13:00-13:50</th>
      <th scope="col">14:00-14:50</th>
      <th scope="col">15:00-15:50</th>
      <th scope="col">16:00-16:50</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Monday</th>
      <td class="table-success" colspan="3">Lab</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>

    </tr>
    <tr>
      <th scope="row">Tuesday</th>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-success">JavaScript</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>


    </tr>
    <tr>
      <th scope="row">Wednesday</th>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-success" colspan="2">JavaScript</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>

    </tr>
    <tr>
      <th scope="row">Thursday</th>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-success">JavaScript</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>

    </tr>
    <tr>
      <th scope="row">Friday</th>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>
      <td class="table-secondary">-</td>

    </tr>
  </tbody>
</table>
</div>

<div class="userbox col-12" style="text-align: center">
   <div class="userbox col-8">
    <h2>Course Content</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
        in culpa qui officia deserunt mollit anim id est laborum.</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
        in culpa qui officia deserunt mollit anim id est laborum.</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
        in culpa qui officia deserunt mollit anim id est laborum.</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
        in culpa qui officia deserunt mollit anim id est laborum.</p>

    <button type=button class="seemore">See More <i class="fa fa-arrow-down"></i></button>


   </div>
   <div class="userbox col-4">
    <h2>Students Enrolled</h2>
    <ul class="list-group">
        <li class="list-group-item list-group-item-info" ><a href="#">Itachi Uchiha</a></li>
        <li class="list-group-item list-group-item-info" ><a href="#">Naruto Uzumaki</a></li>
        <li class="list-group-item list-group-item-info" ><a href="#">Kakashi Hatake</a></li>
        <li class="list-group-item list-group-item-info" ><a href="#">Nagato Pain</a></li>
        <li class="list-group-item list-group-item-info" ><a href="#">Sasuke Uchiha</a></li>
        <li class="list-group-item list-group-item-info" ><a href="#">Gohan Goku</a></li>
        <li class="list-group-item list-group-item-info" ><a href="#">Tsunade Baba</a></li>

  </ul>
  <button type=button class="seemore">See More <i class="fa fa-arrow-down"></i></button>
  </div>


</div>

<?php include $app_path . "includes/general_footer.php" ?>
</body>
</html>