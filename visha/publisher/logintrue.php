<?php
session_start();
require_once('../include/links.php');
?>
<link rel="stylesheet" href="css/publisherLogin.css"/>
<title>Publisher-Login</title>
</head>
<body>
    <section>
        <div class="container mb-4">
            <h3 class="main-heading animate__animated animate__flipInX">Publisher Login</h3>
            <div class="underline"></div>
        </div>
    </section>

    <section class="loginBoxWrapper">
        <div class="container">
            <div class="row animate__animated animate__zoomIn">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="login">
                        <h3>Login</h3>
                        <p>Login To Your Account</p>
                        <div class="text-center text-danger font-weight-bold">
                            <?php
                            if(isset($_REQUEST['wrong'])){
                                echo' Email Or Password Wrong <i class="fa-solid fa-face-frown"></i> ';
                            }
                            ?>
                        </div>
                        <form action="publisherLoginCore.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary form-control">Login</button>
                        </form>
                    </div>
                    <div class="loginContains">
                        <p class="text-center">Privacy Policy Tearms Of Use</p>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
