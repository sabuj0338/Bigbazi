<?php
$connect = mysqli_connect("localhost","root","","bigbazi");

//getting details of Products
function details(){
  global $connect;
  if (isset($_GET['pro_id'])) {
    $id = $_GET['pro_id'];
    $sel = "select * from products where pro_id=$id";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $title = $array['title'];
      $price = $array['price'];
      $desc = $array['description'];
      $status = $array['status'];
      $image1 = $array['image1'];
      $image2 = $array['image2'];
      $image3 = $array['image3'];

      echo "<h3>$title</h3><br>
      <div class='row'>
        <div class='col-sm-6'>
          <h6>Price: <span class='text-warning'>$price$</span></h6>
          <h6>Rating: <span class='text-warning'>*****</span></h6>
          <h6>Stock Available: <span class='text-success'>$status</span></h6>
          <a class='btn btn-success btn-block' href='details.php?add_cart=$id'>ADD TO CART</a>
        </div>
        <div class='col-sm-6'>
          <h6>Quantity: <span class='text-success'>1</span></h6>
        </div>
      </div><br>
      <p>$desc</p>";

    }
  }
}

//getting imageOne of Products
function imageOne(){
  global $connect;
  if (isset($_GET['pro_id'])) {
    $id = $_GET['pro_id'];
    $sel = "select * from products where pro_id=$id";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image1 = $array['image1'];
      $image2 = $array['image2'];
      $image3 = $array['image3'];

      echo $image1;

    }
  }
}

//getting imageTwo of Products
function imageTwo(){
  global $connect;
  if (isset($_GET['pro_id'])) {
    $id = $_GET['pro_id'];
    $sel = "select * from products where pro_id=$id";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image2 = $array['image2'];

      echo $image2;

    }
  }
}

//getting imageThree of Products
function imageThree(){
  global $connect;
  if (isset($_GET['pro_id'])) {
    $id = $_GET['pro_id'];
    $sel = "select * from products where pro_id=$id";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image3 = $array['image3'];

      echo $image3;

    }
  }
}






 ?>
