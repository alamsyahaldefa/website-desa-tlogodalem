
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Desa Tlogodalem<span></span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="{{ Route::is('home') ? 'active' : '' }}">Home</a></li>
          <li><a href="/profil" class="{{ Route::is('profil') ? 'active' : '' }}">Profil</a></li>
          <li class="dropdown"><a href="/potensi-desa-pertanian" class="{{ Route::is('potensi.*') ? 'active' : '' }}"><span>Potensi Desa</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/potensi-desa-pertanian">Pertanian</a></li>
              <li><a href="/potensi-desa-UMKM">UMKM</a></li>
              <li><a href="/potensi-desa-wisata">Wisata</a></li>
            </ul>
          </li>
          <li><a href="/galeri" class="{{ Route::is('galeri') ? 'active' : '' }}">Galeri</a></li>
          <li><a href="/artikel-desa" class="{{ Route::is('artikel.*') ? 'active' : '' }}">Artikel Desa</a></li>
          <li class="dropdown"><a href="/budaya-bakalan" class="{{ Route::is('budaya.*') ? 'active' : '' }}"><span>Budaya dan Kearifan Lokal</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/budaya-bakalan">Dusun Bakalan</a></li>
              <li><a href="/budaya-senden">Dusun Senden</a></li>
              <li><a href="/budaya-ngadisari">Dusun Ngadisari</a></li>
              <li><a href="/budaya-wringin">Dusun Wringin</a></li>
            </ul>
          </li>
          <li><a href="/kontak" class="{{ Route::is('kontak') ? 'active' : '' }}">Kontak</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
