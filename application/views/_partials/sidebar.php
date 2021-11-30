<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('home') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('Pengumuman') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Pengumuman</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('Berkas') ?>">
            <i class="fas fa-fw fa-database"></i>
            <span>Berkas</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'calonmahasiswa' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-database"></i>
            <span>Data Mahasiswa</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('calonmahasiswa/inputData') ?>">Input Data Mahasiswa</a>
            <a class="dropdown-item" href="<?php echo site_url('calonmahasiswa/list') ?>">Daftar Mahasiswa</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'wawancara' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-database"></i>
            <span>Data Wawancara</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('wawancara/inputWawancara') ?>">Input Wawancara</a>
            <a class="dropdown-item" href="<?php echo site_url('wawancara/list') ?>">Daftar Wawancara</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'ujikesehatan' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-database"></i>
            <span>Data Uji Kesehatan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('ujikesehatan/inputUjikes') ?>">Input Uji Kesehatan</a>
            <a class="dropdown-item" href="<?php echo site_url('ujikesehatan/list') ?>">Daftar Uji Kesehatan</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('chart') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-power-off"></i>
            <span>Logout</span></a>
    </li>
</ul>