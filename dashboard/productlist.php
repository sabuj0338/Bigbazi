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

    <title>ALL PRODUCT DETAILS</title>
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
            <a class="btn btn-dark text-success active" href="productlist.php">PRODUCT LIST</a>
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
              <h4 class="display-7 ">ALL PRODUCT'S</h4>
            </div>
            <div class="my-3">
              <?php update_product(); ?>
              <?php insert_product(); ?>
            </div>

            <div class="row py-2">
              <!-- active products table -->
              <div class="col-sm-4">
                <div class="text-success m-0 py-2">
                  <h4 class="display-7 text-dark">ACTIVE PRODUCT'S</h4>
                </div>
                <table class="table table-dark table-hover text-center">
                  <thead class="bg-dark">
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php active_product(); ?>
                  </tbody>
                </table>
              </div>
              <!-- recent created/added products table -->
              <div class="col-sm-8">
                <div class="text-success m-0 py-2">
                  <h4 class="display-7 text-dark">RECENT ADDED PRODUCT'S</h4>
                </div>
                <table class="table table-dark table-hover text-center">
                  <thead class="bg-dark">
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Created At</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php recent_added(); ?>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="container p-0">
              <!-- recent created/added products table -->
              <div class="text-success m-0 py-2">
                <h4 class="display-7 text-dark">ALL PRODUCT'S</h4>
              </div>
              <?php delete_product(); ?>
              <table class="table table-dark table-hover text-center">
                <thead class="bg-dark">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <?php all_product(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div><!-- main box end -->

      </div><!-- main row box end -->
    </div><!-- first container-fluid box en -->

  <?php include("includes/script.php"); ?>
  </body>
</html>
