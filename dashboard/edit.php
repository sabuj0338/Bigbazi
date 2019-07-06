<?php
include("includes/include_function.php");
@session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include("includes/css.php"); ?>

    <title>EDIT ITEM</title>
  </head>
  <body>
    <div class="container-fluid"><!-- first container-fluid box start -->
      <?php
        if (!isset($_SESSION['email'])) {
          echo "<script>location.href='admin_login.php'</script>";
        }
      ?>
      <div class="row"><!-- main row box start -->
        <div id="mySidebar" class="col bg-dark2 position-fixed-fheight p-0" style="width:16%;">
          <div class="container bg-dark text-light text-center m-0 py-3">
            <h4 class="display-7 ">DASHBOARD</h4>
            <?php
              include("includes/admin_profile.php");
             ?>
          </div>
          <div class="btn-group btn-group-vertical btn-block">
            <a class="btn btn-dark text-success" href="index.php">OVERVIEW</a>
            <a class="btn btn-dark text-success" href="addnew.php">ADD NEW</a>
            <a class="btn btn-dark text-success" href="productlist.php">PRODUCT LIST</a>
            <a class="btn btn-dark text-success" href="order.php">ORDER LIST</a>
            <a class="btn btn-dark text-success" href="user.php">USER</a>
            <a class="btn btn-dark text-success" href="#">ADMIN</a>
            <a class="btn btn-dark text-success" href="#">STATISTICS</a>
          </div>
        </div>
        <div id="main" class="col p-0" style="margin-left:16%;"><!-- main box start -->
          <div class="navbar navbar-expand-sm navbar-dark p-0">
            <div id="icon" class="navbar-brand p-0 fixed-top" style="margin-left:16%;">
              <button class="navbar-toggler bg-dark2 rounded-0 p-2" style="display:block;" id="openNav2" onclick="w3_close()"><i class="fas fa-caret-left"></i></button>
              <button class="navbar-toggler bg-dark2 rounded-0 p-2" style="display:none;" id="openNav" onclick="w3_open()"><i class="fas fa-caret-right"></i></button>
            </div>
          </div>

          <!-- main container or box is start from here. this is not sidenav -->
          <div class="px-4" style="background:#fafafa;">
            <div class="text-success bg-white text-center m-0 py-3">
              <h4 class="display-7 ">EDIT PRODUCT</h4>
            </div>

            <form class="" action="productlist.php" method="post" enctype="multipart/form-data">

              <div class="row m-0 py-2">

                <div class="col-sm-2 p-1">

                  <div class="bg-white p-3 mb-2">
                    <div class="text-success text-dark">
                      <h4 class="display-7 ">Status</h4>
                    </div>
                    <?php status(); ?>
                  </div>

                  <div class="bg-white p-3 mb-2">
                    <div class="text-success text-dark">
                      <h4 class="display-7 ">Price</h4>
                    </div>
                    <div class="input-group my-2">
                      <?php price(); ?>
                    </div>
                  </div>

                  <div class="bg-white p-3 mb-2">
                    <div class="border">
                      <?php $img1 = imageOne(); echo "<img class='img-fluid p-2' src='product_images/$img1' alt='$img1'>"; ?>
                    </div>
                    <div class="">
                      <div class="custom-file my-2">
                        <input type="file" name="img1" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Photo</label>
                      </div>
                      <div class="custom-file my-2">
                        <input type="file" name="img2" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Photo</label>
                      </div>
                      <div class="custom-file my-2">
                        <input type="file" name="img3" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Photo</label>
                      </div>
                    </div>
                  </div>

                  <div class="bg-white p-3 mb-2">
                    <div class="text-success text-dark">
                      <h4 class="display-7 ">Product ID</h4>
                    </div>
                    <div class="input-group my-2">
                      <?php
                      pro_id();
                       ?>
                    </div>
                  </div>
                </div>

                <div class="col-sm-8 p-1">
                  <div class="bg-white p-3 mb-2">
                    <div class="input-group my-2">
                      <?php title(); ?>
                    </div>
                  </div>
                  <div class="bg-white p-3 mb-2">
                    <?php description(); ?>
                  </div>
                </div>

                <div class="col-sm-2 p-1">
                  <div class=" bg-white p-3 mb-2">
                    <input class="btn btn-success btn-block" type="submit" name="update_product" value="UPDATE">
                  </div>
                  <div class=" bg-white p-3 mb-2">
                    <div class="text-dark">
                      <h4 class="display-7 ">Brand</h4>
                    </div>
                    <div class="">
                      <?php brands_list(); ?>
                    </div>
                  </div>

                  <div class=" bg-white p-3 mb-2">
                    <div class="text-dark">
                      <h4 class="display-7 ">Category</h4>
                    </div>
                    <div class="">
                      <?php category_list(); ?>
                    </div>
                  </div>
                </div>

              </div>
            </form>

          </div>
        </div><!-- main box end -->

      </div><!-- main row box end -->
    </div><!-- first container-fluid box en -->

  <?php include("includes/script.php"); ?>
  </body>
</html>
