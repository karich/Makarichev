<?php
include 'db.php';
if(isset($_REQUEST['id2'])){
$id = $_REQUEST['id2'];

  $query = "DELETE FROM `information` WHERE `information`.`id` = $id";
mysqli_query($link, $query);
header('Location:vivod1.php');
}else{
  $id = $_REQUEST['id3'];
  $query = "DELETE FROM `teacher` WHERE `teacher`.`teacher_id` = $id";
mysqli_query($link, $query);
header('Location:vivod4.php');
}
 