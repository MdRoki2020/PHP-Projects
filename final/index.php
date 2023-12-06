<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }

        .clild1 {
        border: 1px solid;
        width: 150px;
        text-align: center;
        padding: 11px 0px;
        margin: 0px 2px;
        }
        .wrapper {
        display: flex;
        }

    </style>
</head>
<body>


    <h3><ul>Form</ul></h3><br/>
    <?php

    if(isset($_REQUEST['right'])){
        echo '<b>Data Insert Done</b>';
    }

    ?>
    <form action="insertCore.php" method="post"><br/>
        <lebel> Product Name:</lebel><br/>
        <input type="text" name='productName'/><br/><br/>

        <lebel>Product Price</lebel><br/>
        <input type="number" name='productPrice'/><br/><br/>

        <lebel>Product tax</lebel><br/>
        <select name='productTax'>
            <option value="5">5 tk</option>
            <option value="6">6 tk</option>
            <option value="7">7 tk</option>
            <option value="8">8 tk</option>
            <option value="9">9 tk</option>
            <option value="10">10 tk</option>
        <!-- <input type="number" name='productTax'/><br/><br/> -->


        <button type="submit">Submit</button>
    </form>




    <h3>All Records</h3>

    <form action="" method="post">
        <input type="search" name="searchValue" placeholder="search with name"/><button>Search</button>
    </form>
    <table>
        <tr >
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Tax</th>
            <th>Price With Tax</th>
        </tr>
        <?php
        
        $connection=mysqli_Connect("localhost","root","","test");

        if(isset($_REQUEST['searchValue'])){
            $searchItem=$_REQUEST['searchValue'];
        }

        $selectQuery="SELECT productName,productPrice,productTax FROM `order` WHERE `productName` LIKE '%$searchItem%'";
        $runQuery=mysqli_query($connection,$selectQuery);

        while($row=mysqli_fetch_assoc($runQuery)){?>

        <?php
        $total=$row['productPrice']+$row['productTax'];
        ?>


        <tr style="border: 1px solid black;">
            <td><?php echo $row['productName']?></td>
            <td><?php echo $row['productPrice']?></td>
            <td><?php echo $row['productTax']?></td>
            <td><?php echo $total?></td>
        </tr>

        <?php
        }
        ?>

    </table>




    <h3>Practice</h3>

    <div class="wrapper">
        <div class="clild1">Clild 1</div>
        <div class="clild1">Clild 2</div>
        <div class="clild1">Clild 3</div>

    </div>
</body>
</html>
