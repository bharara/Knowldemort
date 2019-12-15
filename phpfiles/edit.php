
<?php
    include "../includes/header.php";
    include "../includes/dbcode.php";

    $userid = "123"; //for adding a record

    $uid=$_GET['uid']; //for updating
    $cid=$_GET['cid']; //for updating

    $query = "SELECT courseid, userid, q1, q2, a1, a2, oht1, oht2, ese,totalobtmarks, totalmarks, avgmarks from marks where userid='".$uid."' and courseid='" . $cid .  "'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="../css/form.css" >
</head>
<body>
<?php
$status = "";
if(isset($_POST['edit']) && $_POST['edit']==1)
{
    $courseid =$_REQUEST['courseid'];
    $q1 =$_REQUEST['q1'];
    $q2 =$_REQUEST['q2'];
    $a1 =$_REQUEST['a1'];
    $a2 =$_REQUEST['a2'];
    $oht1 =$_REQUEST['oht1'];
    $oht2 =$_REQUEST['oht2'];
    $ese =$_REQUEST['ese'];
    $totalobtmarks =$_REQUEST['totalobtmarks'];
    $totalmarks =$_REQUEST['totalmarks'];
    $avgmarks = $_REQUEST['avgmarks'];

$update="update marks set courseid='".$courseid."',
q1='".$q1."', q2='".$q2."',a1='".$a1."', oht1='".$oht1."', oht2='".$oht2."',ese='".$ese."',totalobtmarks='".$totalobtmarks."',totalmarks='".$totalmarks."', avgmarks='".$avgmarks."' where userid='".$uid."' and courseid='" .$cid ."'";
mysqli_query($link, $update) or die(mysqli_error($link));
$status = "Record Updated Successfully. </br>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
 header("Location: /Knowldemort/dashboard/user.php");
}else {
?>
<div>

 <form  method="post" action="" class="col-6" >
        <input type="hidden" name="edit" value="1" />
        <p>Course id: <input type="text" name="courseid"  value="<?php echo $row['courseid'];?>"  optional/></p>
        <p>Quiz 1: <input type="text" name="q1" value="<?php echo $row['q1'];?>"  optional /></p>
        <p>Quiz 2: <input type="text" name="q2" value="<?php echo $row['q2'];?>"  optional /></p>
        <p>Assignment 1: <input type="text" value="<?php echo $row['a1'];?>"  name="a1" optional /></p>
        <p>Assignment 2: <input type="text" name="a2" value="<?php echo $row['a2'];?>"  optional /></p>
        <p>OHT 1: <input type="text" name="oht1" value="<?php echo $row['oht1'];?>"  optional /></p>
        <p>OHT 2: <input type="text" name="oht2" value="<?php echo $row['oht2'];?>"  optional /></p>
        <p>ESE: <input type="text" name="ese" value="<?php echo $row['ese'];?>"  optional /></p>
        <p>Total marks: <input type="text" name="totalmarks" value="<?php echo $row['totalmarks'];?>" optional /></p>
        <p>Obtained marks: <input type="text" name="totalobtmarks" value="<?php echo $row['totalobtmarks'];?>"  optional /></p>
        <p>Average marks: <input type="text" name="avgmarks" value="<?php echo $row['avgmarks'];?>"  optional /></p>
        <p><input name="submit" type="submit" value="Submit" /></p>
      </form>
<?php }

    if(isset($_POST['new']) && $_POST['new']==1){
    $courseid =$_REQUEST['courseid'];
    echo "going good";
    $q1 =$_REQUEST['q1'];
    $q2 =$_REQUEST['q2'];
    $a1 =$_REQUEST['a1'];
    $a2 =$_REQUEST['a2'];
    $oht1 =$_REQUEST['oht1'];
    $oht2 =$_REQUEST['oht2'];
    $ese =$_REQUEST['ese'];
    $totalobtmarks =$_REQUEST['totalobtmarks'];
    $totalmarks =$_REQUEST['totalmarks'];
    $avgmarks = $_REQUEST['avgmarks'];

    $ins_query="insert into marks
    (`courseid`,`userid`,`q1`, `q2`, `a1`, `a2`, `oht1`, `oht2`, `ese`,`totalobtmarks`, `totalmarks`, `avgmarks` )values
    ('$courseid','$userid','$q1', '$q2', '$a1', '$a2', '$oht1', '$oht2', '$ese','$totalobtmarks', '$totalmarks', '$avgmarks' )";
    mysqli_query($link ,$ins_query)
    or die(mysqli_error($link));
    $status = "New Record Inserted Successfully.";
    header("Location: /Knowldemort/dashboard/user.php");
   }
   else{
    echo "0 results";
    header("Location: /Knowldemort/dashboard/user.php");
   }


?>


</div>

</body>
</html>
