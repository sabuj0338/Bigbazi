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
    <?php include("includes/css.php"); ?>

    <title>ORDER PRODUCT</title>
  </head>
  <body style="background:#fafafa;">

    <section class="container py-2 p-0">
      <div class="">
        <?php

        if (!isset($_POST['order_now'])) {
          echo "<script>location.href='login.php'</script>";
        }
        order_now();
        ?>
      </div>

      <div class="container">
        <h1>Products Ordered Successfully.We will deliver you those product timely.Thank You:)</h1>
        <div class="">
          <a class="btn btn-outline-success p-3" href="index.php">Continue Browsing</a>
        </div>
      </div>
    </section>

  <!-- all script of this page -->
  <?php include("includes/script.php") ?>
  </body>
</html>
