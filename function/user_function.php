<?php
$connect = mysqli_connect("localhost","root","","bigbazi");

//function registration
function registration(){
  global $connect;
  $match = 1;
  if (isset($_POST['signup'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $email = $_POST['email'];
    $email = strtolower($email);

    $sel = "select user_email from user";
    $run_sel = mysqli_query($connect,$sel);

    while ($array = mysqli_fetch_array($run_sel)) {
      $match_email = $array['user_email'];

      if (strcmp($email,$match_email)==0) {
        $match = 0;
        echo "<div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Danger!</strong> This email is already taken! Try another one.:)
        </div>";
        break;
      }
    }

    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    if (strcmp($password,$c_password) == 1) {
      $match = 0;
      echo "<div class='alert alert-danger alert-dismissible'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
      <strong>Danger!</strong> Password incorrect!:)
      </div>";
    }

    $phone = $_POST['phone'];

    if (strlen($phone) != 11) {
      $match = 0;
      echo "<div class='alert alert-danger alert-dismissible'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
      <strong>Danger!</strong> Phone num not valid!:)
      </div>";
    }

    $sel = "select user_phone from user";
    $run_sel = mysqli_query($connect,$sel);

    while ($array = mysqli_fetch_array($run_sel)) {
      $match_phone = $array['user_phone'];

      if (strcmp($phone,$match_phone)==0) {
        $match = 0;
        echo "<div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Danger!</strong> This phone number is already taken! Try another one:)
        </div>";
        break;
      }
    }

    $address = $_POST['address'];

     if ($match == 1) {
       $insert = "insert into user (user_fname,user_lname,user_email,user_password,user_photo,user_phone,user_address)
       values ('$fname','$lname','$email','$password','','$phone','$address')";
       $run = mysqli_query($connect,$insert);

       echo "<div class='alert alert-success alert-dismissible'>
       <button type='button' class='close' data-dismiss='alert'>&times;</button>
       <strong>Success!</strong> SignUp Successfully:)<a class='btn-link text-success' href='login.php'> Login Now</a>
       </div>";
     }

  }
}

function login(){
  global $connect;
  $ip = getRealIpAddr();
  if (isset($_POST['login'])) {
    $email_phone = $_POST['email_phone'];
    $password = $_POST['password'];

    $check = "select * from user where (user_email='$email_phone' or user_phone='$email_phone')  and user_password='$password'";
    $run = mysqli_query($connect,$check);

    if (mysqli_num_rows($run)>0) {
      $_SESSION['email_phone'] = $email_phone;
      $user_id = user_id();

      $check_cart = "select * from cart where ip_add='$ip' and user_id='0'";
      $run_check_cart = mysqli_query($connect,$check_cart);
      if (mysqli_num_rows($run_check_cart)>0) {
        $update = "update cart set user_id='$user_id',ip_add='$user_id' where ip_add='$ip'";
        $run_update = mysqli_query($connect,$update);
      }
      echo "<script>window.open('index.php','_self')</script>";
      exit();
    }else {
      echo "<script>alert('Email or Phone or Password is incorrect!')</script>";
    }
  }
}

//function for uploading user profile photo
function upload_photo(){

  global $connect;

  if (isset($_POST['upload_photo'])) {

    @session_start();

    if (isset($_SESSION['email_phone'])) {
      $profile = $_SESSION['email_phone'];
      $sel = "select * from user where user_email='$profile' or user_phone='$profile'";
      $run = mysqli_query($connect,$sel);
      $array = mysqli_fetch_array($run);

      $id = $array['user_id'];

      $photo = $_FILES['photo']['name'];

      $temp_name1 = $_FILES['photo']['tmp_name'];

      move_uploaded_file($temp_name1,"user_images/$photo");

      $insert = "update user set user_photo='$photo' where user_id='$id'";
      $run_insert = mysqli_query($connect,$insert);

      if ($run_insert) {
        echo "<script>window.history.back();</script>";
      }
    }
  }
}





 ?>
