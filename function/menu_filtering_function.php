<?php

$connect = mysqli_connect("localhost","root","","bigbazi");

//getting product image and name by brand menu
function brand_products_head(){
  global $connect;
  if (isset($_GET['brand_id'])) {
    $id = $_GET['brand_id'];
     $sel = "select * from brand where brand_id=$id";
     $run = mysqli_query($connect,$sel);
     $array = mysqli_fetch_assoc($run);
     $title = $array['brand_title'];
     $img1 = $array['brand_image'];

     echo "<div class='col-sm-1'>
       <img class='img-fluid' style='width:40px;' src='brand_images/$img1' alt='$img1'>
     </div>
     <div class='col-sm-11'>
       <span class='display-6'>$title Products</span>
     </div>";
  }
}


//getting products by brand menu
function brand_products(){
  global $connect;
  if (isset($_GET['brand_id'])) {
    $id = $_GET['brand_id'];
     $sel = "select * from products where brand_id=$id";
     $run = mysqli_query($connect,$sel);
     if (mysqli_num_rows($run)>0) {
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
                   <a class='display-8' href='details.php?pro_id=$pro_id'>$title</a>
                 </div>
                 <div class='col-sm-2 p-0'>
                   <span class='badge badge-warning'>NEW</span>
                 </div>
               </div>
             </div>
             <div class='container-content card-body p-0' >
               <img class='img-fluid image-content p-3' src='dashboard/product_images/$img1' alt='$img1'>
             </div>
             <div class='card-footer'>
               <span class='display-7 float-left text-secondary'><span class='text-warning'>$</span>$price</span>
               <a class='btn btn-sm btn-success float-right' href='index.php?add_cart=$pro_id'>ADD CART</a>
             </div>
           </div>
         </div>";
       }
     }else {
       echo "
       <div class=' m-3'>
         <a class='btn btn-outline-success p-3' href='index.php'>Continue Browsing</a>
       </div>";
     }

  }
}


//getting product image and name by category menu
function cat_products_head(){
  global $connect;
  if (isset($_GET['cat_id'])) {
    $id = $_GET['cat_id'];
     $sel = "select * from category where cat_id=$id";
     $run = mysqli_query($connect,$sel);
     $array = mysqli_fetch_assoc($run);
     $title = $array['cat_title'];
     $img1 = $array['cat_image'];

     echo "<div class='col-sm-1'>
       <img class='img-fluid' style='width:40px;' src='category_images/$img1' alt='$img1'>
     </div>
     <div class='col-sm-11'>
       <span class='display-6'>$title Products</span>
     </div>";
  }
}


//getting products by category menu
function cat_products(){
  global $connect;
  if (isset($_GET['cat_id'])) {
    $id = $_GET['cat_id'];
     $sel = "select * from products where cat_id=$id";
     $run = mysqli_query($connect,$sel);
     if (mysqli_num_rows($run)>0) {
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
                   <a class='display-8' href='details.php?pro_id=$pro_id'>$title</a>
                 </div>
                 <div class='col-sm-2 p-0'>
                   <span class='badge badge-warning'>NEW</span>
                 </div>
               </div>
             </div>
             <div class='container-content card-body p-0' >
               <img class='img-fluid image-content p-3' src='dashboard/product_images/$img1' alt='$img1'>
             </div>
             <div class='card-footer'>
               <span class='display-7 float-left text-secondary'><span class='text-warning'>$</span>$price</span>
               <a class='btn btn-sm btn-success float-right' href='index.php?add_cart=$pro_id'>ADD CART</a>
             </div>
           </div>
         </div>";
       }
     }else {
       echo "
       <div class=' m-3'>
         <a class='btn btn-outline-success p-3' href='index.php'>Continue Browsing</a>
       </div>";
     }

  }
}






 ?>
