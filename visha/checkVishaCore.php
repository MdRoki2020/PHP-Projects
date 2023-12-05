<?php
$connect=mysqli_connect('localhost','root','','vishasearch');

$password=$_REQUEST['password'];
$id=$_REQUEST['id'];


$selectQuery=" SELECT * FROM `visha_data` WHERE passportId='$password' AND id='$id' ";

$runQuery=mysqli_query($connect,$selectQuery);

$chakeCount= mysqli_num_rows($runQuery);

if($runQuery==true){
    if($chakeCount===1){
        setcookie("visha_dataUserId",$password,time()+(86400*7));
        header("location:userVishaProfile.php");

    }else{
        header('location:checkVisha.php?wrongUserVisha');
    }
}

?>