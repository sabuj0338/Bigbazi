<?php
include("function/user_function.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/css/myboot.css">
    <!-- <link rel="stylesheet" href="css/w3.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Registration Now</title>
  </head>
  <body>
    <div class="container-fluid"><!-- first container-fluid box start -->
      <!-- main container or box is start from here. this is not sidenav -->
      <div class="row justify-content-center mt-4">
          <div class="col-6">
            <div class="card">
              <div class="card-header bg-success text-center">
                <h4>Registration Form</h4>
              </div>
              <div class="card-body">
                <form class="text-center" action="registration.php" method="post">
                  <?php registration(); ?>
                  <div class="input-group my-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-success"><i class="fas fa-user"></i></span>
                    </div>
                    <input class="form-control form-control-success" type="text" name="fname" value="" placeholder="First Name">
                    <input class="form-control form-control-success" type="text" name="lname" value="" placeholder="Last Name">
                  </div>

                  <div class="input-group my-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-success"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input class="form-control form-control-success" type="email" name="email" value="" placeholder="E-mail">
                  </div>

                  <div class="input-group my-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-success"><i class="fas fa-phone"></i></span>
                    </div>
                    <input class="form-control form-control-success" type="text" name="phone" value="" placeholder="Phone">
                  </div>

                  <div class="input-group my-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-success"><i class="fas fa-key"></i></span>
                    </div>
                    <input class="form-control form-control-success" type="password" name="password" value="" placeholder="Password">
                    <input class="form-control form-control-success" type="password" name="c_password" value="" placeholder="Confirm Password">
                  </div>

                  <div class="input-group my-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-success"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <input class="form-control form-control-success" type="text" name="address" value="" placeholder="Address">
                  </div>

                  <!-- <textarea class="form-control form-control-success p-2 " name="address" rows="4" cols="40" placeholder="Address"></textarea> -->

                  <input class="btn btn-success my-2" type="submit" name="signup" value="SIGN UP">
                  <span>Already Have An Account!</span><a class="btn-link text-success" href="login.php"> Login Now</a>

                </form>
              </div>
            </div>
          </div>
        </div>

    </div><!-- first container-fluid box en -->
    <script src="style/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="style/js/jquery.min.js"></script>
    <script src="style/js/my.js"></script>
    <script src="style/js/popper.min.js"></script>
  </body>
</html>
