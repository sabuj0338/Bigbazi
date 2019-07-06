<?php
@session_start();

if ($_SESSION['email']) {
  session_destroy();
  echo "<script>location.href='admin_login.php'</script>";
}else {
  echo "<script>location.href='index.php'</script>";
}


 ?>
