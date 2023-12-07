<?php

$conn=mysqli_connect("localhost","root","","test");


$name=$_POST['name'];
$email=$_POST['email'];


$insert="INSERT INTO `users`(`name`, `email`) VALUES ('$name','$email')";

$runQuery=mysqli_query($conn,$insert);



if($runQuery==true){
    echo "Registration Done";
}






?>