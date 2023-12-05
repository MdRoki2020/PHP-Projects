<?php
require_once('config.php');

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$authPass=sha1(md5($password));

$selectQuery="SELECT * FROM `resister_students` WHERE email='$email' AND password='$authPass'";

$runQuery=mysqli_query($connect,$selectQuery);

$chakeCount= mysqli_num_rows($runQuery);

if($runQuery==true){
    if($chakeCount===1){
        setcookie("currentStudent",$email,time()+(86400*7));
        header("location:dashboard.php");

    }else{
        header('location:login.php?wrong');
    }
}



?>