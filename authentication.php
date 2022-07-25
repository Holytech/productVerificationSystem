<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/oraimo.png" type="image/x-icon">
    <title>Oraimo: Authentication</title>
    <style>
      input{
        width: 100px;
      }
    </style>
</head>
<body>
    <?php
      include("header.php");
    ?>

    <main class="auth-main text-center pt-5">
      <h3 class="font-weight-bold">Oraimo Product Authentication</h3>
      <div class="row mt-5">
        <div class="col-md-6 offset-3">
          <form action="" method="post">
            <div class="row">
              <div class="col-md-2 offset-md-2">
                <div class="input-group mb-3">
                  <input type="text" class="form-control text-center" placeholder="XXXX" name="ver_number1" id="ver_number1" maxlength="4">
                </div>
              </div>
              <div class="col-md-2">
                <div class="input-group mb-3">
                  <input type="text" class="form-control text-center" placeholder="XXXX" name="ver_number2" id="ver_number2" maxlength="4">
                </div>
              </div>
              <div class="col-md-2">
                <div class="input-group mb-3">
                  <input type="text" class="form-control text-center" placeholder="XXXX" name="ver_number3" id="ver_number3" maxlength="4">
                </div>
              </div>
              <div class="col-md-2">
                <div class="input-group mb-3">
                  <input type="text" class="form-control text-center" placeholder="XXXX" name="ver_number4" id="ver_number4" maxlength="4">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success mt-4 btn-block btn-lg" name="verify">VERIFY</button>
          </form>
        </div>
      </div>
      <div class="row my-5">
        <div class="col-md-8 offset-2">
          <p class="or-gr" style="font-size: 20px">
            * Please scratch the coating of the sticker on your product package and enter the 16 digits or letters to check the authentication.
          </p>
        </div>
      </div>
      
      <div class="container py-5">
        <div class="row">
          <?php
            $conn = mysqli_connect('localhost','root','','oraimo');

            if(isset($_POST['verify'])){
              $ver_num = $_POST['ver_number1']."-".$_POST['ver_number2']."-".$_POST['ver_number3']."-".$_POST['ver_number4'];

              // echo $ver_num;

              $sql = "SELECT * FROM product WHERE verification_num='$ver_num' ";

              $result = mysqli_query($conn, $sql);
              if(!empty($result)){
                while($row = mysqli_fetch_assoc($result)){
                  echo "
                    <div class='col-md-3'>
                      <img src='admin/products/".$row['image']."' class='img-fluid'>
                    </div>
                    <div class='col-md-9'>
                      <h2 class='title'>".$row['name']."</h2>
                      <p>
                        ".$row['description']."
                      </p>  
                    </div>

                  ";
                }
              }
              else{
                echo "
                  <div class='col-md-8 offset-md-2'>
                    <h2 class='title text-center'> NO RECORDS FOUND </h2>
                    <p class='lead'>
                      This product was not found in our database, kindly report this <a href='complain.php'> here</a>
                    </p>
                  </div>
                ";
              }
            }
          ?>
        </div>
      </div>
    </main>

    <?php
      include("footer.php");
    ?>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>