<?php
$connect = mysqli_connect("localhost","root","","bigbazi");

//user table
function user_table(){

  global $connect;

  $sel = "select * from user";
  $run = mysqli_query($connect,$sel);

  while ($array=mysqli_fetch_array($run)) {
    $id = $array['user_id'];
    $fname = $array['user_fname'];
    $lname = $array['user_lname'];
    $phone = $array['user_phone'];
    $address = $array['user_address'];

    echo "<tr>
      <td>$id</td>
      <td>$fname $lname</td>
      <td>$phone</td>
      <td>$address</td>
      <td><a class='badge badge-danger' href='?delete_user_id=$id'><i class='fas fa-trash-alt' title='Delete'></i></a></td>
    </tr>";

  }
}

function delete_user(){
  global $connect;

  if (isset($_GET['delete_user_id'])) {
    $id = $_GET['delete_user_id'];

    $delete = "delete from user where user_id='$id'";
    $run = mysqli_query($connect,$delete);

    if ($run) {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Success!</strong> Deleted User Successfully:)
            </div><script>window.open(window.history.back(),'_self')</script>";
    }
  }
}

 ?>
