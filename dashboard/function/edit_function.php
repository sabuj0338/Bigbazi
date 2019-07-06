<?php

  $connect = mysqli_connect("localhost","root","","bigbazi");

  //delete Product from products_table
  function delete_product(){
    global $connect;
    if (isset($_GET['delete_id'])) {
      $pro_id = $_GET['delete_id'];

      $del = "delete from products where pro_id=$pro_id";
      $run = mysqli_query($connect,$del);

      if ($run) {
        echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Success!</strong> Deleted Product Successfully:)
              </div><script>window.open(window.history.back(),'_self')</script>";
      }
    }
  }


//getting product id
function pro_id(){
    if (isset($_GET['pro_id'])) {
      $pro_id = $_GET['pro_id'];
      echo "
        <input class='form-control bg-white border-0 text-center' type='text' name='pro_id' value='$pro_id' readonly>";
    }
}

//getting brand $title
function brand_title($id){
  global $connect;
  $sel = "select brand_title from brand where brand_id='$id'";
  $run = mysqli_query($connect,$sel);
  $array = mysqli_fetch_assoc($run);
  $brand_title = $array['brand_title'];
  return $brand_title;

}
//getting category $title
function cat_title($id){
  global $connect;
  $sel = "select cat_title from category where cat_id='$id'";
  $run = mysqli_query($connect,$sel);
  $array = mysqli_fetch_assoc($run);
  $cat_title = $array['cat_title'];
  return $cat_title;

}

//getting product image one
function imageOne(){
  global $connect;

  if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
    $sel = "select image1 from products where pro_id=$pro_id";
    $run = mysqli_query($connect,$sel);
    $select = mysqli_fetch_assoc($run);
    $img = $select['image1'];
    return $img;


  }
}

//getting product image Two
function imageTwo(){
  global $connect;

  if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
    $sel = "select image2 from products where pro_id=$pro_id";
    $run = mysqli_query($connect,$sel);
    $select = mysqli_fetch_assoc($run);
    $img = $select['image2'];
    return $img;


  }
}

//getting product image Three
function imageThree(){
  global $connect;

  if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
    $sel = "select image3 from products where pro_id=$pro_id";
    $run = mysqli_query($connect,$sel);
    $select = mysqli_fetch_assoc($run);
    $img = $select['image3'];
    return $img;


  }
}

//update product details
function update_product(){
  global $connect;
  $match = 1;

  if (isset($_POST['update_product'])) {
    $pro_id = $_POST['pro_id'];

    $title = $_POST['title'];
    if (strlen($title) >= 100) {
      $match = 0;
      echo "<div class='alert alert-warning alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Warning!</strong> Title is more than 100 characters:)
            </div>";
    }
    if ($title =='') {
      $match = 0;
      echo "<div class='alert alert-warning alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Warning!</strong> Please give a title or name of this product:)
            </div>";
    }

    $description = $_POST['desc'];
    if (strlen($description) >= 500) {
      $match = 0;
      echo "<div class='alert alert-warning alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Warning!</strong> Description is more than 500 characters:)
            </div>";
    }
    if ($description =='') {
      $match = 0;
      echo "<div class='alert alert-warning alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Warning!</strong> Please write a sort description about this product:)
            </div>";
    }

    $status = $_POST['status'];
    $price = $_POST['price'];

    $cat_id = $_POST['category'];
    $cat_title = cat_title($cat_id);
    $brand_id = $_POST['brand'];
    $brand_title = brand_title($brand_id);

    $keyword = $cat_title.",".$brand_title.",".$title.",".$price;

    $img1 = $_FILES['img1']['name'];
    $img2 = $_FILES['img2']['name'];
    $img3 = $_FILES['img3']['name'];

    $temp_name1 = $_FILES['img1']['tmp_name'];
    $temp_name2 = $_FILES['img2']['tmp_name'];
    $temp_name3 = $_FILES['img3']['tmp_name'];

    if ($match == 1){
      move_uploaded_file($temp_name1,"product_images/$img1");
      move_uploaded_file($temp_name2,"product_images/$img2");
      move_uploaded_file($temp_name3,"product_images/$img3");

      $update = "update products set cat_id='$cat_id', brand_id='$brand_id', title='$title', price='$price',
       description='$description', keyword='$keyword', status='$status' where pro_id='$pro_id'";

      $run_update = mysqli_query($connect,$update);

      if ($run_update) {
        echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Success!</strong> Updated Data Successfully:)
              </div>";
      }

      if ($img1!='') {
        $update = "update products set image1='$img1' where pro_id='$pro_id'";
          $run_update = mysqli_query($connect,$update);
      }
      if ($img2!='') {
        $update = "update products set image2='$img2' where pro_id='$pro_id'";
          $run_update = mysqli_query($connect,$update);
      }
      if ($img3!='') {
        $update = "update products set image3='$img3' where pro_id='$pro_id'";
          $run_update = mysqli_query($connect,$update);
      }
    }
  }
}


//getting product price
  function price(){

    global $connect;

      if (isset($_GET['pro_id'])) {

        $pro_id = $_GET['pro_id'];
        $price = "select price from products where pro_id=$pro_id";
        $run_price = mysqli_query($connect,$price);

        while ($array = mysqli_fetch_assoc($run_price)) {
          $price = $array['price'];
          echo "<input class='form-control form-control-success' type='text' name='price' value='$price'>";
        }
      }
  }


//getting product title
function title(){
  global $connect;

  if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
    $sel = "select title from products where pro_id=$pro_id";
    $run = mysqli_query($connect,$sel);
    $select = mysqli_fetch_assoc($run);
    $title = $select['title'];
    echo "<input class='form-control form-control-success' type='text' name='title' value='$title'>";

  }
}


//getting product keyword
function keyword(){
  global $connect;

  if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
    $sel = "select keyword from products where pro_id=$pro_id";
    $run = mysqli_query($connect,$sel);
    $select = mysqli_fetch_assoc($run);
    $keyword = $select['keyword'];
    echo "<input class='form-control form-control-success' type='text' name='keyword' value='$keyword'>";

  }
}

//getting product description
function description(){
  global $connect;

  if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
    $sel = "select description from products where pro_id=$pro_id";
    $run = mysqli_query($connect,$sel);
    $select = mysqli_fetch_assoc($run);
    $desc = $select['description'];
    echo "<textarea class='form-control form-control-success my-2' name='desc' rows='10' cols='40'>$desc</textarea>";

  }
}


//getting product status
function status(){
  global $connect;

    if (isset($_GET['pro_id'])) {

      $pro_id = $_GET['pro_id'];
      $status = "select status from products where pro_id=$pro_id";
      $run_status = mysqli_query($connect,$status);

      while ($array = mysqli_fetch_assoc($run_status)) {
        $status = $array['status'];
        if ($status == 1) {
          echo "<div class='custom-control custom-radio'>
          <input type='radio' class='custom-control-input' id='on' name='status' value='1' checked>
          <label class='custom-control-label text-success' for='on'>ON</label>
          </div>
          <div class='custom-control custom-radio'>
          <input type='radio' class='custom-control-input' id='off' name='status' value='0'>
          <label class='custom-control-label text-success' for='off'>OFF</label>
          </div>";
        }else {
          echo "<div class='custom-control custom-radio'>
          <input type='radio' class='custom-control-input' id='on' name='status' value='1'>
          <label class='custom-control-label text-success' for='on'>ON</label>
          </div>
          <div class='custom-control custom-radio'>
          <input type='radio' class='custom-control-input' id='off' name='status' value='0'checked>
          <label class='custom-control-label text-success' for='off'>OFF</label>
          </div>";
        }
      }
    }
}


//cattegory list function
  function cat_list(){
    global $connect;
    global $cat_id_selected;
    if (isset($_GET['pro_id'])) {
      $pro_id = $_GET['pro_id'];
      $cat_id_sel = "select cat_id from products where pro_id=$pro_id";
      $run_cat_id = mysqli_query($connect,$cat_id_sel);
      $cat_id_select = mysqli_fetch_assoc($run_cat_id);
      $cat_id_selected = $cat_id_select['cat_id'];

    }

    $sel_cat = "select * from category";
    $run_sel_cat = mysqli_query($connect,$sel_cat);



    while ($array_cat = mysqli_fetch_assoc($run_sel_cat)) {

      $cat_id = $array_cat['cat_id'];
      $cat_title = $array_cat['cat_title'];

      if ($cat_id_selected == $cat_id) {
        echo "<div class='custom-control custom-radio'>
        <input type='radio' class='custom-control-input' id='$cat_title' name='category' value='$cat_id' checked>
        <label class='custom-control-label text-success' for='$cat_title'>$cat_title</label>
        </div>";
      }else {
        echo "<div class='custom-control custom-radio'>
        <input type='radio' class='custom-control-input' id='$cat_title' name='category' value='$cat_id'>
        <label class='custom-control-label text-success' for='$cat_title'>$cat_title</label>
        </div>";
      }

    }
  }

  //cattegory list function
    function brand_list(){
      global $connect;
      global $brand_id_selected;

      if (isset($_GET['pro_id'])) {
        $pro_id = $_GET['pro_id'];
        $brand_id_sel = "select brand_id from products where pro_id=$pro_id";
        $run_brand_id = mysqli_query($connect,$brand_id_sel);
        $brand_id_select = mysqli_fetch_assoc($run_brand_id);
        $brand_id_selected = $brand_id_select['brand_id'];

      }

      $sel_brand = "select * from brand";
      $run_sel_brand = mysqli_query($connect,$sel_brand);

      while ($array_brand = mysqli_fetch_assoc($run_sel_brand)) {

        $brand_id = $array_brand['brand_id'];
        $brand_title = $array_brand['brand_title'];

        if ($brand_id_selected == $brand_id) {
          echo "<div class='custom-control custom-radio'>
          <input type='radio' class='custom-control-input' id='$brand_title' name='brand' value='$brand_id' checked>
          <label class='custom-control-label text-success' for='$brand_title'>$brand_title</label>
          </div>";
        }else {
          echo "<div class='custom-control custom-radio'>
          <input type='radio' class='custom-control-input' id='$brand_title' name='brand' value='$brand_id'>
          <label class='custom-control-label text-success' for='$brand_title'>$brand_title</label>
          </div>";
        }

      }
    }











?>
