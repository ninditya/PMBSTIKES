<nav class="navbar navbar-expand navbar-dark static-top" style="background-color: #045FB4">
    
    <button class="btn btn-link btn-lg text-white order-1 order-sm-0 mr-3 ml-1" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <a class="navbar-brand" href="<?php echo site_url('home') ?>">
        <img src="<?php echo base_url() ?>assets/images/icon.png" height="50" alt="">
        <b>S T I K E S</b> BETHESDA YAKKUM YOGYAKARTA
    </a>

    <!-- Navbar Search -->
    <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" action="http://localhost/pmbstikes/calonmahasiswa" method="post">
        <div class="input-group">
            <input type="text" class="form-control" name="keyword" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-light" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
 -->
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle text-light" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i> Administrator
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>