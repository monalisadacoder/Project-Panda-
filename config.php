<?php
$link = mysqli_connect('localhost','root','','Project_Panda');

if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}
?>