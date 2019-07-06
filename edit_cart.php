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

    <title>Product Details</title>
  </head>
  <body style="background:#fafafa;">

    <!-- including navbar for this page -->
    <?php include("includes/nav.php") ?>



    <section class="container py-2 p-0">
      <form class="" action="cart.php" method="post">
        <div class="input-group my-2">
          <div class="input-group-append">
            <span class='input-group-text'>Quantity</span>
          </div>
          <input type="text" name="qty" value="<?php  qty(); ?>">
        </div>
      </form>
    </section>
    <!-- including footer content -->
    <?php include("includes/footer.php") ?>
  <!-- all script of this page -->
  <?php include("includes/script.php") ?>
  </body>
</html>
