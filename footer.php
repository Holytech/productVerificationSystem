<?php
    $conn = mysqli_connect('localhost','root','','oraimo');
    if(isset($_POST['subscribe'])){
        $email = $_POST['email'];

        $sql = "INSERT INTO newsletter (email) VALUE ('$email') ";

        $query = mysqli_query($conn, $sql);

        if($query){
            echo "
                <script>
                    alert('You have succesfully subscribe to our newsletter');
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/oraimo.png" type="image/x-icon">
    <title>Oraimo</title>
</head>
<body>
    <footer class="bg-dark">
        <div class="container">
            <div class="row py-5 text-light">
                <div class="col-md-5">
                    <h5 class="title or-gr">Newsletter:::</h5>
                    <hr style="background-color: #83e600;">
                    <hr style="background-color: #83e600;">
                    <p>You can subscribe to our mailing list. You will always be updated with the latest news from us.</p>
                    <form method="POST" action="">
                        <div class="form-group form-group-no-border">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" placeholder="Enter Your email Address" required name="email">
                                <div class="input-group-append">
                                    <span class="input-group">
                                        <button  class="btn reg or-gr-b btn-block btn-round" name="subscribe">Subscribe</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p>SERVICE HOURS: Monday-Friday 9AM to 8PM</p>
                    <p>CUSTOMER SERVICE: +234 809 604 0753  +234 818 135 3103</p>
                    <p>Whatsapp: +234 901 627 9193  +234 701 761 8320</p>
                </div>
                <div class="col-md-2 offset-md-1">
                    <h5 class="title or-gr">About Oraimo:::</h5>
                    <hr style="background-color: #83e600;">
                    <hr style="background-color: #83e600;">
                    <p>
                        <a href="#">About Us</a>
                    </p>
                    <p>
                        <a href="#">Where to Buy</a>
                    </p>
                    <p>
                        <a href="#">Special Offer</a>
                    </p>
                </div>
                <div class="col-md-2">
                    <h5 class="title or-gr">Terms:::</h5>
                    <hr style="background-color: #83e600;">
                    <hr style="background-color: #83e600;">
                    <p>
                        <a href="#">Warranty</a>
                    </p>
                    <p>
                        <a href="#">Order & Shipping</a>
                    </p>
                    <p>
                        <a href="#">Replacement & Refund</a>
                    </p>
                    <p>
                        <a href="#">Terms & Conditions</a>
                    </p>
                    <p>
                        <a href="#">Privacy Policy</a>
                    </p>
                </div>
                <div class="col-md-2">
                    <h5 class="title or-gr">Get Help:::</h5>
                    <hr style="background-color: #83e600;">
                    <hr style="background-color: #83e600;">
                    <p>
                        <a href="#">Visit Carlcare</a>
                    </p>
                    <p>
                        <a href="#">Track Your Order</a>
                    </p>
                    <p>
                        <a href="#">Contact Us</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <footer class="footer-brand">
        <div class="row">
            <div class="col-md-12 text-center my-4">
                <img src="img/oraimo.png" alt="" height="100px">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mb-4 or-gr">
                &copy; 2022 oraimo. Copyright &copy; oraimo Technology (HK) Ltd
            </div>
        </div>
    </footer>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>