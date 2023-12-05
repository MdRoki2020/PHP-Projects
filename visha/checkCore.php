<?php
$connect=mysqli_connect('localhost','root','','vishasearch');

$password=$_REQUEST['password'];
$id=$_REQUEST['id'];


$selectQuery=" SELECT * FROM `forms_data` WHERE passportId='$password' AND id='$id' ";

$runQuery=mysqli_query($connect,$selectQuery);

$chakeCount= mysqli_num_rows($runQuery);

if($runQuery==true){
    if($chakeCount===1){
        setcookie("forms_dataUserId",$password,time()+(86400*7));
        header("location:userProfile.php");

    }else{
        header('location:check.php?wrongUser');
    }
}

?>