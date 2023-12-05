<?php
$connect=mysqli_connect('localhost','root','','vishasearch');

if(isset($_REQUEST['submit'])){

    $passportId=$_REQUEST['passportId'];
    $photo=$_REQUEST['photo'];

    $photo=explode(".",$_FILES["photo"]["name"]);
    $photo=end($photo);
    $photo_name=rand().".".$photo;

    $insertQuery="INSERT INTO `extraVishaphotos`(`passportId`,`photo`) VALUES ('$passportId','$photo_name')";
    $runQuery=mysqli_query($connect,$insertQuery);

    if($runQuery){
        move_uploaded_file($_FILES['photo']['tmp_name'],'extra_Image_visha/'.$photo_name);
    }

    if($runQuery){
        header("location:publisher_zone.php?extraVishaImageDone");
    }else{
        echo "Do Not Insert Data";
    }
}


?>