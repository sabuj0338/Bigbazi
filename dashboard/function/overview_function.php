<?php
 $connect = mysqli_connect("localhost","root","","bigbazi");
@session_start();


//user cart table
function user_cart(){
  global $connect;

  $sel = "select * from user";
  $run = mysqli_query($connect,$sel);
  while ($array=mysqli_fetch_array($run)) {
    $user_id = $array['user_id'];
    $user_email = $array['user_email'];
    $user_name = $array['user_fname'];
    $user_phone = $array['user_phone'];

    $sel2 = "select * from cart where user_id='$user_id'";
    $run2 = mysqli_query($connect,$sel2);
    $total = mysqli_num_rows($run2);
    echo "<tr>
      <td>$user_name</td>
      <td>$user_email</td>
      <td>$user_phone</td>
      <td>$total</td>
    </tr>";
  }
}

//selecting total products
function t_pro(){
  global $connect;
  $count;

  $sel = "select * from products";
  $run = mysqli_query($connect,$sel);
  $count = mysqli_num_rows($run);
  echo $count;
}

//selecting total user
function t_user(){
  global $connect;
  $count;

  $sel = "select * from user";
  $run = mysqli_query($connect,$sel);
  $count = mysqli_num_rows($run);
  echo $count;
}

//selecting total cart
function t_cart(){
  global $connect;
  $count;

  $sel = "select * from cart";
  $run = mysqli_query($connect,$sel);
  $count = mysqli_num_rows($run);
  echo $count;
}

//selecting total active products
function active_pro(){
  global $connect;
  $count;

  $sel = "select * from products where status=1";
  $run = mysqli_query($connect,$sel);
  $count = mysqli_num_rows($run);
  echo $count;
}

//selecting total brands
function t_brand(){
  global $connect;
  $count;

  $sel = "select * from brand";
  $run = mysqli_query($connect,$sel);
  $count = mysqli_num_rows($run);
  echo $count;
}

//selecting total CATEGORY
function t_category(){
  global $connect;
  $count;

  $sel = "select * from category";
  $run = mysqli_query($connect,$sel);
  $count = mysqli_num_rows($run);
  echo $count;
}

//selecting total CATEGORY
function active_user(){
  global $connect;

  if (isset($_SESSION['email_phone'])) {
    echo "1 USER";
  }else {
    echo "0 USER";
  }
}












 ?>
