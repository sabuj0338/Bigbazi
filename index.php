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

    <section class="container py-4">
      <div class="row">

        <div class="col-md-12">
          <?php addCart(); ?>
          <div class="">
            <div class="">
              <span class="display-7">NEW ARRIVAL</span>
            </div>
            <div class="row">
              <?php new_product(); ?>
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
