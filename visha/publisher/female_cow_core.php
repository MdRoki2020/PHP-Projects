<?php
$connect=mysqli_connect('localhost','root','','vishasearch');

if(isset($_REQUEST['submit'])){
    $category=$_REQUEST['visha'];
    $name=$_REQUEST['name'];
    $passportId=$_REQUEST['passportId'];
    $photo=$_REQUEST['photo'];

    $photo=explode(".",$_FILES["photo"]["name"]);
    $photo=end($photo);
    $photo_name=rand().".".$photo;

    $insertQuery="INSERT INTO `visha_data`(`category`,`name`,`passportId`,`photo`) VALUES ('$category','$name','$passportId','$photo_name')";
    $runQuery=mysqli_query($connect,$insertQuery);

    if($runQuery){
        move_uploaded_file($_FILES['photo']['tmp_name'],'visha_images/'.$photo_name);
    }

    if($runQuery){
        header("location:publisher_zone.php?bachelorRight");
    }else{
        echo "Do Not Insert Data";
    }
}


?>