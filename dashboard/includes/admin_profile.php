<?php
  global $connect;
  if (isset($_SESSION['email'])) {
    $profile = $_SESSION['email'];
    $sel = "select * from admin where admin_email='$profile'";
    $run = mysqli_query($connect,$sel);
    $array = mysqli_fetch_array($run);

    // $photo = $array['user_photo'];
    $email = $array['admin_email'];
    $phone = $array['admin_phone'];
    $name = $array['admin_name'];
    $name = strtoupper($name);

    echo "<a class='btn btn-success btn-sm' href='user.php'><i class='fas fa-user mr-1'></i>$name</a>
    <a class='btn btn-success btn-sm' href='admin_logout.php'>LOGOUT</a>
    ";
  }
 ?>
