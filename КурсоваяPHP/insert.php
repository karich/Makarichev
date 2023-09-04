<?php
include 'db.php';

$name = $_REQUEST['name'];
$genre = $_REQUEST['genre'];
$info_low = $_REQUEST['info_low'];
$info_full = $_REQUEST['info_full'];
$link2 = $_REQUEST['link'];
$path = "img/".$_FILES['img']['name'];

if(($name)=="" || ($genre)=="" || ($info_full)=="" || ($info_low)=="" || ($path)==""){
  header('Location:admin.php?error=not_valid');
}else{
  move_uploaded_file($_FILES['img']['tmp_name'],$path);
  $query = "INSERT INTO `information` (`img`, `categories_id`, `name`, `info_low`, `info_full`, `date_add`, `link`)
 VALUES ('$path', '$genre', '$name', '$info_low', '$info_full', NOW(), '$link2');";
mysqli_query($link, $query);
header('Location:admin.php'); 
}
   
