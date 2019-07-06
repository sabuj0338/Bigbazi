<?php

$connect = mysqli_connect("localhost","root","","bigbazi");


function ordered_items($id){
  global $connect;
  $total;
  $sel = "select pro_id from user_ordered_products where user_id='$id'";
  $run = mysqli_query($connect,$sel);
  $total = mysqli_num_rows($run);
  return $total;

}

function total_price($id){
  global $connect;
  $total=0;
  $sel = "select price from user_ordered_products where user_id='$id'";
  $run = mysqli_query($connect,$sel);

  while ($array = mysqli_fetch_array($run)) {
    $total += $array['price'];
  }
  return $total;

}

function total_qty($id){
  global $connect;
  $total=0;
  $sel = "select qty from user_ordered_products where user_id='$id'";
  $run = mysqli_query($connect,$sel);

  while ($array = mysqli_fetch_array($run)) {
    $total += $array['qty'];
  }
  return $total;

}

function order_queue(){
  global $connect;

  $sel = "select * from orders limit 10";
  $run = mysqli_query($connect,$sel);

  while ($array = mysqli_fetch_array($run)) {
    $user_id = $array['user_id'];
    $user_phone = $array['user_phone'];
    $user_add = $array['user_add'];
    $deliver_date = $array['deliver_date'];

    $ordered_items = ordered_items($user_id);
    $t_qty = total_qty($user_id);
    $t_price = total_price($user_id);



    echo "<tr><td>$user_id</td>
    <td>$user_phone</td>
    <td>$user_add</td>
    <td>$deliver_date</td>
    <td>$ordered_items</td>
    <td>$t_qty</td>
    <td>$t_price</td></tr>";
  }
}


function latest_orders(){
  global $connect;

  $sel = "select * from orders order by order_date desc limit 5";
  $run = mysqli_query($connect,$sel);

  while ($array=mysqli_fetch_array($run)) {
    $user_id = $array['user_id'];
    $order_date = $array['order_date'];
    $deliver_date = $array['deliver_date'];

    echo "<tr><td>$user_id</td>
    <td>$order_date</td>
    <td>$deliver_date</td></tr>";
  }
}

 ?>
