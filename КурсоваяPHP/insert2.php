<?php
include 'db.php';

$FIO = $_REQUEST['FIO'];
$info_teach = $_REQUEST['info_teach'];
$work = $_REQUEST['work'];
$path = "img/".$_FILES['img2']['name'];

if(($FIO)==""  || ($info_teach)=="" || ($work)=="" || ($path)==""){
  header('Location:admin.php?error=not_valid1');
}else{
  move_uploaded_file($_FILES['img2']['tmp_name'],$path);
  $query = "INSERT INTO `teacher`( `FIO`, `info_teach`, `work`, `img`)
   VALUES ('$FIO','$info_teach','$work','$path');";
mysqli_query($link, $query);
header('Location:admin.php'); 
}
   
