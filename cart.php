<?php
//including all functions here
include("includes/include_functions.php");
@session_start();
if (!isset($_SESSION['email_phone'])) {
  echo "<script>window.open('login.php','_self')</script>";
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- all css file of this page -->
    <?php include("includes/styles.php"); ?>

    <title>BIGBAZI | CART</title>
  </head>
  <body style="background:#fafafa;">


    <!-- including navbar for this page -->
    <?php include("includes/header.php") ?>


    <section class="container py-2 p-0">


      <div class="row py-4">
        <div class="col-sm-3">
          <div class="card text-center">
            <div class="card-header">
              <h6>Product Items</h6>
            </div>
            <div class="card-body">
              <h1><?php total_product(); ?></h1>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card text-center">
            <div class="card-header">
              <h6>Quantity</h6>
            </div>
            <div class="card-body">
              <h1><?php product_quantity(); ?></h1>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card text-center">
            <div class="card-header">
              <h6>Total Price</h6>
            </div>
            <div class="card-body">
              <h1><?php total_price(); ?><span class="text-warning">$</span></h1>
            </div>
          </div>
        </div>
      </div>
      <?php delete(); update_cart_item();?>
      <div class="">
        <table class="table table-sm table-hover table-striped text-center">
          <thead class="">
            <tr>
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Update</th>
            </tr>
          </thead>
          <tbody>
            <?php cart_table(); ?>
          </tbody>
          <tfoot class="">
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><a class="btn btn-success btn-sm" href="checkout.php">CHECKOUT</a></td>
            </tr>
          </tfoot>
        </table>
      </div>
    </section>

    <!-- including footer content -->
    <?php include("includes/footer.php") ?>
  <!-- all script of this page -->
  <?php include("includes/script.php") ?>
  </body>
</html>
