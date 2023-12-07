<?php

$conn=mysqli_connect("localhost","root","","test");


$id=$_POST['id'];
// $email=$_POST['email'];


$delete="DELETE FROM `users` WHERE `id`= $id";

$runQuery=mysqli_query($conn,$delete);



if($runQuery==true){
    echo "Delete Done";
}






?>