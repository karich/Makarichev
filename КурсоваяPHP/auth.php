<?php

session_start();
include 'db.php';

$login = $_REQUEST['login'];
$pass = $_REQUEST['pass'];
if(strlen($login)=="" || strlen($pass)==""){
    header('Location:form.php?error=not_valid');
    exit;
}else{
    $query = "SELECT * FROM `admin` WHERE `login` = '$login'";
    $result = mysqli_query($link,$query);
var_dump($query);
    if(mysqli_num_rows($result) !=0){
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $user;
        $_SESSION['login_time'] = time();
            header('Location:admin.php');
        die;
    }else{
        header('Location:form.php?error=not_valid1');
        die;
    } 
}
