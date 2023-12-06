<?php 

$connection=mysqli_Connect("localhost","root","","test");

if($connection==true){
    echo "connection is done";
}else{
    echo "somethis went wrong";
}





$ProductName=$_POST['productName'];
$productPrice=$_POST['productPrice'];
$ProductTax=$_POST['productTax'];


$insertQuery="INSERT INTO `order`(`productName`,`productPrice`,`productTax`)VALUES('$ProductName','$productPrice','$ProductTax')";

$runQuery=mysqli_query($connection,$insertQuery);


if($runQuery){
    header('location:index.php?right');
}else{
    echo "Something Went Wrong Please Try Again Later";
}

// if($runQuery==true){
//     echo "Data insert Done";
// }else{
//     echo "something went wrong";
// }


?>