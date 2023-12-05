<?php
session_start();
require_once('config.php');
if(!isset($_COOKIE['currentStudent'])){
    header('location:login.php');
}
if(isset($_COOKIE['currentStudent'])){
    $crntstudent=$_COOKIE['currentStudent'];
}
?>
<?php
include_once('includes/header_links.php');
?>

<!-- body css -->
<link rel="stylesheet" href="css/dashboard.css">

<title>Munem Academy</title>
</head>
<body>

<?php
$selectQuery="SELECT * FROM `resister_students` WHERE `email`='$crntstudent'";
$runQuery=mysqli_query($connect,$selectQuery);
$row=mysqli_fetch_assoc($runQuery);
?>

<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand mainbox" href="#" onclick="openfunction()"><i class="fas fa-bars"></i></a>
        <a class="navbar-brand ml-auto" href="#"><?php echo $row['first_name']?> <i class="fas fa-user-circle"></i></a>
    </nav>
    <div id='menu' class='sidemenu'>

        <a href="index.php">Study <i class="fas fa-graduation-cap"></i></a>
        <a href="dashboard.php">Dashboard <i class="fas fa-tachometer-alt"></i></a>
        <a href="user_profile.php">Profile <i class="fas fa-user-circle"></i></a>
        <a href="student_logout core.php">Logout <i class="fas fa-sign-out-alt"></i></a>
        <a href="#" class='closebtn' onclick="closefunction()">&times;</a>

    </div>
</header>

    <div class="title">
        <h3 class="text-center">Dashboard</h3>
    </div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="paymentBar">
                    <h1 class="text-center">5000৳</h1>
                    <p class="text-center">Payment</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="paymentBar2">
                    <h1 class="text-center">10000৳</h1>
                    <p class="text-center">Total</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="paymentBar3">
                    <h1 class="text-center">1000৳</h1>
                    <p class="text-center">Others</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-fluid" src="images/comments.png"/>
                </div>
                <div class="col-sm-6">
                    <img class="img-fluid" src="images/temperature.png"/>
                </div>
            </div>
        </div>
    </div>
</section>

 <footer class="footerClass">
    <div class="container">
        <p>&copy; Copy right Munem Shahriar 2021</p>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="script.js"></script>
<script src="innerbar.js"></script>
</body>
</html>