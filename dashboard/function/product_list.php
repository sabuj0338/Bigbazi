<?php
$connect = mysqli_connect("localhost","root","","bigbazi");

//getting all product list from database
function all_product(){
  global $connect;

  $pro = "select * from products";
  $run_pro = mysqli_query($connect,$pro);

  while ($array = mysqli_fetch_assoc($run_pro)) {
    $pro_id = $array['pro_id'];
    $title = $array['title'];
    $date = $array['date'];
    $price = $array['price'];
    $status = $array['status'];

    if ($status == 1) {
      echo "<tr>
        <td>$pro_id</td>
        <td><a class='btn-link-2 p-0 m-0' href='#' title='View Details'>$title</a></td>
        <td>$date</td>
        <td>$price</td>
        <td><i class='fas fa-check-circle text-success' title='View'></i></td>
        <td><a class='badge badge-warning' href='edit.php?pro_id=$pro_id'><i class='fas fa-edit' title='Edit'></i></a>
        <a class='badge badge-danger' href='?delete_id=$pro_id'><i class='fas fa-trash-alt' title='Delete'></i></a></td>
      </tr>";
    }else {
      echo "<tr>
        <td>$pro_id</td>
        <td><a class='btn-link-2 p-0 m-0' href='#' title='View Details'>$title</a></td>
        <td>$date</td>
        <td>$price</td>
        <td><i class='fas fa-times-circle text-danger' title='View'></i></td>
        <td><a class='badge badge-warning' href='edit.php?pro_id=$pro_id'><i class='fas fa-edit' title='Edit'></i></a>
        <a class='badge badge-danger' href='?delete_id=$pro_id'><i class='fas fa-trash-alt' title='Delete'></i></a></td>
      </tr>";
    }
  }
}

//getting recent added products from database
function recent_added(){
  global $connect;

  $sel = "select * from products order by pro_id desc limit 5";
  $run_sel = mysqli_query($connect,$sel);

  while ($array = mysqli_fetch_assoc($run_sel)) {
    $pro_id = $array['pro_id'];
    $title = $array['title'];
    $date = $array['date'];

    $cur_date = date_create("now");
    $pro_date = date_create($date);

    $diff = date_diff($cur_date,$pro_date);
    $days = $diff->format("%a Days Ago.");
    echo "<tr>
      <td>$pro_id</td>
      <td><a class='btn-link-2 p-0 m-0' href='#' title='View Details'>$title</a></td>
      <td>$days</td>
      <td><a class='badge badge-warning' href='edit.php?pro_id=$pro_id'><i class='fas fa-edit' title='Edit'></i></a></td>
    </tr>";

  }
}


//getting active products from database
function active_product(){
  global $connect;

  $sel = "select * from products limit 5";
  $run_sel = mysqli_query($connect,$sel);

  while ($array = mysqli_fetch_assoc($run_sel)) {
    $pro_id = $array['pro_id'];
    $title = $array['title'];
    $status = $array['status'];

    if ($status == 1) {
      echo "<tr>
        <td>$pro_id</td>
        <td><a class='btn-link-2 p-0 m-0' href='#' title='View Details'>$title</a></td>
        <td><i class='fas fa-check-circle text-success' title='View'></i></td>
      </tr>";
    }

  }
}
 ?>
