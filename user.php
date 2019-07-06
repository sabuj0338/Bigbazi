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
      <div class="row">
        <div class="col-sm-3">

          <?php
            echo "<img class='img-fluid border border-success p-2' src='user_images/$photo' alt='$photo'>";
           ?>
          <form class=" row p-3" action="user.php" method="post" enctype="multipart/form-data">
            <div class="col-sm-4 p-0">
              <input class="btn btn-success rounded-0 px-3" type="submit" name="upload_photo" value="Upload">
            </div>
            <div class="col-sm-8 p-0">
              <input type="file" name="photo" class="rounded-0 form-control-file bg-white p-1">
            </div>
            <?php
              upload_photo();
            ?>
          </form>
        </div>
        <div class="col-sm-9">
          <?php
            echo "<h1>$fname $lname</h1>
            <p>Email: $email</p>
            <p>Phone: $phone</p>
            <p>Address: $address</p>";
           ?>
        </div>
      </div>
    </section>

    <!-- including footer content -->
    <?php include("includes/footer.php") ?>
  <!-- all script of this page -->
  <?php include("includes/script.php") ?>
  </body>
</html>
