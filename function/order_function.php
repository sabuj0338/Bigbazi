<?php
$connect = mysqli_connect("localhost","root","","bigbazi");

function user_id(){
  global $connect;
  if (isset($_SESSION['email_phone'])) {
    // code...
    $email_phone = $_SESSION['email_phone'];
    $select_id = "select user_id from user where user_phone='$email_phone' or user_email='$email_phone'";
    $run_user = mysqli_query($connect,$select_id);
    $array = mysqli_fetch_array($run_user);
    $user_id = $array['user_id'];

    return $user_id;
  }
}


function order_now(){
  global $connect;
  if (isset($_POST['order_now']) and isset($_SESSION['email_phone'])) {
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $deliver_date = $_POST['date'];

    $user_id = user_id();

    $sel_orders = "select user_id from orders where user_id='$user_id'";
    $run_sel_orders = mysqli_query($connect,$sel_orders);

    if (mysqli_num_rows($run_sel_orders)>0) {
      $update_orders = "update orders set user_phone='$phone',user_add='$address',order_date=NOW(),deliver_date='$deliver_date' where user_id='$user_id'";
      $run_update_orders = mysqli_query($connect,$update_orders);

      $sel = "select * from cart where user_id='$user_id'";
      $run_sel = mysqli_query($connect,$sel);

      while ($array=mysqli_fetch_array($run_sel)) {
        $pro_id = $array['pro_id'];
        $qty = $array['qty'];

        $sel = "select price from products where pro_id='$pro_id'";
        $run = mysqli_query($connect,$sel);
        $array = mysqli_fetch_array($run);
        $price = $array['price'];

        $insert_pro_order = "insert into user_ordered_products (user_id,pro_id,price,qty)
                              values ('$user_id','$pro_id','$price','$qty')";
        $run_insert_pro_order = mysqli_query($connect,$insert_pro_order);

        $sel_pro_title = "select title from products where pro_id='$pro_id'";
        $run_sel_pro_title = mysqli_query($connect,$sel_pro_title);
        $array2=mysqli_fetch_array($run_sel_pro_title);
        $pro_title = $array2['title'];
        $pro_title = substr($pro_title,0,18);

        if ($run_insert_pro_order) {
          echo "<div class='alert alert-success alert-dismissible'>
          <button type='button' class='close' data-dismiss='alert'>&times;</button>
          <strong>Success!</strong> <b><mark>$pro_title</mark></b> Ordered Successfully:)
          </div>";

          $del = "delete from cart where pro_id='$pro_id' and user_id='$user_id'";
          $run_del = mysqli_query($connect,$del);
        }
      }
    }else {
      $insert_orders = "insert into orders (user_id,user_phone,user_add,order_date,deliver_date)
                        values ('$user_id','$phone','$address',NOW(),'$deliver_date')";
      $run_insert_orders = mysqli_query($connect,$insert_orders);

      $sel = "select * from cart where user_id='$user_id'";
      $run_sel = mysqli_query($connect,$sel);

      while ($array=mysqli_fetch_array($run_sel)) {
        $pro_id = $array['pro_id'];
        $qty = $array['qty'];

        $sel = "select price from products where pro_id='$pro_id'";
        $run = mysqli_query($connect,$sel);
        $array = mysqli_fetch_array($run);
        $price = $array['price'];

        $insert_pro_order = "insert into user_ordered_products (user_id,pro_id,price,qty)
                              values ('$user_id','$pro_id','$price','$qty')";
        $run_insert_pro_order = mysqli_query($connect,$insert_pro_order);

        $sel_pro_title = "select title from products where pro_id='$pro_id'";
        $run_sel_pro_title = mysqli_query($connect,$sel_pro_title);
        $array2=mysqli_fetch_array($run_sel_pro_title);
        $pro_title = $array2['title'];
        $pro_title = substr($pro_title,0,18);

        if ($run_insert_pro_order) {
          echo "<div class='alert alert-success alert-dismissible'>
          <button type='button' class='close' data-dismiss='alert'>&times;</button>
          <strong>Success!</strong> <b><mark>$pro_title</mark></b> Ordered Successfully:)
          </div>";

          $del = "delete from cart where pro_id='$pro_id' and user_id='$user_id'";
          $run_del = mysqli_query($connect,$del);
        }
      }
    }




  }
}




function check_Ordered(){
  global $connect;
  if (isset($_SESSION['email_phone'])) {

    $user_id = user_id();

    $sel = "select pro_id from cart where user_id='$user_id'";
    $run_sel = mysqli_query($connect,$sel);

    while ($array=mysqli_fetch_array($run_sel)) {
      $pro_id = $array['pro_id'];

      $sel_pro = "select pro_id from user_ordered_products where user_id='$user_id' and pro_id='$pro_id'";
      $run_sel_pro = mysqli_query($connect,$sel_pro);

      $sel_pro_title = "select title from products where pro_id='$pro_id'";
      $run_sel_pro_title = mysqli_query($connect,$sel_pro_title);
      $array2=mysqli_fetch_array($run_sel_pro_title);
      $pro_title = $array2['title'];
      $pro_title = substr($pro_title,0,18);

      if (mysqli_num_rows($run_sel_pro)>0) {
        echo "<div class='alert alert-danger py-4 alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Danger!</strong> The Product <b><mark>$pro_title</mark></b> Is Already Orderd:) If you want to order more of this product then move forward.
        </div>";
      }
    }

  }
}



 ?>
