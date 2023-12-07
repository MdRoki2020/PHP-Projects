
<?php
$connect=mysqli_connect("localhost","root","","test");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table class="my-4 px-3 table table-striped table table-bordered table table-hover table-responsive">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
            </thead>

            <?php
            $selectQuery="SELECT * FROM `users`";
            $runQuery=mysqli_query($connect,$selectQuery);
            while($row=mysqli_fetch_assoc($runQuery)){?>
                <tbody>
            <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
            </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
</body>
</html>