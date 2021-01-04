<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
    <a class="navbar-brand mr-auto mr-lg-0" href="index.php">E-COM</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="container-fluid">
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                        id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <?php category(); ?>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                        id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Brands</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <?php brand(); ?>
                    </div>
                </li>
            </ul>
            <div class="m-auto w-50">
                <form class="" action="search.php" method="get">
                    <div class="input-group">
                        <input class="form-control form-control-success" type="text" name="search_query" value="" placeholder="Search...">
                        <div class="input-group-append">
                        <button class="btn btn-success" type="submit" name="search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="cart.php" class="nav-item nav-link notifications"><i class="fa fa-cart-plus fa-2x"></i><span class="badge"><?php cart_item(); ?></span></a>
                </li>
                <?php if(isset($_SESSION['email_phone'])){ ?>
                    <li class="nav-item dropdown">
                        <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo substr($_SESSION['email_phone'], 0, 6);?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md-right text-center" aria-labelledby="bd-versions">
                            <!-- <div class="dropdown-divider"></div> -->
                            <a class='dropdown-item' href='logout.php'>Logout</a>
                        </div>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">Register</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>