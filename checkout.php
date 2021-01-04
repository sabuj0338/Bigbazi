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

    <title>CHECKOUT</title>
  </head>
  <body style="background:#fafafa;">

    <!-- including navbar for this page -->
    <?php include("includes/header.php") ?>

    <section class="container py-2 p-0">
      <div class="">
        <?php
          login();
          check_Ordered();
          check_cart();
          if (!isset($_SESSION['email_phone'])) {
            echo "<script>location.href='login.php'</script>";
          }
         ?>
         <div class="container">
           <div class="text-center border-bottom">
             <h1 class="display-5">Payment System</h1>
           </div>
         </div>
         <div class="row my-4">
           <div class="col-md-8">
             <div class="p-3">
               <span class="display-6 border border-dark px-4 py-2 rounded">CASH ON DELIVERY</span>
             </div>
             <div class="p-3">
               <form class="bg-warning p-4 rounded" action="user_order.php" method="post">
                 <h5 class="text-secondary ">Please fillup Those Information:</h5>
                 <div class="input-group my-2">
                   <div class="input-group-prepend">
                     <span class="input-group-text text-success">Phone</span>
                   </div>
                   <input class="form-control form-control-success" type="text" name="phone" value="" placeholder="Identifing Phone Number" required>
                 </div>
                 <div class="input-group my-2">
                   <div class="input-group-prepend">
                     <span class="input-group-text text-success">Address</span>
                   </div>
                   <input class="form-control form-control-success" type="text" name="address" value="" placeholder="Your Address" required>
                 </div>
                 <div class="input-group my-2">
                   <div class="input-group-prepend">
                     <span class="input-group-text text-success">Delivery Date</span>
                   </div>
                   <input class="form-control form-control-success" type="date" name="date" value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>" max="01-20-2019" required>
                 </div>
                 <input class="btn btn-success my-2" type="submit" name="order_now" value="ORDER NOW">
               </form>
             </div>
             <div class="mx-3 alert alert-warning border border-bottom-0 border-right-0 border-top-0 border-warning">
               <strong>Note:</strong> Please give those information for we can identify you and reach you to deliver your product and
                  give us the exact date to deliver product to you.Thank You.
             </div>
           </div>
           <div class="col-md-4">
             <div class="p-3">
               <span class="display-6 border border-dark px-4 py-2 rounded">ONLINE PAYMENT</span>
             </div>
             <div class="p-3">
               <img class="btn btn-warning img-fluid border border-warning p-2" width="140" src="images/rocket.png" alt="">
               <img class="btn btn-warning img-fluid border border-warning p-2" width="140" src="images/bkash.png" alt="">
             </div>
             <div class="mx-3 alert alert-warning border border-bottom-0 border-right-0 border-top-0 border-warning">
               <strong>Warning:</strong> This system is not active now!
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
