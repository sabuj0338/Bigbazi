<header>
  <div class="bg-dark2 text-center text-light">
    <span class="display-8">Header</span>
  </div>
</header>

<nav class="bg-white sticky-top">
  <div class="container py-2">
    <div class="row">
      <div class="col-sm-2">
        <a class="display-6 text-dark" style="text-decoration:none;" href="index.php">BIGBAZI</a>
      </div>
      <div class="col-sm-6">
        <form class="" action="search.php" method="get">
          <div class="input-group">
            <input class="form-control form-control-success" type="text" name="search_query" value="" placeholder="Search...">
            <div class="input-group-append">
              <button class="btn btn-success" type="submit" name="search"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-4">
        <span class="btn btn-lg p-0" title="View Cart"><a class="text-dark" href="cart.php"><i class="fas fa-cart-plus hover-text-success px-0"></i></a>
          <sup class="rounded-circle bg-warning text-dark px-1"><?php cart_item(); ?></sup></span>
          <div class="btn-group rounded-0">

            <?php
              global $connect;
              if (isset($_SESSION['email_phone'])) {
                $profile = $_SESSION['email_phone'];
                $sel = "select * from user where user_email='$profile' or user_phone='$profile'";
                $run = mysqli_query($connect,$sel);
                $array = mysqli_fetch_array($run);

                $photo = $array['user_photo'];
                $email = $array['user_email'];
                $phone = $array['user_phone'];
                $fname = $array['user_fname'];
                $lname = $array['user_lname'];
                $address = $array['user_address'];
                $fname = strtoupper($fname);
                echo "<a class='btn btn-success btn-sm' href='user.php'><i class='fas fa-user mr-1'></i>$fname</a>
                <button type='button' class='btn btn-success btn-sm dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'></button>
                <div class='dropdown-menu dropdown-menu-right'>
                  <div class='dropdown-header'>
                    <a href='user.php'><img class='img-fluid rounded-circle border border-success' src='user_images/$photo' alt='$photo'></a>
                  </div>
                  <div class='container-fluid justify-content-center'>
                    <a class='btn btn-success btn-sm btn-block' href='logout.php'>LOGOUT</a>
                  </div>
                </div>";
              }else {
                echo "<a class='btn btn-success btn-sm' href='login.php'>LOGIN</a>
                <a class='btn btn-success btn-sm' href='registration.php'>REGISTER</a>";
              }
             ?>
          </div>
      </div>
    </div>
  </div>
</nav>
