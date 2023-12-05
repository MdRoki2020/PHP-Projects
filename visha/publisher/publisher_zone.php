<?php
session_start();
require_once('../include/links.php');
?>
<?php
if(!isset($_COOKIE['currentUser'])){
    header('location:logintrue.php');
}

if(isset($_COOKIE['currentUser'])){
    $crntUser=$_COOKIE['currentUser'];
}
?>

<link rel="stylesheet" href="css/publisherZone.css"/>
<title>Publisher-zone</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php">Visha</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="email mr-auto">
            </div>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="logoutCore.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<section class="wrapper">
    <div class="container">
        <div class="row animate__animated animate__zoomIn">
            <div class="col-md-6">
                <div class="singleAddFlat">
                    <h3>Add Forms</h3>
                    <div class="text-center text-success">
                        <?php
                        if(isset($_REQUEST['familyRight'])){
                            echo "Your Data Insert Successfully !";
                        }
                        ?>
                    </div>
                    <form action="male_cow_core.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="product_category">Category *</label>
                            <select class="form-control" name="forms" required>
                                <option value="forms">FROMS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_title">Name *</label>
                            <input type="text" class="form-control" id="product_title" placeholder="Enter Your Name" name="name" required/>
                        </div>
                        <div class="form-group">
                            <label for="product_price">Passport ID *</label>
                            <input type="text" class="form-control" id="product_price" placeholder="Enter Passport ID" name="passportId" required/>
                        </div>
                        <div class="form-group">
                            <label for="photo">Form Photo *</label>
                            <input type="file" class="form-control" id="photo" placeholder="Enter photo" name="photo" required />
                        </div>
                        <button type="submit" class="btn btn-primary form-control" value="submit" name="submit">Add Data</button>
                    </form>
                </div>



                    <div class="extraImageWrapper">
                    <div class="text-center text-success">
                        <?php
                        if(isset($_REQUEST['extraImageDone'])){
                            echo "Your Extra Image Insert Successfully !";
                        }
                        ?>
                    </div>
                    <form action="extraImageFormCore.php" method="post" enctype="multipart/form-data">
                        <div class="passportId">
                            <lebel>Passport Id</lebel>
                            <input type="text" class="form-control" name="passportId"/>
                        </div>
                        <div class="extraImage">
                            <lebel>Extra Image</lebel>
                            <input type="file" class="form-control" id="photo" placeholder="Enter photo" name="photo" required />
                        </div>
                        <button type="submit" class="btn btn-primary form-control" value="submit" name="submit">Add Extra Image</button>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="singleAddFlat">
                    <h3>Add Visha</h3>
                    <div class="text-center text-success">
                        <?php
                        if(isset($_REQUEST['bachelorRight'])){
                            echo "Your Female Cow Insert Successfully !";
                        }
                        ?>
                    </div>
                    <form action="female_cow_core.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="product_category">Category *</label>
                            <select class="form-control" name="visha" required>
                                <option value="visha">Visha Check</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_title">Name *</label>
                            <input type="text" class="form-control" id="product_title" placeholder="Enter Your Name" name="name" required/>
                        </div>
                        <div class="form-group">
                            <label for="product_price">Passport ID *</label>
                            <input type="text" class="form-control" id="product_price" placeholder="Enter PassportID" name="passportId" required/>
                        </div>
                        <div class="form-group">
                            <label for="photo">Form Photo *</label>
                            <input type="file" class="form-control" id="photo" placeholder="Enter Room photo" name="photo" required />
                        </div>
                        <button type="submit" class="btn btn-primary form-control" value="submit" name="submit">Add Data</button>
                    </form> 
                </div>

                <div class="extraImageWrapper">
                    <div class="text-center text-success">
                        <?php
                        if(isset($_REQUEST['extraVishaImageDone'])){
                            echo "Your Extra Image Insert Successfully !";
                        }
                        ?>
                    </div>

                    <form action="extraImageVishaCore.php" method="post" enctype="multipart/form-data">
                        <div class="passportId">
                            <lebel>Passport Id</lebel>
                            <input type="text" class="form-control" name="passportId"/>
                        </div>
                        <div class="extraImage">
                            <lebel>Extra Image</lebel>
                            <input type="file" class="form-control" id="photo" placeholder="Enter photo" name="photo" required />
                        </div>
                        <button type="submit" class="btn btn-primary form-control" value="submit" name="submit">Add Extra Image</button>
                    </form>
            </div>
        </div>
    </div>
</section>