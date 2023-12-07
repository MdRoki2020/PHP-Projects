<?php

$conn=mysqli_connect("localhost","root","","test");


// $name=$_POST['name'];
// $email=$_POST['email'];

if(isset($_REQUEST['id'])){
    $id= $_REQUEST['id'];
}


// $insert="INSERT INTO `users`(`name`, `email`) VALUES ('$name','$email')";

$update="UPDATE `users` SET `name`='mizan',`email`='noor@gmail.com' WHERE $id";

$runQuery=mysqli_query($conn,$update);



if($runQuery==true){
    echo "update Done";
}






?>