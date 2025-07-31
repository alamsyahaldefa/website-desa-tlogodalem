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

  <style>
    .post-img {
      width: 100%;
      height: 250px;
      overflow: hidden;
      position: relative;
    }

    .post-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      display: block;
    }

    /* Fix untuk masalah footer overlap pada home page */
    #main {
      min-height: calc(100vh - 100px);
      padding-bottom: 80px;
    }

    /* Khusus untuk section galeri di home */
    #galeri {
      padding-bottom: 80px !important;
      margin-bottom: 40px;
    }

    #galeri .portfolio-isotope {
      min-height: 500px;
    }

    #galeri .portfolio-container {
      min-height: 400px;
    }

    /* Pastikan footer tidak overlap */
    .footer {
      margin-top: auto;
      position: relative;
      z-index: 1;
      clear: both;
    }


    /* Ensure proper spacing for sections */
    section {
      position: relative;
      overflow: hidden;
    }

    /* Fix untuk isotope layout */
    .portfolio-container.clearfix::after {
      content: "";
      display: table;
      clear: both;
    }
  </style>

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
          <li><a href="/" class="active">Home</a></li>
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
          <li><a href="/artikel-desa">Artikel Desa</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <!-- <h2 data-aos="fade-down">Selamat Datang di <span>Desa Tlogodalem</span></h2> -->
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/tlogodalem/td1.jpg)">
      </div>
      <div class="carousel-item" style="background-image: url(assets/img/tlogodalem/td2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/tlogodalem/td3.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

<!-- ======= Profil Desa Section ======= -->
<section id="profil-desa" class="get-started section-bg">
  <div class="container">

    <div class="row justify-content-between gy-4">

      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
        <div class="content">
          <h3>Profil Desa Tlogodalem</h3>
          <p>Desa Tlogodalem merupakan salah satu desa yang terletak di Kecamatan Kertek, Kabupaten Wonosobo, Jawa Tengah. 
            Desa ini memiliki luas wilayah sekitar 312 hektar dengan jumlah penduduk kurang lebih 2.850 jiwa yang terdiri dari 
            892 kepala keluarga. Batas wilayah utara yaitu Damarkasiyan dan Tlogomulyo, batas wilayah timur yaitu Karangluhur, batas wilayah selatan yaitu
            Ngadikusuman, dan batas wilayah barat yaitu Banjar dan Bejiarum.</p>
          <p>Desa Tlogodalem terkenal dengan keindahan alamnya yang asri, udara yang sejuk, dan masyarakat yang ramah. 
            Mayoritas penduduk bermata pencaharian sebagai petani dan peternak. Desa ini juga memiliki potensi wisata alam 
            yang menarik untuk dikembangkan.</p>
        </div>
      </div>

      <div class="col-lg-5 d-flex align-items-center justify-content-center" data-aos="fade">
        <div class="text-center">
          <img src="assets/img/tlogodalem/Lambang_Kabupaten_Wonosobo.webp" alt="Logo Pemerintah Kabupaten Wonosobo" class="img-fluid mb-3" style="max-width: 200px;">
          <h4 class="mb-2">Pemerintah Kabupaten Wonosobo</h4>
          <p class="text-muted">Desa Tlogodalem, Kecamatan Kertek</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Profil Desa Section -->

<!-- ======= Artikel Section ======= -->
<section id="artikel" class="recent-blog-posts py-5">
  <div class="container" data-aos="fade-up">

    <div class="section-header text-center mb-5">
      <h2>Artikel & Berita Desa</h2>
      <p>Informasi terkini seputar kegiatan, program, dan perkembangan Desa Tlogodalem</p>
    </div>

    <div class="row gy-5" id="artikel-container">
      <!-- Artikel akan dimuat di sini -->
      <div class="col-12 text-center">
        <div class="spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <p>Memuat artikel...</p>
      </div>
    </div>

  </div>
</section>
<!-- End Artikel Section -->

<!-- ======= Galeri Section ======= -->
<section id="galeri" class="projects">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Galeri Desa</h2>
      <p>Dokumentasi kegiatan dan keindahan Desa Tlogodalem dalam berbagai momen berharga</p>
    </div>

    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="grid"
      data-portfolio-sort="original-order">

      <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100" id="filter-list">
        <li data-filter="*" class="filter-active">Semua</li>
        @foreach ($categories as $category)
            <li data-filter=".filter-{{ strtolower($category['name']) }}">{{ $category['name'] }}</li>
        @endforeach
      </ul>
      <!-- End Gallery Filters -->

      <div class="row gy-4 portfolio-container clearfix" data-aos="fade-up" data-aos-delay="200" id="portfolio-container">
        <!-- Loading indicator -->
        <div class="gallery-loading" id="gallery-loading">
          <!-- Loading content will be shown here -->
        </div>
      </div><!-- End Gallery Container -->



    </div>
  </div>
</section><!-- End Galeri Section -->

<!-- ======= Kontak Section ======= -->
<section id="kontak" class="alt-services">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Kontak Desa</h2>
      <p>Hubungi kami untuk informasi lebih lanjut atau keperluan administrasi desa</p>
    </div>

    <div class="row justify-content-around gy-4">
      <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="map-container" style="height: 400px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.123456789!2d109.123456!3d-7.123456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f6b123456789%3A0x123456789abcdef!2sTlogodalem%2C%20Kertek%2C%20Wonosobo%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid"
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Peta Lokasi Desa Tlogodalem">
          </iframe>
        </div>
        <div class="text-center mt-3">
          <small class="text-muted">Lokasi Kantor Desa Tlogodalem, Kec. Kertek, Kab. Wonosobo</small>
        </div>
      </div>

      <div class="col-lg-5 d-flex flex-column justify-content-center">
        <h3>Informasi Kontak Desa Tlogodalem</h3>
        <p>Kantor Desa Tlogodalem siap melayani masyarakat dengan berbagai layanan administrasi dan informasi yang dibutuhkan.</p>

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h4><a class="stretched-link">Alamat</a></h4>
            <p>Ngadisari, Tlogodalem, Kec. Kertek, Kabupaten Wonosobo, Jawa Tengah 56371</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h4><a class="stretched-link">Telepon</a></h4>
            <p>(0286) 321-456 | Fax: (0286) 321-457</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h4><a class="stretched-link">Email</a></h4>
            <p>desatlogodalem@kertek.wonosobo.go.id</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-clock flex-shrink-0"></i>
          <div>
            <h4><a class="stretched-link">Jam Pelayanan</a></h4>
            <p>Senin - Kamis: 08.00 - 14.00 WIB<br>Jumat: 07.30 - 11.00 WIB</p>
          </div>
        </div><!-- End Icon Box -->

      </div>
    </div>

  </div>
</section><!-- End Kontak Section -->

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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    // Initialize AOS
    AOS.init();

    // Function to format date
    function formatDate(dateString) {
        const date = new Date(dateString);
        const options = { day: 'numeric', month: 'long', year: 'numeric' };
        return date.toLocaleDateString('id-ID', options);
    }

    // Function to truncate text
    function truncateText(text, maxLength = 100) {
        if (text.length <= maxLength) return text;
        return text.substr(0, maxLength) + '...';
    }

    // Function to strip HTML tags
    function stripHtml(html) {
        const tmp = document.createElement('div');
        tmp.innerHTML = html;
        return tmp.textContent || tmp.innerText || '';
    }

    // Function to load articles from API
    async function loadArticles() {
        try {
            const response = await fetch('http://127.0.0.1:8000/api/artikel-desa');
            
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            
            const articles = await response.json();
            displayArticles(articles);
            
        } catch (error) {
            console.error('Error loading articles:', error);
            document.getElementById('artikel-container').innerHTML = `
                <div class="col-12 text-center">
                    <div class="alert alert-danger" role="alert">
                        <i class="bi bi-exclamation-triangle"></i>
                        Gagal memuat artikel. Silakan coba lagi nanti.
                    </div>
                </div>
            `;
        }
    }

    // Function to display articles
    function displayArticles(articles) {
        const container = document.getElementById('artikel-container');
        
        // Filter hanya artikel yang published (jika ada status filter)
        const publishedArticles = articles.data.filter(article => article.status === 'published');
        
        // Limit to 3 articles for homepage
        const limitedArticles = publishedArticles.slice(0, 3);

        if (limitedArticles.length === 0) {
            container.innerHTML = `
                <div class="col-12 text-center">
                    <div class="alert alert-info" role="alert">
                        <i class="bi bi-info-circle"></i>
                        Belum ada artikel yang tersedia.
                    </div>
                </div>
            `;
            return;
        }
        
        let articlesHTML = '';
        
        limitedArticles.forEach((article, index) => {
            const delay = (index % 3) * 100 + 100; // Staggered animation delay
            const thumbnailUrl = article.thumbnail 
                ? `http://127.0.0.1:8000/storage/${article.thumbnail}` 
                : 'assets/img/blog/default-blog.jpg';
            
            // Extract plain text from HTML content for preview
            const contentPreview = truncateText(stripHtml(article.content), 120);
            
            articlesHTML += `
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="${delay}">
                    <div class="post-item position-relative h-100">
                        <div class="post-img position-relative overflow-hidden">
                            <img src="${thumbnailUrl}" class="img-fluid" alt="${article.title}" style="height: 250px; object-fit: cover; width: 100%;">
                            <span class="post-date">${formatDate(article.date)}</span>
                        </div>
                        
                        <div class="post-content d-flex flex-column p-4">
                            <h3 class="post-title">${article.title}</h3>
                            
                            <div class="meta d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person"></i> 
                                    <span class="ps-2">${article.author_name}</span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-folder2"></i> 
                                    <span class="ps-2">${article.kategori}</span>
                                </div>
                            </div>
                            
                            <div class="post-excerpt mb-3">
                                <p class="text-muted">${contentPreview}</p>
                            </div>
                            
                            <hr>
                            
                            <a href="/artikel/${article.slug}" class="readmore stretched-link mt-auto">
                                <span>Baca Selengkapnya</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            `;
        });
        
        container.innerHTML = articlesHTML;
    }

    // Load articles when page loads
    document.addEventListener('DOMContentLoaded', function() {
        loadArticles();
    });
    </script>

    <script>
        // URL API for gallery
        const galleryApiUrl = 'http://127.0.0.1:8000/api/galeri';

        // Function to fetch gallery data from API
        async function fetchGalleryData() {
            const loadingElement = document.getElementById('gallery-loading');
            const portfolioContainer = document.getElementById('portfolio-container');
            
            try {
                // Show loading
                loadingElement.style.display = 'flex';
                
                const response = await fetch(galleryApiUrl);
                const data = await response.json();
                
                // Hide loading
                loadingElement.style.display = 'none';
                
                populateGallery(data.data);
                
                // Simple layout recalculation without Isotope
                setTimeout(() => {
                    portfolioContainer.style.minHeight = 'auto';
                    const galeriSection = document.getElementById('galeri');
                    if (galeriSection) {
                        galeriSection.style.minHeight = 'auto';
                    }
                }, 200);
                
            } catch (error) {
                console.error("Error fetching gallery data:", error);
                loadingElement.innerHTML = '<p class="text-danger">Error loading gallery. Please try again later.</p>';
            }
        }

        // Function to populate gallery with data from API
        function populateGallery(items) {
            const portfolioContainer = document.getElementById('portfolio-container');
            
            // Clear any existing gallery items except loading
            const existingItems = portfolioContainer.querySelectorAll('.portfolio-item');
            existingItems.forEach(item => item.remove());
            
            // Limit to 6 items for homepage
            const limitedItems = items.slice(0, 6);

            if (limitedItems.length === 0) {
                portfolioContainer.innerHTML = '<div class="col-12 text-center"><p class="text-muted">Belum ada galeri yang tersedia.</p></div>';
                return;
            }

            // Loop through each item and create a gallery item
            limitedItems.forEach((item, index) => {
                const itemElement = document.createElement('div');
                itemElement.classList.add('col-lg-4', 'col-md-6', 'portfolio-item', `filter-${item.kategori.toLowerCase()}`);
                
                // Add AOS animation with delay
                itemElement.setAttribute('data-aos', 'fade-up');
                itemElement.setAttribute('data-aos-delay', (index * 100) + 300);

                itemElement.innerHTML = `
                <div class="portfolio-content h-100">
                    <img src="${item.image_path}" class="img-fluid" alt="${item.caption}" loading="lazy">
                    <div class="portfolio-info">
                    <h4>${item.kategori}</h4>
                    <p>${item.caption}</p>
                    <a href="${item.image_path}" title="${item.kategori}" data-gallery="portfolio-gallery-${item.kategori.toLowerCase()}" class="glightbox preview-link">
                        <i class="bi bi-zoom-in"></i>
                    </a>
                    <a href="${item.url_artikel || '#'}" title="Detail" class="details-link">
                        <i class="bi bi-link-45deg"></i>
                    </a>
                    </div>
                </div>
                `;

                portfolioContainer.appendChild(itemElement);
            });

            // Reinitialize GLightbox and AOS after content is loaded
            setTimeout(() => {
                if (window.GLightbox) {
                    GLightbox({
                        selector: '.glightbox'
                    });
                }
                
                // Refresh AOS for new elements
                if (window.AOS) {
                    AOS.refresh();
                }
                
                // Initialize filter after content is loaded
                initGalleryFilter();
            }, 100);
        }

        // Function to initialize gallery filter
        function initGalleryFilter() {
            const filterButtons = document.querySelectorAll('.portfolio-flters li');
            const galleryItems = document.querySelectorAll('.portfolio-item');

            // Add click event to each filter button
            filterButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('filter-active'));

                    // Add active class to clicked button
                    this.classList.add('filter-active');

                    // Get filter value
                    const filterValue = this.getAttribute('data-filter');

                    // Filter items
                    galleryItems.forEach(item => {
                        if (filterValue === '*') {
                            // Show all items
                            item.style.display = 'block';
                            item.style.opacity = '1';
                        } else {
                            // Check if item has the filter class
                            const hasClass = item.classList.contains(filterValue.replace('.', ''));
                            if (hasClass) {
                                item.style.display = 'block';
                                item.style.opacity = '1';
                            } else {
                                item.style.display = 'none';
                                item.style.opacity = '0';
                            }
                        }
                    });
                });
            });
        }

        // Initialize gallery when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            fetchGalleryData();
            
            // Additional fixes after page is fully loaded
            window.addEventListener('load', function() {
                setTimeout(() => {
                    const main = document.getElementById('main');
                    const galeriSection = document.getElementById('galeri');
                    
                    // Ensure proper spacing
                    if (main) {
                        main.style.paddingBottom = '100px';
                    }
                    
                    // Force height recalculation for gallery section
                    if (galeriSection) {
                        const portfolioContainer = document.getElementById('portfolio-container');
                        if (portfolioContainer && portfolioContainer.children.length > 0) {
                            galeriSection.style.minHeight = 'auto';
                            portfolioContainer.style.minHeight = 'auto';
                        }
                    }
                }, 500);
            });
        });
    </script>

</body>

</html>