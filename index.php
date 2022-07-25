<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/oraimo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/custom.css">
    <title>Oraimo: Home</title>
</head>
<body>
    <?php
      include("header.php");
    ?>
    <section>
      <div class="row">
        <div class="col-md-12">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="first-slide img-fluid" src="img/banner9.jpeg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="second-slide img-fluid" src="img/banner4.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="third-slide img-fluid" src="img/banner7.jpeg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="fourth-slide img-fluid" src="img/banner8.jpeg" alt="Fourth slide">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="row">
        <div class="col-md-12">
          <img src="img/banner1.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </section>

    <section class="our-product container">
      <div class="row">
        <div class="col-md-12 mt-3"> 
          <h2 class="title text-center font-weight-bold">Our Products</h2>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-6">
          <img src="img/audio.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
          <img src="img/lifestyle.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="row my-4">
        <div class="col-md-6">
          <img src="img/power.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
          <img src="img/wearables.png" alt="" class="img-fluid">
        </div>
      </div>
    </section>

    <?php
      include("footer.php");
    ?>

    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>