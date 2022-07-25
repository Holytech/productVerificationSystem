<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","oraimo");

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $password = md5($pass);

        $sql = "SELECT * FROM admin WHERE email='$email' AND  password='$password' ";

        $query = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($query)<1){
			echo 'ADMIN DOES NOT EXIST';
		}
		else{
			$row = mysqli_fetch_assoc($query);
			$_SESSION['name'] = $row['name'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['username'] = $row['username'];
            header('location: dashboard.php');
		}
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        unset($_SESSION['name']);
        header('location: index.php');
    }
?>