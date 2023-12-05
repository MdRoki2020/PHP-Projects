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
<link rel="stylesheet" href="css/all_students.css">

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
                    <a href="admin_dashboard.php" class="list-group-item list-group-item-action " aria-current="true"><i class="fas fa-chart-line"></i> Dashboard</a>
                    <a href="post.php" class="list-group-item list-group-item-action " aria-current="true"><i class="fas fa-video"></i> Post Video</a>
                    <a href="post_notice.php" class="list-group-item list-group-item-action"><i class="fas fa-flag-checkered"></i> Post Notice</a>
                    <a href="all_students.php" class="list-group-item list-group-item-action "><i class="fa fa-user"></i> All Students</a>
                    <a href="edit_students.php" class="list-group-item list-group-item-action active"><i class="fas fa-edit"></i> Edit Students</a>
                </div>
            </div>
            <div class="col-sm-9">
                <h2 class="text-primary"><i class="fas fa-edit"></i> Edit Students <small>Edit Students Overview</small></h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Edit Students</li>
                </ol>


                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">F_Name</th>
                        <th scope="col">L_Name</th>
                        <th scope="col">Birth</th>
                        <th scope="col">Address</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Blood</th>
                        <th scope="col">Phone</th>
                        <th scope="col">LG_Num</th>
                        <th scope="col">College</th>
                        <th scope="col">Email</th>
                        <th scope="col">About</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Reg_Time</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $showDataQuery=mysqli_query($connect,"SELECT * FROM `resister_students`");
                    while($row = mysqli_fetch_assoc($showDataQuery)){?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['first_name']?></td>
                            <td><?php echo $row['last_name']?></td>
                            <td><?php echo $row['date_of_birth']?></td>
                            <td><?php echo $row['address']?></td>
                            <td><?php echo $row['gender']?></td>
                            <td><?php echo $row['blood_group']?></td>
                            <td><?php echo $row['phone_num']?></td>
                            <td><?php echo $row['local_guardian_num']?></td>
                            <td><?php echo $row['college']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['about_you']?></td>
                            <td><img style="width:100px" src="user_photo/<?php echo $row['picture'];?>"/></td>
                            <td><?php echo $row['submit_time']?></td>
                            <td>
                                <a href="update_students.php?id=<?php echo base64_encode($row['id']);?>" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a onclick="myFunction()" href="delete_student core.php?id=<?php echo base64_encode($row['id']);?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                            </td>
                        </tr>

                        <?php
                    }
                    ?>

                    </tbody>
                </table>


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
<script>
    function myFunction() {
        alert("Are You Sure? Delete This User !!");
    }
</script>
</body>
</html>