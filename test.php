<?php
include("function/cart_function.php");
include("function/details_function.php");
include("function/index_function.php");
include("function/menu_filtering_function.php");
include("function/menu_function.php");
include("function/footer_function.php");

@session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/css/myboot.css">
    <!-- <link rel="stylesheet" href="css/w3.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>BIGBAZI | Best Online Shop</title>
  </head>
  <body style="background:#fafafa;">
    <div class="container justify-content-center">
      <div class="btn-group">
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header">
            <img class="img-fluid rounded-circle border border-success" src="user_images/sabuj.jpg" alt="">
          </div>
          <div class=" container-fluid justify-content-center">
            <a class="btn btn-block btn-success" href="user.php">Link 1</a>
          </div>
        </div>
      </div>
    </div>

    <?php

    $a = "hello";
    $b = "world";
    $c = "";
    $c = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem";
    echo strlen($c);

     ?>

    <div class="">
        <div class='col-sm-3 my-2'>
          <div class='card hover-card-2'>
            <div class='text-center card-header'>
              <a class="display-7 text-dark float-left" href="#" style="text-decoration:none;">$title this is the title</a>
              <a class="btn btn-danger btn-sm float-right" href="#">NEW</a>
              <div class='row'>
                <div class='col-sm-10'>
                </div>
                <div class='col-sm-2 p-0'>
                </div>
              </div>
            </div>
            <div class='container-content card-body p-0 bg-success'>
              <img class='img-fluid image-content p-3' src='category_images/pc.png' alt='$img1'>
              <div class="overlay-content">
                <div class="middle-content">
                  <a class="btn btn-light" href="details.php?pro_id=$pro_id">Details</a>
                </div>
              </div>
            </div>
            <div class='card-footer'>
              <span class='display-7 float-left text-secondary'><span class='text-warning'>$</span>500</span>
              <a class='btn btn-success float-right' href='index.php?add_cart=$pro_id'>ADD CART</a>
            </div>
          </div>
        </div>

    </div>




  <script src="style/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="style/js/jquery.min.js"></script>
  <script src="style/js/my.js"></script>
  <script src="style/js/popper.min.js"></script>
  </body>
</html>
