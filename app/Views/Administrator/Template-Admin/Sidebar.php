 <aside class="main-sidebar sidebar-light-warning elevation-4">
     <!-- Brand Logo -->
     <a href="<?= base_url() ?>/Beranda-Admin" class="brand-link navbar-warning">
         <img src="<?= base_url() ?>/Image/Icon/LogoAJA.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
         <span class="brand-text font-weight-bold text-white">TraveLand</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?= base_url() ?>/Image/Icon/profile.png" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="<?= base_url() ?>/Beranda-Admin" class="d-block"><?= session()->get('Nama') ?></a>
             </div>
         </div>

         <?php
            $tempData = explode("-", service('uri')->getSegment(1));
            ?>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item ">
                     <a href="<?= base_url() ?>/Beranda-Admin" class="nav-link <?= (in_array("Beranda", $tempData)  ? 'active' : '') ?>">
                         <i class="nav-icon bi bi-house-door"></i>
                         <p>
                             Beranda
                             <!-- <span class="right badge badge-danger">New</span> -->
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url() ?>/Data-Kegiatan" class="nav-link <?= (in_array("Kegiatan", $tempData)  ? 'active' : '') ?>">
                         <i class="nav-icon fas fa-newspaper"></i>
                         <p>
                             Data Kegiatan
                             <!-- <span class="right badge badge-danger">New</span> -->
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url() ?>/Data-Customer" class="nav-link <?= (in_array("Customer", $tempData)  ? 'active' : '') ?>">
                         <i class="nav-icon bi bi-people"></i>
                         <p>
                             Data Customer
                             <!-- <span class="right badge badge-danger">New</span> -->
                         </p>
                     </a>
                 </li>
                 <li class="nav-item <?= (in_array("Mitra", $tempData)  ? 'menu-is-opening menu-open' : '') ?>">
                     <a href="#" class="nav-link <?= (in_array("Mitra", $tempData)  ? 'active' : '') ?>">
                         <i class="nav-icon bi bi-diagram-3"></i>
                         <p>
                             Data Mitra
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item ">
                             <a href="<?= base_url() ?>/Mitra-Hotel" class="nav-link <?= (in_array("Hotel", $tempData)  ? 'active' : '') ?>">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Mitra Hotel</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url() ?>/Mitra-Rental" class="nav-link <?= (in_array("Rental", $tempData)  ? 'active' : '') ?>">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Mitra Rental</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url() ?>/Mitra-Wisata" class="nav-link <?= (in_array("Wisata", $tempData)  ? 'active' : '') ?>">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Mitra Wisata</p>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="nav-item <?= (in_array("Pemesanan", $tempData)  ? 'menu-is-opening menu-open' : '') ?>">
                     <a href="#" class="nav-link <?= (in_array("Pemesanan", $tempData)  ? 'active' : '') ?>">
                         <i class="nav-icon bi bi-layout-text-window-reverse"></i>
                         <p>
                             Data Pemesanan
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?= base_url() ?>/Pemesanan-Hotel" class="nav-link <?= (in_array("Hotel", $tempData)  ? 'active' : '') ?>">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Pemesanan Hotel</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url() ?>/Pemesanan-Rental" class="nav-link <?= (in_array("Rental", $tempData)  ? 'active' : '') ?>">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Pemesanan Rental</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url() ?>/Pemesanan-Wisata" class="nav-link <?= (in_array("Wisata", $tempData)  ? 'active' : '') ?>">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Pemesanan Wisata</p>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url() ?>/Daftar-Bank" class="nav-link <?= (in_array("Bank", $tempData)  ? 'active' : '') ?>">
                         <i class="nav-icon bi bi-bank"></i>
                         <p>
                             Daftar Bank
                             <!-- <span class="right badge badge-danger">New</span> -->
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url() ?>/Data-Version-Android" class="nav-link <?= (in_array("Version", $tempData)  ? 'active' : '') ?>">
                         <i class="nav-icon bi bi-file-earmark-code"></i>
                         <p>
                             Data Version Android
                             <!-- <span class="right badge badge-danger">New</span> -->
                         </p>
                     </a>
                 </li>




             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>