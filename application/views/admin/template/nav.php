<body>
  <div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href="<?= base_url('assets/backend/') ?>index.html"><img src="<?= base_url('assets/backend/') ?>assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="<?= base_url('assets/backend/') ?>index.html"><img src="<?= base_url('assets/backend/') ?>assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="<?= base_url('assets/backend/') ?>#" class="nav-link">
            <div class="nav-profile-image">
              <img src="<?= base_url('assets/backend/') ?>assets/images/faces/face1.jpg" alt="profile" />
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column pr-3">
              <span class="font-weight-medium mb-2">Henry Klein</span>
              <span class="font-weight-normal">$8,753.00</span>
            </div>
            <span class="badge badge-danger text-white ml-3 rounded">3</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin') ?>/c_dasboard">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('assets/backend/') ?>index.html">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin') ?>/c_layanan">
            <i class="mdi mdi-wunderlist menu-icon"></i>
            <span class="menu-title">Layanan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('assets/backend/') ?>pages/icons/mdi.html">
            <i class="mdi mdi-contacts menu-icon"></i>
            <span class="menu-title">Pengaduan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('assets/backend/') ?>pages/forms/basic_elements.html">
            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            <span class="menu-title">Pengaduan Layanan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('assets/backend/') ?>pages/charts/chartjs.html">
            <i class="mdi mdi-chart-bar menu-icon"></i>
            <span class="menu-title">Prasyarat</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('assets/backend/') ?>pages/tables/basic-table.html">
            <i class="mdi mdi-table-large menu-icon"></i>
            <span class="menu-title">Paraf</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('assets/backend/') ?>https://www.bootstrapdash.com/demo/breeze-free/documentation/documentation.html">
            <i class="mdi mdi-file-document-box menu-icon"></i>
            <span class="menu-title">Testimoni</span>
          </a>
        </li>
        <li class="nav-item sidebar-actions">
          <div class="nav-link">
            <div class="mt-4">
              <ul class="mt-4 pl-0">
                <li>Sign Out</li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </nav>

    <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
        <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="<?= base_url('assets/backend/') ?>index.html"><img src="<?= base_url('assets/backend/') ?>assets/images/logo-mini.svg" alt="logo" /></a>
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <i class="mdi mdi-menu"></i>
        </button>
        <ul class="navbar-nav navbar-nav-right ml-lg-auto">

          <li class="nav-item nav-profile dropdown border-0">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="<?= base_url('assets/backend/') ?>#" data-toggle="dropdown">
              <img class="nav-profile-img mr-2" alt="" src="<?= base_url('assets/backend/') ?>assets/images/faces/face1.jpg" />
              <span class="profile-name">Henry Klein</span>
            </a>
            <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?= base_url('assets/backend/') ?>#">
                <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
              <a class="dropdown-item" href="<?= base_url('assets/backend/') ?>#">
                <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>