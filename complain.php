<?php
  $conn = mysqli_connect('localhost','root','','oraimo');
  if(isset($_POST['complain'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $product_name = $_POST['product_name'];
    $point_of_pur = $_POST['point_of_pur'];
    $date_of_pur = $_POST['date_of_pur'];

    $dir = "admin/evidence/";

    $target_image = $dir.basename($_FILES['evidence_of_pay']['name']);
    $evidence_of_pay = $_FILES['evidence_of_pay']['name'];

    $sql = "INSERT INTO complaint (name, email, product_name, point_of_pur, date_of_pur, evidence_of_pay) VALUES ('$name', '$email', '$product_name', '$point_of_pur', '$date_of_pur', '$evidence_of_pay') ";

    $query = mysqli_query($conn, $sql);
      if($query){
        move_uploaded_file($_FILES['evidence_of_pay']['tmp_name'], $target_image);

        echo "
          <script>
            alert('Complaint successfully submitted');
          </script>
        ";
        header("location: index.php");
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/oraimo.png" type="image/x-icon">
    <title>Oraimo: Complaint Page</title>
</head>
<body>

    <section class="container pb-5">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form action="" class="" method="POST" enctype="multipart/form-data" role="form">
            <h5 class="title text-center my-5">Kindly fill this form, for us to be able to help you.</h5>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="">Name</span>
                </div>
                <input type="text" class="form-control" placeholder="Enter buyer's name in full" name="name" id="name" >
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="">E-mail</span>
                </div>
                <input type="email" class="form-control" placeholder="Enter an email we can contact you through" name="email" id="email" >
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="">Product Name</span>
                </div>
                <input type="text" class="form-control" placeholder="Enter the name of the product you bought" name="product_name" id="product_name" >
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="">Point of purchase</span>
                </div>
                <input type="text" class="form-control" placeholder="Give a full description of where you bought the product" name="point_of_pur" id="point_of_pur" >
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="">Date of purchase</span>
                </div>
                <input type="date" class="form-control" placeholder="What date did you buy thus product" name="date_of_pur" id="date_of_pur" >
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="">Evidence of payment</span>
                </div>
                <input type="file" class="form-control" placeholder="Attach an evidence of payment" name="evidence_of_pay" id="evidence_of_pay" >
              </div>

              <div class="row mt-5">
                <div class="col-md-4">
                  <input type="submit" value="Submit Complaint" class="input-group bg-success btn btn-block" name="complain">
                </div>

                <div class="col-md-3 offset-md-5">
                  <input type="button" value="Reset" class="input-group bg-danger btn btn-block" onClick="resetComplaintInput()">
                </div>
              </div>
          </form>
        </div>
      </div>
    </section>  

    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>