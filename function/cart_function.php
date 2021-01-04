<?php
$connect = mysqli_connect("localhost","root","","bigbazi");
@session_start();
//function for getting ip address
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

//function for adding product into cart table
function addCart(){
  global $connect;
  if (isset($_GET['add_cart'])) {
    $pro_id = $_GET['add_cart'];
    $ip_add = getRealIpAddr();
    // $u_id=0;
    if (isset($_SESSION['email_phone'])) {
      $email_phone = $_SESSION['email_phone'];
      $select_id = "select user_id from user where user_phone='$email_phone' or user_email='$email_phone'";
      $run_user = mysqli_query($connect,$select_id);
      $array = mysqli_fetch_array($run_user);
      $user_id = $array['user_id'];

      $check = "select pro_id from cart where user_id='$user_id' and pro_id='$pro_id'";
      $run_check = mysqli_query($connect,$check);
      $row = mysqli_num_rows($run_check);
      if ($row>0) {
        echo "<div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Danger!</strong> Already Added.
        </div><script>window.open(window.history.back(),'_self')</script>";
      }else {
        $insert_to_cart = "insert into cart (pro_id,ip_add,qty,user_id) values ('$pro_id','$user_id','1','$user_id')";
        $run = mysqli_query($connect,$insert_to_cart);

        echo "<div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Success!</strong> Product Added Successfully:)
        </div><script>window.open(window.history.back(),'_self')</script>";

        // <script>window.open('index.php','_self')</script>
      }
    }else {
      $check = "select pro_id from cart where user_id='0' and ip_add='$ip_add' and pro_id='$pro_id'";
      $run_check = mysqli_query($connect,$check);
      $row = mysqli_num_rows($run_check);
      if ($row>0) {
        echo "<div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Danger!</strong> Already Added.
        </div><script>window.open(window.history.back(),'_self')</script>";
      }else {
        $insert_to_cart = "insert into cart (pro_id,ip_add,qty,user_id) values ('$pro_id','$ip_add','1','0')";
        $run = mysqli_query($connect,$insert_to_cart);

        echo "<div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Success!</strong> Product Added Successfully:)
        </div><script>window.open(window.history.back(),'_self')</script>";

        // <script>window.open('index.php','_self')</script>
      }
    }
  }
}

//getting total cart item
function cart_item(){
  global $connect;
  $ip_add = getRealIpAddr();
  if (isset($_SESSION['email_phone'])){
    $email_phone = $_SESSION['email_phone'];
    $select_id = "select user_id from user where user_phone='$email_phone' or user_email='$email_phone'";
    $run_user = mysqli_query($connect,$select_id);
    $array = mysqli_fetch_array($run_user);
    $user_id = $array['user_id'];

    $sel = "select * from cart where user_id='$user_id'";
    $run = mysqli_query($connect,$sel);
    $count = mysqli_num_rows($run);
    echo $count;
  }else {
    $sel = "select pro_id from cart where ip_add='$ip_add'";
    $run = mysqli_query($connect,$sel);
    $count = mysqli_num_rows($run);

    echo $count;

  }
}

//getting cart details to cart table
function cart_table(){
  global $connect;
  $ip_add = getRealIpAddr();

  if (isset($_SESSION['email_phone'])){
    $email_phone = $_SESSION['email_phone'];
    $select_id = "select user_id from user where user_phone='$email_phone' or user_email='$email_phone'";
    $run_user = mysqli_query($connect,$select_id);
    $array = mysqli_fetch_array($run_user);
    $user_id = $array['user_id'];

    $sel = "select * from cart where user_id='$user_id'";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_array($run)) {
      $pro_id = $array['pro_id'];
      $qty = $array['qty'];

      $sel_pro = "select * from Products where pro_id=$pro_id";
      $run_pro = mysqli_query($connect,$sel_pro);
      $array_pro=mysqli_fetch_array($run_pro);

      $title =  $array_pro['title'];
      $title = substr($title,0,20);
      $price =  $array_pro['price'];

      echo "<tr>
        <td>$title</td>
        <td>$qty</td>
        <td>$price$</td>
        <td><a class='btn btn-warning btn-sm' href='#'><i class='fa fa-edit'></i></a>
        <a class='btn btn-danger btn-sm' href='?delete_id=$pro_id'><i class='fa fa-trash'></i></a></td>
      </tr>";
    }
  }else {
    $sel = "select * from cart where ip_add='$ip_add'";
    $run = mysqli_query($connect,$sel);

    while ($array=mysqli_fetch_array($run)) {
      $pro_id = $array['pro_id'];
      $qty = $array['qty'];

      $sel_pro = "select * from Products where pro_id=$pro_id";
      $run_pro = mysqli_query($connect,$sel_pro);
      $array_pro=mysqli_fetch_array($run_pro);

      $title =  $array_pro['title'];
      $title = substr($title,0,20);
      $price =  $array_pro['price'];


      echo "<tr>
      <td>$title</td>
      <td>$qty</td>
      <td>$price$</td>
      <td><a class='btn btn-warning btn-sm' href='#'><i class='fas fa-edit'></i></a>
      <a class='btn btn-danger btn-sm' href='?delete_id=$pro_id'><i class='fas fa-trash-alt'></i></a></td>
      </tr>";
    }
  }

}

//delete Product from cart_table
function delete(){
  global $connect;
  if (isset($_GET['delete_id'])) {
    $pro_id = $_GET['delete_id'];

    $del = "delete from cart where pro_id=$pro_id";
    $run = mysqli_query($connect,$del);

    if ($run) {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Success!</strong> Deleted Data Successfully:)
            </div><script>window.open(window.history.back(),'_self')</script>";
    }
  }
}


function qty(){
  global $connect;
  if (isset($_GET['edit_id'])) {
    $pro_id = $_GET['edit_id'];

    if (isset($_SESSION['email_phone'])) {
      $email_phone = $_SESSION['email_phone'];
      $select_id = "select user_id from user where user_phone='$email_phone' or user_email='$email_phone'";
      $run_user = mysqli_query($connect,$select_id);
      $array = mysqli_fetch_array($run_user);
      $user_id = $array['user_id'];

      $del = "select qty from cart where pro_id=$pro_id and user_id='$user_id'";
      $run = mysqli_query($connect,$del);
      $array = mysqli_fetch_array($run);
      $qty = $array['qty'];

      echo $qty;
    }
  }
}
//update Product from cart_table
function update_cart_item(){
  global $connect;
  if (isset($_POST['update_qty'])) {
    $pro_id = $_POST['edit_id'];
    $qty = $_POST['qty'];

    $del = "insert into cart (qty) values ('$qty') where pro_id=$pro_id";
    $run = mysqli_query($connect,$del);

    if ($run) {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Success!</strong> Updated Data Successfully:)
            </div><script>window.open(window.history.back(),'_self')</script>";
    }
  }
}


//checking cart_table
function check_cart(){
  global $connect;
  $ip_add = getRealIpAddr();

  $sel2 = "select * from cart";
  $run2 = mysqli_query($connect,$sel2);

  if (!mysqli_num_rows($run2)>0) {
    echo "<script>window.open('index.php','_self')</script>";
  }elseif (isset($_SESSION['email_phone'])){
    $email_phone = $_SESSION['email_phone'];
    $select_id = "select user_id from user where user_phone='$email_phone' or user_email='$email_phone'";
    $run_user = mysqli_query($connect,$select_id);
    $array = mysqli_fetch_array($run_user);
    $user_id = $array['user_id'];

    $sel = "select * from cart where user_id='$user_id'";
    $run = mysqli_query($connect,$sel);

      if (!mysqli_num_rows($run)>0) {
        echo "<script>window.history.back()</script>";
      }
    }
}


//total Price
function total_price(){
  global $connect;
  $ip_add = getRealIpAddr();

  $total_price = 0;
  if (isset($_SESSION['email_phone'])) {
    $email_phone = $_SESSION['email_phone'];
    $select_id = "select user_id from user where user_phone='$email_phone' or user_email='$email_phone'";
    $run_user = mysqli_query($connect,$select_id);
    $array = mysqli_fetch_array($run_user);
    $user_id = $array['user_id'];

    $sel = "select pro_id from cart where user_id='$user_id' and ip_add='$user_id'";
    $run = mysqli_query($connect,$sel);

    while ($array = mysqli_fetch_array($run)) {
      $id = $array['pro_id'];

      $sel_pro = "select price from products where pro_id='$id'";
      $run_pro = mysqli_query($connect,$sel_pro);
      $price = mysqli_fetch_assoc($run_pro);

      $total_price += $price['price'];
    }
    echo $total_price;
  }else {
    $sel = "select pro_id from cart where ip_add='0'";
    $run = mysqli_query($connect,$sel);

    while ($array = mysqli_fetch_array($run)) {
      $id = $array['pro_id'];

      $sel_pro = "select price from products where pro_id='$id'";
      $run_pro = mysqli_query($connect,$sel_pro);
      $price = mysqli_fetch_assoc($run_pro);

      $total_price += $price['price'];
    }
    echo $total_price;
  }
}

//total product Items
function total_product(){
  global $connect;
  $ip_add = getRealIpAddr();

  if (isset($_SESSION['email_phone'])) {
    $email_phone = $_SESSION['email_phone'];
    $select_id = "select user_id from user where user_phone='$email_phone' or user_email='$email_phone'";
    $run_user = mysqli_query($connect,$select_id);
    $array = mysqli_fetch_array($run_user);
    $user_id = $array['user_id'];

    $sel = "select pro_id from cart where user_id='$user_id' and ip_add='$user_id'";
    $run = mysqli_query($connect,$sel);

    $total = mysqli_num_rows($run);
    if (mysqli_num_rows($run)>0) {
      echo $total;
    }else {
      echo $total."<script>window.history.back()</script>";
    }
  }else {
    $sel = "select pro_id from cart where ip_add='0'";
    $run = mysqli_query($connect,$sel);

    $total = mysqli_num_rows($run);
    if (mysqli_num_rows($run)>0) {
      echo $total;
    }else {
      echo $total."<script>window.history.back()</script>";
    }

  }
}

//total product Quantity
function product_quantity(){
  global $connect;
  $ip_add = getRealIpAddr();
  $total = 0;

  if (isset($_SESSION['email_phone'])) {
    $email_phone = $_SESSION['email_phone'];
    $select_id = "select user_id from user where user_phone='$email_phone' or user_email='$email_phone'";
    $run_user = mysqli_query($connect,$select_id);
    $array = mysqli_fetch_array($run_user);
    $user_id = $array['user_id'];

    $sel = "select qty from cart where user_id='$user_id' and ip_add='$user_id'";
    $run = mysqli_query($connect,$sel);

    while ($array = mysqli_fetch_array($run)) {

      $total += $array['qty'];
    }
    echo $total;

  }else {
    $sel = "select qty from cart where ip_add='0'";
    $run = mysqli_query($connect,$sel);

    while ($array = mysqli_fetch_array($run)) {

      $total += $array['qty'];
    }
    echo $total;
  }
}



 ?>
