<?php
  include("log.php");
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
    <title>Oraimo: Admin Log In Page</title>
</head>
<body>
    <section class="row text-center admin-form">
        <form class="form-signin" method="POST" >
          <img class="mb-4" src="../img/oraimo.png" alt="" width="150">
          <h1 class="h3 mb-3 font-weight-normal">Log In</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
          <button class="btn btn-lg btn-primary btn-block mt-4" type="submit"name="login">Sign in</button>
        </form>
    </section>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>