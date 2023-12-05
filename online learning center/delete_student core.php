<?php
require_once("config.php");

if(isset($_REQUEST['id'])){
    $id=base64_decode($_REQUEST['id']);

    $deleteQuery=mysqli_query($connect,"DELETE FROM `resister_students` WHERE `id`=$id");

    if($deleteQuery==true){
        header("location:edit_students.php");
    }
}

?>