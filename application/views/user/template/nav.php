<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


  <nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('assets/frontend/') ?>index.html"><img src="<?= base_url('assets/frontend/') ?>images/logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="<?= base_url('assets/frontend/') ?>#" data-toggle="dropdown">Home
              <span><i class="ti-angle-down"></i></span>
            </a>
            <!-- Dropdown list -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item active" href="<?= base_url('assets/frontend/') ?>index.html">Homepage</a></li>
              <li><a class="dropdown-item" href="<?= base_url('assets/frontend/') ?>homepage-2.html">Homepage 2</a></li>
              <li><a class="dropdown-item active3" href="<?= base_url('assets/frontend/') ?>homepage-3.html">Homepage 3</a></li>

              <li class="dropdown dropdown-submenu dropright">
                <a class="dropdown-item dropdown-toggle" href="<?= base_url('assets/frontend/') ?>#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                  <li><a class="dropdown-item" href="<?= base_url('assets/frontend/') ?>index.html">Submenu 11</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('assets/frontend/') ?>index.html">Submenu 12</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown @@pages">
            <a class="nav-link dropdown-toggle" href="<?= base_url('assets/frontend/') ?>#" data-toggle="dropdown">Pages
              <span><i class="ti-angle-down"></i></span>
            </a>
            <!-- Dropdown list -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item @@team" href="<?= base_url('assets/frontend/') ?>team.html">Team</a></li>
              <li><a class="dropdown-item @@career" href="<?= base_url('assets/frontend/') ?>career.html">Career</a></li>
              <li><a class="dropdown-item @@blog" href="<?= base_url('assets/frontend/') ?>blog.html">Blog</a></li>
              <li><a class="dropdown-item @@blogSingle" href="<?= base_url('assets/frontend/') ?>blog-single.html">Blog Single</a></li>
              <li><a class="dropdown-item @@privacy" href="<?= base_url('assets/frontend/') ?>privacy-policy.html">Privacy</a></li>
              <li><a class="dropdown-item @@faq" href="<?= base_url('assets/frontend/') ?>FAQ.html">FAQ</a></li>
              <li><a class="dropdown-item" href="<?= base_url('assets/frontend/') ?>sign-in.html">Sign In</a></li>
              <li><a class="dropdown-item" href="<?= base_url('assets/frontend/') ?>sign-up.html">Sign Up</a></li>
              <li><a class="dropdown-item" href="<?= base_url('assets/frontend/') ?>404.html">404</a></li>
              <li><a class="dropdown-item" href="<?= base_url('assets/frontend/') ?>comming-soon.html">Coming Soon</a></li>

              <li class="dropdown dropdown-submenu dropleft">
                <a class="dropdown-item dropdown-toggle" href="<?= base_url('assets/frontend/') ?>#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                  <li><a class="dropdown-item" href="<?= base_url('assets/frontend/') ?>index.html">Submenu 21</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('assets/frontend/') ?>index.html">Submenu 22</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item @@about">
            <a class="nav-link" href="<?= base_url('assets/frontend/') ?>about.html">About</a>
          </li>
          <li class="nav-item @@contact">
            <a class="nav-link" href="<?= base_url('assets/frontend/') ?>contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>