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

    <title>CHECKOUT</title>
  </head>
  <body style="background:#fafafa;">
    <?php

      if (!isset($_POST['deliver_now'])) {
        echo "<script>location.href='login.php'</script>";
      }
      deliver_now();
     ?>
    <!-- including navbar for this page -->
    <?php include("includes/nav.php") ?>

    <section class="container py-2 p-0">
      <div class="container">
        <h1>Checkout Successfully.Thank You:)</h1>
      </div>
    </section>

    <!-- including footer content -->
    <?php include("includes/footer.php") ?>
  <!-- all script of this page -->
  <?php include("includes/script.php") ?>
  </body>
</html>
