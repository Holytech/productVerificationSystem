<?php
    include("log.php");

    if(empty($_SESSION['username'])){
        header('location: index.php');
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
        <a class="nav-link collapsed" href="addAdmin.php">
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
        <a class="nav-link" href="viewProduct.php">
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
                <li class="breadcrumb-item active">View Produtcs</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->   
        <section class="section dashboard">
          <div class="col-12">
            <h5 class="title">Product in the system</h5>
                    <table class='table table-hover'>
                        <thead>
                            <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Name</th>
                            <th scope='col'>Product Description</th>
                            <th scope='col'>Verification Number</th>
                            <th scope='col'>Added By</th>
                            <th scope='col'>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                  <?php
                    $sn = 0;
                    $sql = "SELECT * FROM product";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_assoc($result)){
                          echo"
                              <tr>
                                  <td>"; echo $sn+=1; echo "</td>
                                  <td>".$row['name']."</td>
                                  <td>".$row['description']."</td>
                                  <td>".$row['verification_num']."</td>
                                  <td>".$row['added_by']."</td>
                                  <td> <img src='products/".$row['image']."' class='img-fluid'></td>
                              </tr>
                          ";
                      }
                    }
                    else{
                        echo"
                            <h2 class='title'> NO RECORDS FOUND</h2>
                        ";
                    }
                    echo"
                              </tbody>
                          </table>
                      ";
                  ?>
          </div>
        </section>
  </main>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/custom.js"></script>
</body>
</html>