<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include("includes/css.php"); ?>
    <title>Login Now</title>
  </head>
  <body>
    <div class="container-fluid"><!-- first container-fluid box start -->
      <!-- main container or box is start from here. this is not sidenav -->
      <div class="row justify-content-center mt-4">
        <div class="col-5">
          <div class="card">
            <div class="card-header bg-success text-center">
              <h4>Login Form</h4>
            </div>
            <div class="card-body">

              <form class="" action="index.php" method="post">
                <div class="input-group my-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text text-success"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input class="form-control form-control-success" type="text" name="email" value="" placeholder="E-mail">
                </div>

                <div class="input-group my-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text text-success"><i class="fas fa-key"></i></span>
                  </div>
                  <input class="form-control form-control-success" type="text" name="password" value="" placeholder="Password">
                </div>

                <input class="btn btn-success my-2" type="submit" name="login" value="LOGIN">
              </form>
            </div>
          </div>
        </div>
      </div>

    </div><!-- first container-fluid box en -->

    <?php include("includes/script.php"); ?>
  </body>
</html>
