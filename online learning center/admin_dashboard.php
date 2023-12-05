<?php
session_start();
require_once("config.php");
if(!isset($_COOKIE["currentUser"])){
    header("location:admin.php");
}
?>
<?php
include_once('includes/header_links.php');
?>
<!-- body css -->
<link rel="stylesheet" href="css/admin_dashboard.css">

<title>Munem Academy</title>
</head>
<body>


<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Munem Academy <i class="fas fa-book-open"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="index.php">Study <i class="fas fa-graduation-cap"></i><span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-primary" href="admin.php">Admin <i class="fas fa-users-cog"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout core.php">logout <i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">

                <div class="list-group">
                    <a href="admin_dashboard.php" class="list-group-item list-group-item-action active" aria-current="true"><i class="fas fa-chart-line"></i> Dashboard</a>
                    <a href="post.php" class="list-group-item list-group-item-action" aria-current="true"><i class="fas fa-video"></i> Post Video</a>
                    <a href="post_notice.php" class="list-group-item list-group-item-action"><i class="fas fa-flag-checkered"></i> Post Notice</a>
                    <a href="all_students.php" class="list-group-item list-group-item-action "><i class="fa fa-user"></i> All Students</a>
                    <a href="edit_students.php" class="list-group-item list-group-item-action"><i class="fas fa-edit"></i> Edit Students</a>
                </div>

                <?php

                $count_student=mysqli_query($connect,"SELECT * FROM `resister_students` ");
                $total_student=mysqli_num_rows($count_student);

                ?>

            </div>
            <div class="col-sm-3">
                <div class="Bar">
                    <h1 class="text-center"><?php echo $total_student ?></h1>
                    <p class="text-center"><i class="fas fa-users"></i> Total Register Students</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="Bar2">
                    <h1 class="text-center">Not Available</h1>
                    <p class="text-center">Unknown</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="Bar3">
                    <h1 class="text-center">Not Available</h1>
                    <p class="text-center">Unknown</p>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <img class="img-fluid" src="images/admin_graph1.png"/>
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
</body>
</html>