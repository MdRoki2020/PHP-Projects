<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        /* .imageWrapper {
        width: 803px;
        margin: auto;
        }

        .imageWrapper img {
            width: 100%;
        } */

        .imageWrapper {
        text-align: center;
        }

        .imageWrapper img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }
    </style>
  </head>
  <body>

    <?php
    if(isset($_COOKIE['visha_dataUserId'])){
        $visha_dataUserId=$_COOKIE['visha_dataUserId'];

    }

    $connect=mysqli_connect('localhost','root','','vishasearch');
    $selectQuery="SELECT * FROM `visha_data` WHERE `passportId`='$visha_dataUserId'";
    $runQuery=mysqli_query($connect,$selectQuery);
    $row=mysqli_fetch_assoc($runQuery);

    ?>


    <div class="imageWrapper text-center">
        <!-- <img src="image/form.jpg" alt="image"> -->
        <img class="img-fluid img-thumbnail" src="publisher/visha_images/<?php echo $row['photo']?>" alt=""/>
    </div>


    <?php
if(isset($_COOKIE['visha_dataUserId'])){
    $visha_dataUserId = $_COOKIE['visha_dataUserId'];

    $connect = mysqli_connect('localhost', 'root', '', 'vishasearch');
    $selectQuery1 = "SELECT * FROM `extravishaphotos` WHERE `passportId`='$visha_dataUserId'";
    $runQuery1 = mysqli_query($connect, $selectQuery1);
    ?>

    <div class=''>
        <?php
        while ($extrarow = mysqli_fetch_assoc($runQuery1)) {
            ?>
            <div class="imageWrapper text-center mt-3 ">
                <img class="img-fluid img-thumbnail" src="publisher/extra_Image_visha/<?php echo $extrarow['photo'] ?>" alt=''/>
            </div>
            <?php
        }
        ?>
    </div>

    <?php
    // Close the database connection after use
    mysqli_close($connect);
}
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>