<?php
$connect = mysqli_connect("localhost","root","","bigbazi");
include("function/cart_function.php");
@session_start();

function deliver_now(){
  global $connect;
  if (isset($_POST['deliver_now']) and isset($_SESSION['email_phone'])) {
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $date = $_POST['date'];

    $email_phone = $_SESSION['email_phone'];
    $select_id = "select user_id from user where user_phone='$email_phone' or user_email='$email_phone'";
    $run_user = mysqli_query($connect,$select_id);
    $array = mysqli_fetch_array($run_user);
    $user_id = $array['user_id'];

    $sel = "select * from cart where user_id='$user_id'";
    $run_sel = mysqli_query($connect,$sel);

    while ($array=mysqli_fetch_array($run_sel)) {
      $pro_id = $array['pro_id'];
      $qty = $array['qty'];

      $sel = "select price from products where pro_id='$pro_id'";
      $run = mysqli_query($connect,$sel);
      $array = mysqli_fetch_array($run);
      $price = $array['price'];

      // $sel_pro = "select pro_id from delivery where pro_id='$pro_id'";
      // $run_sel_pro = mysqli_query($connect,$sel_pro);
      //
      // if (mysqli_num_rows($run_sel_pro)>0) {
      //   echo "<div class='alert alert-danger alert-dismissible'>
      //   <button type='button' class='close' data-dismiss='alert'>&times;</button>
      //   <strong>Danger!</strong> This Product Is Already Orderd:)
      //   </div>";
      // }

      $insert_to_deliver = "insert into delivery (user_id,user_phone,user_add,deliver_date,pro_id,qty,price)
      values ('$user_id','$phone','$address','$date','$pro_id','$qty','$price')";

      $run_insert = mysqli_query($connect,$insert_to_deliver);

      if ($run_insert) {
        echo "<div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Success!</strong> Product Delivered Successfully:)
        </div>";

        $del = "delete from cart where pro_id='$pro_id'";
        $run_del = mysqli_query($connect,$del);
      }
    }

  }
}




function check_Ordered(){
  global $connect;
  if (isset($_SESSION['email_phone'])) {

    $email_phone = $_SESSION['email_phone'];
    $select_id = "select user_id from user where user_phone='$email_phone' or user_email='$email_phone'";
    $run_user = mysqli_query($connect,$select_id);
    $array = mysqli_fetch_array($run_user);
    $user_id = $array['user_id'];

    $sel = "select pro_id from cart where user_id='$user_id'";
    $run_sel = mysqli_query($connect,$sel);

    while ($array=mysqli_fetch_array($run_sel)) {
      $pro_id = $array['pro_id'];

      $sel_pro = "select pro_id from delivery where pro_id='$pro_id'";
      $run_sel_pro = mysqli_query($connect,$sel_pro);

      if (mysqli_num_rows($run_sel_pro)>0) {
        echo "<div class='alert alert-danger py-4 alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Danger!</strong> This Product Is Already Orderd:) If you want to order more of this product then move forward.
        </div>";
      }
    }

  }
}



 ?>
