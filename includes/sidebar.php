<div class=" bg-white p-2">
  <div class="text-center bg-success  py-2 border-bottom">
    <span class="display-7">MENU</span>
  </div>
  <div class="btn-group btn-group-vertical btn-block p-0 py-2">
    <a class="btn btn-success rounded-0" href="index.php">Home</a>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseTwo">
      Category <i class="fas fa-caret-down float-right text-dark display-7"></i> </button>
    <div id="collapseTwo" class="collapse btn-group btn-group-vertical btn-block">
      <?php category(); ?>
    </div>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseOne">
      Brand <i class="fas fa-caret-down float-right text-dark display-7"></i> </button>
    <div id="collapseOne" class="collapse btn-group btn-group-vertical btn-block">
      <?php brand(); ?>
    </div>
    <a class="btn btn-success" href="#">Service</a>
    <a class="btn btn-success rounded-0" href="#">Contact</a>
  </div>
</div>
