<footer class="container-fluid p-0" style="background:#1b5e20;">
  <div class="container py-4">
    <div class="row">
      <div class="col-2 text-white">
        <h5>Categories</h5>
        <?php category_items(); ?>
      </div>
      <div class="col-2 text-white">
        <h5>Brands</h5>
        <?php brand_items(); ?>
      </div>
      <div class="col-4">
        <form class="" action="index.html" method="post">
          <input class="form-control form-control-success" type="text" name="" value="" placeholder="E-mail">
          <textarea class="form-control form-control-success my-2" name="name" rows="4" cols="80" placeholder="Write a message..."></textarea>
          <input class="btn btn-light float-right" type="submit" name="" value="SEND">
        </form>
      </div>
      <div class="col-4 text-white">
        <h5>Follow Us</h5>
        <a class="border btn btn-light" href="#"><i class="fab fa-facebook-f text-success"></i></a>
        <a class="border btn btn-light" href="#"><i class="fab fa-twitter text-success"></i></a>
        <a class="border btn btn-light" href="#"><i class="fab fa-instagram text-success"></i></a>
      </div>
    </div>
  </div>
  <div class="bg-dark2 text-center text-white">
    <span>Copyright &copy 2018 DIGBAZI.COM. All Rights Reserved</span>
  </div>
</footer>
