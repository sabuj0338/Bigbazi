<?php
$connect = mysqli_connect("localhost","root","","bigbazi");


function admin_login(){
  global $connect;

  if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = "select * from admin where admin_email='$email' and admin_password='$password'";
    $run = mysqli_query($connect,$check);

    if (mysqli_num_rows($run)>0) {
      $_SESSION['email'] = $email;
      echo "<script>window.open('index.php','_self')</script>";
      exit();
    }else {
      echo "<script>alert('Email or Password is incorrect!')</script>";
    }
  }
}


 ?>
