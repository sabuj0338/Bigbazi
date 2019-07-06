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
            <a class="btn btn-dark text-success active" href="user.php">USER</a>
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
          <div class="" style="background:#fafafa;">
            <div class="text-success bg-white text-center m-0 py-3">
              <h4 class="display-7 ">Users List</h4>
            </div>

            <div class="px-2">
              <?php delete_user(); ?>
              <table class="table border table-light table-striped text-center">
                <thead class="">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php user_table(); ?>
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
