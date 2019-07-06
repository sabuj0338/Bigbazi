<?php

$connect = mysqli_connect("localhost","root","","bigbazi");

function order_queue(){
  global $connect;

  $sel = "select * from delivery";
  $run = mysqli_query($connect,$sel);

  while ($array = mysqli_fetch_array($run)) {
    $user_id = $array['user_id'];
    $user_phone = $array['user_phone'];
    $user_add = $array['user_add'];
    $deliver_date = $array['deliver_date'];
    $ordered_items;
    $t_qty;
    $t_price;


    echo "<th>ID</th>
    <th>PHONE</th>
    <th>ADDRESS</th>
    <th>DELIVER DATE</th>
    <th>ORDERED</th>
    <th>QUANTITY</th>
    <th>PRICE</th>";
  }
}

 ?>
