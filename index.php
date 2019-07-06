<?php
//including all functions here
include("includes/include_functions.php");
@session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- all css file of this page -->
    <?php include("includes/css.php"); ?>

    <title>BIGBAZI | Best Online Shop</title>
  </head>
  <body style="background:#fafafa;">

    <!-- including navbar for this page -->
    <?php include("includes/nav.php") ?>

    <section class="container py-2 p-0">
      <div class="row">
        <!-- sidebar container box size is col-sm-2 -->
        <div class="col-sm-2 p-0">
          <?php include("includes/sidebar.php") ?>
        </div>

        <div class="col-sm-10 px-2 p-0">
          <?php addCart(); ?>
          <div class="">
            <div class=" p-2 border-bottom bg-white">
              <span class="display-7">NEW PRODUCTS</span>
            </div>
            <div class="row p-2">
              <?php new_product(); ?>
            </div>

          </div>

          <div class="bg-white my-2">
            <div class=" p-2 border-bottom">
              <span class="display-7">BRANDS PRODUCTS</span>
            </div>
            <div class="p-2">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#apple"> <img class="img-fluid" style="width:100%;max-width:83.88px;" src="brand_images/<?php apple_image(); ?>" alt=""> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#google"><img class="img-fluid" style="width:100%;max-width:83.88px;" src="brand_images/<?php google_image(); ?>" alt=""></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#dell"><img class="img-fluid" style="width:100%;max-width:83.88px;" src="brand_images/<?php dell_image(); ?>" alt=""></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#hp"><img class="img-fluid" style="width:100%;max-width:83.88px;" src="brand_images/<?php hp_image(); ?>" alt=""></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#samsung"><img class="img-fluid" style="width:100%;max-width:83.88px;" src="brand_images/<?php samsung_image(); ?>" alt=""></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#nokia"><img class="img-fluid" style="width:100%;max-width:83.88px;" src="brand_images/<?php nokia_image(); ?>" alt=""></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#lenevo"><img class="img-fluid" style="width:100%;max-width:83.88px;" src="brand_images/<?php lenovo_image(); ?>" alt=""></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#sony"><img class="img-fluid" style="width:100%;max-width:83.88px;" src="brand_images/<?php sony_image(); ?>" alt=""></a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div id="apple" class="border border-top-0 tab-pane active"><br>
                  <div class=" p-2">
                    <span class="display-7">APPLE PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card(1); ?>
                  </div>
                </div>
                <div id="google" class="border border-top-0 tab-pane"><br>
                  <div class=" p-2">
                    <span class="display-7">GOOGLE PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card(5); ?>
                  </div>
                </div>
                <div id="dell" class="border border-top-0 tab-pane"><br>
                  <div class=" p-2">
                    <span class="display-7">DELL PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card(7); ?>
                  </div>
                </div>
                <div id="hp" class="border border-top-0 tab-pane"><br>
                  <div class=" p-2">
                    <span class="display-7">HP PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card(3); ?>
                  </div>
                </div>
                <div id="sony" class="border border-top-0 tab-pane"><br>
                  <div class=" p-2">
                    <span class="display-7">SONY PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card(8); ?>
                  </div>
                </div>
                <div id="nokia" class="border border-top-0 tab-pane"><br>
                  <div class=" p-2">
                    <span class="display-7">NOKIA PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card(6); ?>
                  </div>
                </div>
                <div id="lenevo" class="border border-top-0 tab-pane"><br>
                  <div class=" p-2">
                    <span class="display-7">LENEVO PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card(4); ?>
                  </div>
                </div>
                <div id="samsung" class="border border-top-0 tab-pane"><br>
                  <div class=" p-2">
                    <span class="display-7">SAMSUNG PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card(2); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="bg-white my-2">
            <div class=" p-2 border-bottom">
              <span class="display-7">CATEGORY PRODUCTS</span>
            </div>
            <div class="p-2">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#laptop"> <img class="img-fluid" style="width:100%;max-width:83.88px;" src="category_images/<?php laptop_image(); ?>" alt=""> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tablet"><img class="img-fluid" style="width:100%;max-width:83.88px;" src="category_images/<?php tablet_image(); ?>" alt=""></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#smartphone"><img class="img-fluid" style="width:100%;max-width:83.88px;" src="category_images/<?php smartphone_image(); ?>" alt=""></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#smartwatch"><img class="img-fluid" style="width:100%;max-width:83.88px;" src="category_images/<?php smartwatch_image(); ?>" alt=""></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#smartspeaker"><img class="img-fluid" style="width:100%;max-width:83.88px;" src="category_images/<?php smartspeaker_image(); ?>" alt=""></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#headphone"><img class="img-fluid" style="width:100%;max-width:83.88px;" src="category_images/<?php headphone_image(); ?>" alt=""></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#pc"><img class="img-fluid" style="width:100%;max-width:83.88px;" src="category_images/<?php pc_image(); ?>" alt=""></a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div id="laptop" class="border border-top-0 tab-pane active"><br>
                  <div class=" p-2">
                    <span class="display-7">LAPTOP PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card_category(1); ?>
                  </div>
                </div>
                <div id="tablet" class="border border-top-0 tab-pane"><br>
                  <div class=" p-2">
                    <span class="display-7">TABLET PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card_category(2); ?>
                  </div>
                </div>
                <div id="smartphone" class="border border-top-0 tab-pane"><br>
                  <div class=" p-2">
                    <span class="display-7">SMARTPHONE PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card_category(3); ?>
                  </div>
                </div>
                <div id="smartwatch" class="border border-top-0 tab-pane"><br>
                  <div class=" p-2">
                    <span class="display-7">SMARTWATCH PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card_category(4); ?>
                  </div>
                </div>
                <div id="smartspeaker" class="border border-top-0 tab-pane"><br>
                  <div class=" p-2">
                    <span class="display-7">SMARTSPEAKER PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card_category(5); ?>
                  </div>
                </div>
                <div id="headphone" class="border border-top-0 tab-pane"><br>
                  <div class=" p-2">
                    <span class="display-7">HEADPHONE PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card_category(6); ?>
                  </div>
                </div>
                <div id="pc" class="border border-top-0 tab-pane"><br>
                  <div class=" p-2">
                    <span class="display-7">PC PRODUCTS</span>
                  </div>
                  <div class="row p-2">
                    <?php product_card_category(7); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- including footer content -->
    <?php include("includes/footer.php") ?>
  <!-- all script of this page -->
  <?php include("includes/script.php") ?>
  </body>
</html>
