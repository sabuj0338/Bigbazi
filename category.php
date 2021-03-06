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

    <title>BIGBAZI | Best Online Shop</title>
  </head>
  <body style="background:#fafafa;">

    <!-- including navbar for this page -->
    <?php include("includes/header.php") ?>

    <section class="container py-2 p-0">
      <div class="row">

        <div class="col-md-12 px-2 p-0">
          <?php addCart(); ?>

          <div class="bg-white row p-2 m-0">

            <?php cat_products_head();?>

          </div>
          <div class="bg-white my-2">
            <div class="row p-2 justify-content-center">

              <?php cat_products(); ?>

            </div>
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
