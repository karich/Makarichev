<?php
include 'db.php';

  $id4 = $_REQUEST['id4'];
  $FIO_red = $_REQUEST['FIO_red'];
  $info_teach_red = $_REQUEST['info_teach_red'];
  $work_red = $_REQUEST['work_red'];
    $query = "UPDATE `teacher` SET `FIO`='$FIO_red',`info_teach`='$info_teach_red',`work`='$work_red' WHERE `teacher_id` = $id4";
    mysqli_query($link, $query);
    header('Location:vivod4.php'); 

