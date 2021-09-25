<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


  <nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('assets/frontend/') ?>index.html"><img src="<?= base_url('assets/frontend/') ?>images/logo_1.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active @@Beranda">
            <a class="nav-link" href="<?= base_url('assets/frontend/') ?>Beranda.html">Beranda</a>
          </li>
          <li class="nav-item @@Layanan">
            <a class="nav-link" href="<?= base_url() ?>user/layanan">Layanan</a>
          </li>
          <li class="nav-item @@Pengaduan">
            <a class="nav-link" href="<?= base_url() ?>user/pengaduan">Pengaduan</a>
          </li>
          <li class="nav-item @@Login">
            <a class="nav-link" href="<?= base_url() ?>user/masuk">Masuk/Daftar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>