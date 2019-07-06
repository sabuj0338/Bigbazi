<?php

  $connect = mysqli_connect("localhost","root","","bigbazi");

//getting new product in home page
function new_product(){
  global $connect;

  $sel_max_id = "select pro_id from products order by pro_id desc limit 1";
  $run_sel = mysqli_query($connect,$sel_max_id);
  $max_id = mysqli_fetch_assoc($run_sel);
  $max = $max_id['pro_id'];

  $sel = "select * from products order by pro_id desc limit 8";
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
            <div class='container-content card-body p-0'>
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

//getting brand tablist image of Products
function tablist(){
  global $connect;
    $sel = "select * from brand";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image = $array['brand_image'];
      $brand_title = $array['brand_title'];
      $brand_id = $array['brand_id'];

      echo "<li class='nav-item'>
        <a class='nav-link active' data-toggle='tab' href='#$brand_title'>
        <img class='img-fluid' style='width:100%;max-width:100px;' src='brand_images/$image' alt='$brand_title'> </a>
      </li>";
  }
}

//apple
function apple_image(){
  global $connect;
    $sel = "select * from brand where brand_id=1";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image = $array['brand_image'];

      echo $image;
  }

}

//samsung
function samsung_image(){
  global $connect;
  $sel = "select * from brand where brand_id=2";
  $run = mysqli_query($connect,$sel);
  while ($array=mysqli_fetch_assoc($run)) {
    $image = $array['brand_image'];

    echo $image;
  }

}

//hp
function hp_image(){
  global $connect;
    $sel = "select * from brand where brand_id=3";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image = $array['brand_image'];

      echo $image;
  }

}

//lenovo
function lenovo_image(){
  global $connect;
    $sel = "select * from brand where brand_id=4";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image = $array['brand_image'];

      echo $image;
  }

}

//google
function google_image(){
  global $connect;
    $sel = "select * from brand where brand_id=5";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image = $array['brand_image'];

      echo $image;
  }

}

//nokia
function nokia_image(){
  global $connect;
    $sel = "select * from brand where brand_id=6";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image = $array['brand_image'];

      echo $image;
  }

}

//dell
function dell_image(){
  global $connect;
    $sel = "select * from brand where brand_id=7";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image = $array['brand_image'];

      echo $image;
  }

}

//sony
function sony_image(){
  global $connect;
    $sel = "select * from brand where brand_id=8";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image = $array['brand_image'];

      echo $image;
  }

}

//getting product_card for brand
function product_card($brand_id){
  global $connect;

  $sel = "select * from products where brand_id=$brand_id limit 4";
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
          <div class='container-content card-body p-0'>
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


//getting brand tablist image of Products

//laptop
function laptop_image(){
  global $connect;
  $sel = "select * from category where cat_id=1";
  $run = mysqli_query($connect,$sel);
  while ($array=mysqli_fetch_assoc($run)) {
    $image = $array['cat_image'];

    echo $image;
  }

}

//tablet
function tablet_image(){
  global $connect;
  $sel = "select * from category where cat_id=2";
  $run = mysqli_query($connect,$sel);
  while ($array=mysqli_fetch_assoc($run)) {
    $image = $array['cat_image'];

    echo $image;
  }

}

//smartphone
function smartphone_image(){
  global $connect;
  $sel = "select * from category where cat_id=3";
  $run = mysqli_query($connect,$sel);
  while ($array=mysqli_fetch_assoc($run)) {
    $image = $array['cat_image'];

    echo $image;
  }

}

//smartwatch
function smartwatch_image(){
  global $connect;
    $sel = "select * from category where cat_id=4";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image = $array['cat_image'];

      echo $image;
  }

}

//smartspeaker
function smartspeaker_image(){
  global $connect;
    $sel = "select * from category where cat_id=5";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image = $array['cat_image'];

      echo $image;
  }

}

//headphone
function headphone_image(){
  global $connect;
    $sel = "select * from category where cat_id=6";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image = $array['cat_image'];

      echo $image;
  }

}

//pc
function pc_image(){
  global $connect;
    $sel = "select * from category where cat_id=7";
    $run = mysqli_query($connect,$sel);
    while ($array=mysqli_fetch_assoc($run)) {
      $image = $array['cat_image'];

      echo $image;
  }

}

//getting product_card for category
function product_card_category($cat_id){
  global $connect;

  $sel = "select * from products where cat_id=$cat_id limit 4";
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













?>
