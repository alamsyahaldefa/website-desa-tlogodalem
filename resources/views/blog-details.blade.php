<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Website Desa Tlogodalem</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body>

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
          <li><a href="/">Home</a></li>
          <li><a href="/profil">Profil</a></li>
          <li class="dropdown"><a href="/potensi"><span>Potensi Desa</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/potensi-desa-pertanian">Pertanian</a></li>
              <li><a href="/potensi-desa-UMKM">UMKM</a></li>
              <li><a href="/potensi-desa-wisata">Wisata</a></li>
            </ul>
          </li>
          <li><a href="/galeri">Galeri</a></li>
          <li><a href="/artikel-desa" class="active">Artikel Desa</a></li>
          <li class="dropdown"><a href="#"><span>Budaya dan Kearifan Lokal</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/budaya-bakalan">Dusun Bakalan</a></li>
              <li><a href="/budaya-senden">Dusun Senden</a></li>
              <li><a href="/budaya-ngadisari">Dusun Ngadisari</a></li>
              <li><a href="/budaya-wringin">Dusun Wringin</a></li>
            </ul>
          </li>
          <li><a href="/kontak">Kontak</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('assets/img/breadcrumbs-bg.jpg') }});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Artikel Details</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/artikel-desa">Artikal Desa</a></li>
          <li>Artikel Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">

          <article class="blog-details">

            <div class="post-img">
            <img src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="{{ $artikel->title }}" class="img-fluid">
            </div>

            <h2 class="title">{{ $artikel->title }}</h2>

            <div class="meta-top">
            <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a>{{ $artikel->author_name }}</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time
                    datetime="{{ $artikel->date }}">{{ \Carbon\Carbon::parse($artikel->date)->locale('id')->translatedFormat('d F Y') }}</time></a></li>
            </ul>
            </div><!-- End meta top -->

            <div class="content">
            {!! $artikel->content !!}
            </div><!-- End post content -->

            <div class="meta-bottom">
            <i class="bi bi-folder"></i>
            <ul class="cats">
                <li><a>{{ $artikel->kategori->name }}</a></li>
            </ul>
            </div><!-- End meta bottom -->

            </article><!-- End blog post -->


          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="/artikel-desa?cari=" method="get" class="mt-3">
                  <input type="text" name="cari" placeholder="Cari artikel lainnya...">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Kategori</h3>
                <ul class="mt-3">
                  <!-- <li><a href="#">Kegiatan <span>(25)</span></a></li>
                  <li><a href="#">Budaya <span>(12)</span></a></li>
                  <li><a href="#">Kesehatan <span>(5)</span></a></li> -->
                  @foreach ($kategori_all as $kategori)
                    <li><a href="/artikel-desa?kategori={{ $kategori->name }}">{{ $kategori->name }} <span>({{ $kategori->artikel_desas_count }})</span></a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Artikel Terbaru</h3>

                <div class="mt-3">

                  @foreach ($artikel_recent as $recent_post)
                    <div class="post-item mt-3">
                        <img src="{{ asset('storage/' . $recent_post->thumbnail) }}" alt="{{ $recent_post->title }}">
                        <div>
                        <h4><a href="/artikel/{{ $recent_post->slug }}">{{ $recent_post->title }}</a></h4>
                        <time datetime="{{ $recent_post->date }}">{{ \Carbon\Carbon::parse($recent_post->date)->locale('id')->translatedFormat('d F Y') }}</time>
                        </div>
                    </div><!-- End recent post item-->
                  @endforeach
                </div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">

<div class="footer-content position-relative">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-6 col-md-8 text-center">
        <div class="footer-info">
          <h3>Desa Tlogodalem</h3>
          <div class="social-links d-flex justify-content-center mt-3">
            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-youtube"></i></a>
            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>
      </div><!-- End footer info column-->
    </div>
  </div>
</div>

<div class="footer-legal text-center position-relative">
  <div class="container">
    <div class="copyright">
      &copy; Copyright 2025 <strong><span>Desa Tlogodalem</span></strong>. 
    </div>
    <div class="credits">
      Design by <strong>KKN-PPM UGM 2025 Semanak Kertek.</strong>
    </div>
  </div>
</div>

</footer>
<!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>