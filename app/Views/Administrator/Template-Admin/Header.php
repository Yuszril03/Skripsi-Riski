  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?= base_url() ?>/Image/Icon/penuhLogo.png" alt="AdminLTELogo" width="160">
  </div>

  <nav class="main-header navbar navbar-expand navbar-light navbar-warning">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->

          <!-- Notifications Dropdown Menu -->
          
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="bi bi-person-circle text-white"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                  <p class="ml-3 mt-2 mb-2 text-bold text-muted">Hai, <span id="subNamaHEader" class="text-capitalize"></span><?= session()->get('Nama') ?>!</p>
                  <a href="<?= base_url() ?>/Kata-Sandi" class="dropdown-item">
                      <i class="bi bi-key"></i> Kata Sandi
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="<?= base_url() ?>/Keluar-Admin" class="dropdown-item">
                      <i class="bi bi-box-arrow-left"></i> Keluar
                  </a>

              </div>
          </li>
      </ul>
  </nav>