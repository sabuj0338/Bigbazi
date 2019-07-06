<?php

  $connect = mysqli_connect("localhost","root","","bigbazi");

//cattegory list function
  function category_list(){
    global $connect;

    $sel_cat = "select * from category";
    $run_sel_cat = mysqli_query($connect,$sel_cat);

    while ($array_cat = mysqli_fetch_assoc($run_sel_cat)) {

      $cat_id = $array_cat['cat_id'];
      $cat_title = $array_cat['cat_title'];

      echo "<div class='custom-control custom-radio'>
        <input type='radio' class='custom-control-input' id='$cat_title' name='category' value='$cat_id'>
        <label class='custom-control-label text-success' for='$cat_title'>$cat_title</label>
      </div>";

    }
  }

  //cattegory list function
    function brands_list(){
      global $connect;

      $sel_brand = "select * from brand";
      $run_sel_brand = mysqli_query($connect,$sel_brand);

      while ($array_brand = mysqli_fetch_assoc($run_sel_brand)) {

        $brand_id = $array_brand['brand_id'];
        $brand_title = $array_brand['brand_title'];

        echo "<div class='custom-control custom-radio'>
          <input type='radio' class='custom-control-input' id='$brand_title' name='brand' value='$brand_id'>
          <label class='custom-control-label text-success' for='$brand_title'>$brand_title</label>
        </div>";

      }
    }


 ?>
