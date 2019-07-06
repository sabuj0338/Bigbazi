<?php

$connect = mysqli_connect("localhost","root","","bigbazi");

//function for inserting product in SQLiteDatabase
function insert_product(){

  global $connect;
  $match = 1;

  if (isset($_POST['insert_product'])) {

    $title = $_POST['title'];
    if (strlen($title) >= 100) {
      $match = 0;
      echo "<div class='alert alert-warning alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Warning!</strong> Title is more than 100 characters:)
            </div>";
    }
    if ($title =='') {
      $match = 0;
      echo "<div class='alert alert-warning alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Warning!</strong> Please give a title or name of this product:)
            </div>";
    }

    $desc = $_POST['desc'];
    if (strlen($desc) >= 500) {
      $match = 0;
      echo "<div class='alert alert-warning alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Warning!</strong> Description is more than 500 characters:)
            </div>";
    }
    if ($desc =='') {
      $match = 0;
      echo "<div class='alert alert-warning alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Warning!</strong> Please write a sort description about this product:)
            </div>";
    }

    $price = $_POST['price'];
    $status = $_POST['status'];

    $cat_id = $_POST['category'];
    $cat_title = cat_title($cat_id);
    $brand_id = $_POST['brand'];
    $brand_title = brand_title($brand_id);

    $keyword = $cat_title.",".$brand_title.",".$title.",".$price;

    $img1 = $_FILES['img1']['name'];
    $img2 = $_FILES['img2']['name'];
    $img3 = $_FILES['img3']['name'];

    $temp_name1 = $_FILES['img1']['tmp_name'];
    $temp_name2 = $_FILES['img2']['tmp_name'];
    $temp_name3 = $_FILES['img3']['tmp_name'];

    if ($match == 1){

      move_uploaded_file($temp_name1,"product_images/$img1");
      move_uploaded_file($temp_name2,"product_images/$img2");
      move_uploaded_file($temp_name3,"product_images/$img3");

      $insert = "insert into products (cat_id,brand_id,title,price,description,keyword,status,image1,image2,image3,date) values ('$cat_id','$brand_id','$title','$price','$desc','$keyword','$status','$img1','$img2','$img3',NOW())";
      $run_insert = mysqli_query($connect,$insert);

      if ($run_insert) {
        echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Success!</strong> Data Inserted Successfully:)
              </div>";
      }
    }
  }
}












 ?>
