 <aside class="main-sidebar sidebar-light-warning elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link navbar-warning">
         <img src="<?= base_url() ?>/Image/Icon/LogoAJA.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
         <span class="brand-text font-weight-bold text-white">TraveLand</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?= base_url() ?>/AdminLTE/dists/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Alexander Pierce</a>
             </div>
         </div>



         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item ">
                     <a href="<?= base_url() ?>/" class="nav-link active">
                         <i class="nav-icon fas fa-home"></i>
                         <p>
                             Beranda
                             <!-- <span class="right badge badge-danger">New</span> -->
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url() ?>/Berita-Event" class="nav-link">
                         <i class="nav-icon fas fa-newspaper"></i>
                         <p>
                             Berita & Event
                             <!-- <span class="right badge badge-danger">New</span> -->
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url() ?>/Data-User" class="nav-link">
                         <i class="nav-icon fas fa-users"></i>
                         <p>
                             Data User
                             <!-- <span class="right badge badge-danger">New</span> -->
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-hands-helping"></i>
                         <p>
                             Data Mitra
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?= base_url() ?>/Mitra-Hotel" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Mitra Hotel</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url() ?>/Mitra-Rental" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Mitra Rental</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url() ?>/Mitra-Wisata" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Mitra Wisata</p>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-list-alt"></i>
                         <p>
                             Data Pemesanan
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?= base_url() ?>/Pemesanan-Hotel" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Pemesanan Hotel</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url() ?>/Pemesanan-Rental" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Pemesanan Rental</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url() ?>/Pemesanan-Wisata" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Pemesanan Wisata</p>
                             </a>
                         </li>

                     </ul>
                 </li>




             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>