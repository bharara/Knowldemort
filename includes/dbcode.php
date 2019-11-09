<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "090078601";
$dbName = "knowldemort";
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbName);   

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>