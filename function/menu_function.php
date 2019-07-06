<?php
$connect = mysqli_connect("localhost","root","","bigbazi");


//getting the category menu
function category(){
  global $connect;
  $sel = "select * from category";
  $run = mysqli_query($connect,$sel);
  while ($array = mysqli_fetch_array($run)) {
    $cat_id = $array['cat_id'];
    $cat_title = $array['cat_title'];
    $title = strtoupper($cat_title);
    echo "<a class='btn text-success btn-block btn-light btn-sm' href='category.php?cat_id=$cat_id'>$title</a>";
  }
}

//getting the brand menu
function brand(){
  global $connect;
  $sel = "select * from brand";
  $run = mysqli_query($connect,$sel);
  while ($array = mysqli_fetch_array($run)) {
    $brand_id = $array['brand_id'];
    $brand_title = $array['brand_title'];
    $title = strtoupper($brand_title);
    echo "<a class='btn text-success btn-block btn-light btn-sm' href='brand.php?brand_id=$brand_id'>$title</a>";
  }
}




 ?>
