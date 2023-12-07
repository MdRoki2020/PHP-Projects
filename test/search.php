<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="form-inline my-2 my-lg-0 mr-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search Area" name="searchLocation" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>



    <div>
        <?php
        $connect=mysqli_connect('localhost','root','','farm');
        if(isset($_REQUEST['searchLocation'])) {
            $searchItem = $_REQUEST['searchLocation'];
        }

            $selectQuery = "SELECT * FROM `information` WHERE `username` LIKE '%$searchItem%'";
            $runQuery = mysqli_query($connect, $selectQuery);


        while($row=mysqli_fetch_assoc($runQuery)){ ?>
            <div class="">
                    <p class="card-text"><b>UserName:</b><?php echo $row['username']?></p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>