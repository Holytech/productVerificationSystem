<?php
    $conn = mysqli_connect("localhost","root","","oraimo");

    $email = "akeemqudus2016@gmail.com";
    $username = "JS_Lover";
    $password = md5("javascript.js");
    $name = "Akeem Qudus";

    echo $password;

    // $sql = "INSERT INTO admin (email, username, password, name) VALUES ('$email', '$username', '$password', '$name') ";

    // mysqli_query($conn, $sql);


?>