<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Website Desa Tlogodalem - Profil</title>
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

  @include('partials.header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Profil Desa</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Profil Desa</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Sejarah Desa Section ======= -->
    <section id="sejarah" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url(assets/img/tlogodalem/w1.png);"></div>

          <div class="col-lg-7">
            <h2>Sejarah Desa</h2>
            <div class="our-story">
              <h4>Berdiri 1920</h4>
              <h3>Awal Mula Desa</h3>
              <p>Desa kami didirikan pada tahun 1920 oleh para pendahulu yang datang dari berbagai daerah untuk mencari kehidupan yang lebih baik. Mereka memilih lokasi ini karena tanahnya yang subur dan sumber air yang melimpah.</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Pertama kali dibuka sebagai daerah pertanian</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Berkembang menjadi pusat perdagangan lokal</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Menjadi desa definitif pada tahun 1950</span></li>
              </ul>
              <p>Seiring berjalannya waktu, desa ini terus berkembang dan menjadi salah satu desa yang maju di wilayah kecamatan. Gotong royong dan semangat kebersamaan menjadi kunci kemajuan desa hingga saat ini.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Sejarah Desa Section -->

    <!-- ======= Visi Misi Section ======= -->
    <section id="visi-misi" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/tlogodalem/w1.png);" data-aos="zoom-in"
            data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Visi & Misi Desa</h3>

            <div class="mb-4">
              <h4 style="color: #2c4964; margin-bottom: 15px;">VISI</h4>
              <p style="font-style: italic; font-size: 16px;">"Mewujudkan Desa yang Maju, Sejahtera, dan Berbudaya Berdasarkan Nilai-Nilai Gotong Royong"</p>
            </div>

            <div>
              <h4 style="color: #2c4964; margin-bottom: 15px;">MISI</h4>

              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-arrow-right-circle flex-shrink-0"></i>
                <div>
                  <h5>Pembangunan Infrastruktur</h5>
                  <p>Meningkatkan pembangunan infrastruktur desa untuk mendukung perekonomian dan kesejahteraan masyarakat</p>
                </div>
              </div>

              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-arrow-right-circle flex-shrink-0"></i>
                <div>
                  <h5>Pemberdayaan Ekonomi</h5>
                  <p>Mengembangkan potensi ekonomi desa melalui UMKM dan sektor pertanian yang berkelanjutan</p>
                </div>
              </div>

              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-arrow-right-circle flex-shrink-0"></i>
                <div>
                  <h5>Peningkatan SDM</h5>
                  <p>Meningkatkan kualitas sumber daya manusia melalui pendidikan dan pelatihan keterampilan</p>
                </div>
              </div>

              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-arrow-right-circle flex-shrink-0"></i>
                <div>
                  <h5>Pelestarian Budaya</h5>
                  <p>Melestarikan nilai-nilai budaya lokal dan tradisi gotong royong dalam kehidupan bermasyarakat</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Visi Misi Section -->

     <!-- ======= Stats Counter Section ======= -->
     <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{ $profil_umum->jumlah_penduduk }}" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Jumlah Penduduk</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-house color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{ $profil_umum->jumlah_kepala_keluarga }}" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Kepala Keluarga</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-geo-alt color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Dusun</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-award color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{ $profil_umum->jumlah_prestasi_desa }}" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Prestasi Desa</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Video Profil Section ======= -->
    <section id="video-profil" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header text-center">
          <h2>Video Profil Desa</h2>
          <p>Saksikan keindahan dan potensi desa kami melalui video profil yang menampilkan berbagai aspek kehidupan dan pembangunan desa</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="video-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
              <iframe
                src="{{ $profil_umum->GetEmbedUrlVideoProfil() }}"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mt-4">
          <div class="col-lg-8 text-center">
            <p class="mb-0">Video ini menampilkan keindahan alam, potensi ekonomi, dan kehidupan masyarakat desa yang harmonis</p>
          </div>
        </div>

      </div>
    </section><!-- End Video Profil Section -->

    <!-- ======= Jajaran Perangkat Desa Section ======= -->
    <section id="perangkat-desa" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Jajaran Perangkat Desa</h2>
          <p>Perangkat desa yang berkomitmen untuk melayani dan memajukan desa demi kesejahteraan seluruh masyarakat</p>
        </div>

        <div class="row gy-5">

          @foreach ($list_perangkat as $perangkat)
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                <img src="{{ $perangkat->photo ? asset('storage/'. $perangkat->photo) : asset('storage/perangkat-desa/default_profile.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                    <!-- <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a> -->
                </div>
                </div>
                <div class="member-info text-center">
                <h4>{{ $perangkat->name }}</h4>
                <span>{{ $perangkat->position }}</span>
                </div>
            </div><!-- End Team Member -->
          @endforeach

        </div>

      </div>
    </section><!-- End Jajaran Perangkat Desa Section -->



  </main><!-- End #main -->

  @include('partials.footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
