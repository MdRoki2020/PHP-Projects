<?php
// $connect=mysqli_connect('localhost','root','','visha');
// $connect=mysqli_connect('localhost','root','','hamba');

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];


if($email=="shakil@gmail.com" && $password=="ABCD1234@@"){
    setcookie("currentUser",$email,time()+(86400*7));
    header("location:publisher_zone.php");
}else{
    header('location:logintrue.php?wrong');
}


// $selectQuery=" SELECT * FROM `registered_user` WHERE email='$email' AND password='$password' ";

// $runQuery=mysqli_query($connect,$selectQuery);

// $chakeCount= mysqli_num_rows($runQuery);

// if($runQuery==true){
//     if($chakeCount===1){
//         setcookie("currentUser",$email,time()+(86400*7));
//         header("location:publisher_zone.php");

//     }else{
//         header('location:publisherLogin.php?wrong');
//     }
// }

?>