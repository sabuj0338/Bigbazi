<?php
$connect = mysqli_connect("localhost","root","","bigbazi");

function search_product(){
  global $connect;

  if (isset($_GET['search'])) {
    $search_key = $_GET['search_query'];

    $sel = "select * from products where keyword like '%$search_key%'";
    $run = mysqli_query($connect,$sel);
    while ($array = mysqli_fetch_assoc($run)) {
      $pro_id = $array['pro_id'];
      $cat_id = $array['cat_id'];
      $brand_id = $array['brand_id'];
      $title = $array['title'];
      $title = substr($title,0,18);
      $price = $array['price'];
      $img1 = $array['image1'];

      echo "<div class='col-md-3 my-2'>
        <div class='card hover-card-2'>
          <div class='text-dark card-header'>
            <div class='row px-3'>
              <div class='col-sm-10 p-0'>
                <a class='display-8 text-dark' href='details.php?pro_id=$pro_id' style='text-decoration:none;'>$title</a>
              </div>
              <div class='col-sm-2 p-0'>
                <span class='badge badge-warning'>NEW</span>
              </div>
            </div>
          </div>
          <div class='container-content card-body p-0' >
            <img class='img-fluid image-content p-3' src='dashboard/product_images/$img1' alt='$img1'>
            <div class='overlay-content'>
              <div class='middle-content'>
                <a class='btn btn-success' href='details.php?pro_id=$pro_id'>Details</a>
              </div>
            </div>
          </div>
          <div class='card-footer'>
            <span class='display-7 float-left text-secondary'><span class='text-warning'>$</span>$price</span>
            <a class='btn btn-sm btn-success float-right' href='index.php?add_cart=$pro_id'>ADD CART</a>
          </div>
        </div>
      </div>";

    }
  }
}


 ?>
