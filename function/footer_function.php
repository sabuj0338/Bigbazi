<?php
$connect = mysqli_connect("localhost","root","","bigbazi");

function category_items(){
  global $connect;

  $sel = "select * from category";
  $run = mysqli_query($connect,$sel);

  while ($array=mysqli_fetch_assoc($run)) {
    $item = $array['cat_title'];
    echo "<a class='text-white btn-link p-0' href='#'>$item</a><br>";
  }
}

function brand_items(){
  global $connect;

  $sel = "select * from brand";
  $run = mysqli_query($connect,$sel);

  while ($array=mysqli_fetch_assoc($run)) {
    $item = $array['brand_title'];
    echo "<a class='text-white btn-link p-0' href='#'>$item</a><br>";
  }
}

 ?>
