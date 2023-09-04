<?php
include 'db.php';
if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$info_low = $_REQUEST['info_low'];
$info_full = $_REQUEST['info_full'];
$link2 = $_REQUEST['link'];
  $query = "UPDATE `information` SET `name`='$name',`info_low`='$info_low',`info_full`= '$info_full',`date_add`=NOW(),`link`='$link2' 
  WHERE `information`.`id` = $id;";
  mysqli_query($link, $query);
  header('Location:vivod1.php'); 
}