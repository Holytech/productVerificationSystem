<?php
    include("log.php");

    if(empty($_SESSION['username'])){
        header('location: index.php');
    }

    if(isset($_POST['submit'])){
      $name = $_POST['fName']." ".$_POST['lName'];
      $email = $_POST['email'];
      $password = md5($_POST['password']);
      $username = $_POST['username'];

      $sql = "INSERT INTO admin (email, username, password, name) VALUES ('$email', '$username', '$password', '$name') ";

      $query = mysqli_query($conn, $sql);
      if($query){
        echo "
          <script>
            alert('Admin Successfully added');
          </script>
        ";
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="shortcut icon" href="../img/oraimo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Oraimo: Admin Dashboard</title>
</head>
<body>
    <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="../img/oraimo.png" alt="">
        <span class="d-none d-lg-block">
            <?php
                echo $_SESSION['name'];
            ?>
        </span>
      </a>
      <i class="fa fa-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard.php">
          <i class="fa fa-tachometer"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="addAdmin.php">
          <i class="fa fa-user-plus"></i>
          <span>Add Admin</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="viewAdmin.php">
          <i class="fa fa-users"></i>
          <span>View Admins</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="addProduct.php">
          <i class="fa fa-plus"></i>
          <span>Add Product</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="viewProduct.php">
          <i class="fa fa-folder-open"></i>
          <span>View Products</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="viewComplaints.php">
          <i class="fa fa-question"></i>
          <span>View Complaints</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="log.php?logout">
          <i class="fa fa-lock"></i>
          <span>Log Out</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->

  <main class="main" id="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">Add Admin</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->   

        <section class="section dashboard">
          <div class="col-md-8 offset-md-2">
            <form action="" class="" method="POST">
              <h5 class="title text-center my-4">Fill the form with the details of the new admin</h5>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="">First and last name</span>
                </div>
                <input type="text" class="form-control" placeholder="First name" name="fName" id="fName" required>
                <input type="text" class="form-control" placeholder="Last name" name="lName" id="lName" required>
              </div>
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Enter admin's email address" name="email" id="email" required>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter admin's username" name="username" id="username" required>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Enter admin's password" name="password" id="password" required>
              </div>
              
              <div class="row">
                <div class="col-md-3">
                  <input type="submit" value="Submit" class="input-group bg-success btn btn-block" name="submit">
                </div>

                <div class="col-md-3 offset-md-6">
                  <input type="button" value="Reset" class="input-group bg-danger btn btn-block" onClick="resetAdminInput()">
                </div>
              </div>

            </form>
          </div>
        </section>
  </main>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/custom.js"></script>
</body>
</html>