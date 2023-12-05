<?php
session_start();
?>
<?php
include_once('includes/header_links.php');
?>

    <!-- body css -->
    <link rel="stylesheet" href="css/admin.css">

    <title>Munem Academy</title>

</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand" href="index.php">Munem Academy <i class="fas fa-book-open"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav  ml-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Study <i class="fas fa-graduation-cap"></i> <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="notice.php">Notice <i class="fas fa-flag-checkered"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Student Portal <i class="fas fa-user-graduate"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-primary" href="#">Admin <i class="fas fa-users-cog"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
</header>
    <section class="signupSection">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">

                    <div class="loginform">
                        <div class="text-center mt-2"><h3>Admin Login</h3></div>
                        <div class="popupMsz">
                            <?php
                            if(isset($_REQUEST['wrong'])){
                                echo "Wrong Email Or Password";
                            }
                            ?>
                        </div>
                        <form action="admin core.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" class="form-control btn btn-primary mt-3"><i class="fas fa-sign-in-alt"></i> Login</button>
                        </form>
                    </div>

                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </section>
<footer class="footerClass navbar fixed-bottom">
    <div class="container">
        <p>&copy; Copy right Munem Shahriar 2021 <span class="ml-4">Design By <a href="http://rsroki.info/index.php">Rs Roki</a></span></p>
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