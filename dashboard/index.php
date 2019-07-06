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

    <title>Dashboard</title>
  </head>
  <body  style="background:#fafafa;">
    <?php
      admin_login();
      if (!isset($_SESSION['email'])) {
        echo "<script>location.href='admin_login.php'</script>";
      }
    ?>
    <div class="container-fluid"><!-- first container-fluid box start -->
      <div class="row"><!-- main row box start -->
        <div id="mySidebar" class="col bg-dark2 position-fixed-fheight p-0" style="width:16%;">
          <div class="container bg-dark text-light text-center m-0 py-3">
            <h4 class="display-7 ">DASHBOARD</h4>
            <?php
              include("includes/admin_profile.php");
             ?>
          </div>
          <div class="btn-group btn-group-vertical btn-block">
            <a class="btn btn-dark text-success active" href="index.php">OVERVIEW</a>
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
          <div class="">
            <div class="text-success bg-white text-center m-0 py-3">
              <h4 class="display-7 ">OVERVIEW</h4>
            </div>
          </div>

          <div class="container p-3"><!-- start of container -->
            <div class="row">
              <div class="col-md-3">
                <div class="card border border-dark text-center">
                  <div class="card-header bg-dark text-light">
                    <h6>ACTIVE ONLINE NOW</h6>
                  </div>
                  <div class="card-body text-dark">
                    <h1><?php active_user(); ?></h1>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card border border-success text-center">
                  <div class="card-header bg-success text-light">
                    <h6>TOTAL PRODUCTS</h6>
                  </div>
                  <div class="card-body text-success">
                    <h1><?php t_pro(); ?></h1>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card border border-success text-center">
                  <div class="card-header bg-success text-light">
                    <h6>TOTAL USER</h6>
                  </div>
                  <div class="card-body text-success">
                    <h1><?php t_user(); ?></h1>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card border border-dark text-center">
                  <div class="card-header bg-dark text-light">
                    <h6>TOTAL CART</h6>
                  </div>
                  <div class="card-body text-dark">
                    <h1><?php t_cart(); ?></h1>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end of contianer -->

          <div class="container p-3"><!-- start of container -->
            <div class="row">
              <div class="col-md-3">
                <div class="card border border-dark text-center">
                  <div class="card-header bg-dark text-light">
                    <h6>TOTAL ORDERED</h6>
                  </div>
                  <div class="card-body text-dark">
                    <h1><?php
                      global $connect;

                      $sel = "SELECT DISTINCT user_id FROM orders";
                      $run = mysqli_query($connect,$sel);
                      $total = mysqli_num_rows($run);
                      echo $total;
                      echo " User";
                     ?></h1>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card border border-success text-center">
                  <div class="card-header bg-success text-light">
                    <h6>ACTIVE PRODUCTS</h6>
                  </div>
                  <div class="card-body text-success">
                    <h1><?php active_pro(); ?></h1>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card border border-success text-center">
                  <div class="card-header bg-success text-light">
                    <h6>TOTAL BRANDS</h6>
                  </div>
                  <div class="card-body text-success">
                    <h1><?php t_brand(); ?></h1>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card border border-dark text-center">
                  <div class="card-header bg-dark text-light">
                    <h6>TOTAL CATEGORY</h6>
                  </div>
                  <div class="card-body text-dark">
                    <h1><?php t_category(); ?></h1>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end of contianer -->

          <div class="container my-2">
            <div class="bg-white p-3">
              <h4 class="display-7 ">Total Cart, For Any User</h4>
            </div>
          </div>

          <div class="container">
            <table class="table border table-light table-striped table-hover text-center">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Cart Item</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  global $connect;
                  $sel = "select * from cart where user_id=0";
                  $run = mysqli_query($connect,$sel);
                  $total = mysqli_num_rows($run);

                  echo "<tr>
                    <td>Flash User</td>
                    <td>No Email</td>
                    <td>No Phone</td>
                    <td>$total</td>
                  </tr>";
                 ?>
                <?php user_cart(); ?>
              </tbody>
            </table>
          </div>

        </div><!-- main box end -->

      </div><!-- main row box end -->
    </div><!-- first container-fluid box en -->

  <?php include("includes/script.php"); ?>
  </body>
</html>
