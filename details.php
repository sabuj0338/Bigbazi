<?php
//including all functions here
include("includes/include_functions.php");
@session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- all css file of this page -->
    <?php include("includes/styles.php"); ?>

    <title>Product Details</title>
  </head>
  <body style="background:#fafafa;">

    <!-- including navbar for this page -->
    <?php include("includes/header.php") ?>

    <section class="container py-2 p-0">
      <div class="row">
        <div class="col-sm-4 container bg-white p-2">
          <div class="tab-content">
            <div id="img1" class="container tab-pane active">
              <img class="img-fluid" src="dashboard/product_images/<?php imageOne(); ?>" alt="photo One">
            </div>
            <div id="img2" class="container tab-pane fade">
              <img class="img-fluid" src="dashboard/product_images/<?php imageTwo(); ?>" alt="photo two">
            </div>
            <div id="img3" class="container tab-pane fade">
              <img class="img-fluid" src="dashboard/product_images/<?php imageThree(); ?>" alt="photo three">
            </div>
          </div>
          <!-- Nav pills -->
          <ul class="nav nav-pills row py-3" role="tablist">
            <li class="nav-item col-sm-4">
              <a class="btn btn-success bg-white active" data-toggle="pill" href="#img1"><img class="img-fluid" src="dashboard/product_images/<?php imageOne(); ?>" alt="photo One"></a>
            </li>
            <li class="nav-item col-sm-4">
              <a class="btn btn-success bg-white" data-toggle="pill" href="#img2"><img class="img-fluid" src="dashboard/product_images/<?php imageTwo(); ?>" alt="photo two"></a>
            </li>
            <li class="nav-item col-sm-4">
              <a class="btn btn-success bg-white" data-toggle="pill" href="#img3"><img class="img-fluid" src="dashboard/product_images/<?php imageThree(); ?>" alt="photo three"></a>
            </li>
          </ul>
        </div>
        <div class="col-sm-8 bg-white p-2 border-left">
          <div class="text-secondary py-2 px-3">
            <?php details();addCart(); ?>
          </div>
        </div>
      </div>
    </section>

    <!-- including footer content -->
    <?php include("includes/footer.php") ?>
  <!-- all script of this page -->
  <?php include("includes/script.php") ?>
  </body>
</html>
