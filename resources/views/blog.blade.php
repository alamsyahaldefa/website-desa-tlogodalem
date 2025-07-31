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
        /* CSS untuk menyamakan ukuran gambar artikel */
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

        .post-item {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .post-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .blog {
            padding: 60px 0;
        }

        .post-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin: 15px 0;
            color: #333;
        }

        .meta {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 15px;
        }

        .readmore {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            margin-top: auto;
        }

        .readmore:hover {
            color: #0056b3;
        }

        .blog-pagination {
            margin-top: 50px;
        }

        .blog-pagination ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .blog-pagination li {
            margin: 0 5px;
        }

        .blog-pagination a {
            display: block;
            padding: 10px 15px;
            background: #f8f9fa;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
        }

        .blog-pagination .active a {
            background: #007bff;
            color: white;
        }

        @media (max-width: 768px) {
            .post-img {
                height: 200px;
            }
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
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Artikel Desa Tlogodalem</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Artikel Desa</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- Blog Section -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-5">Artikel Desa</h2>
                </div>
            </div>
            
            <!-- Search and Filter Section -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="search-filter-container">
                        <div class="row g-3">
                            <!-- Search Field -->
                            <div class="col-md-6">
                                <div class="search-box">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-search"></i>
                                        </span>
                                        <input type="text" 
                                            id="search-input" 
                                            class="form-control" 
                                            placeholder="Cari artikel..."
                                            autocomplete="off">
                                        <button class="btn btn-outline-secondary" 
                                                type="button" 
                                                id="clear-search" 
                                                style="display: none;">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Category Filter -->
                            <div class="col-md-4">
                                <div class="category-filter">
                                    <select id="category-filter" class="form-select">
                                        <option value="">Semua Kategori</option>
                                        @foreach($kategori_all as $kategori)
                                            <option value="{{ $kategori->name }}">{{ $kategori->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Sort Options -->
                            <div class="col-md-2">
                                <div class="sort-options">
                                    <select id="sort-filter" class="form-select">
                                        <option value="latest">Terbaru</option>
                                        <option value="oldest">Terlama</option>
                                        <option value="title">Judul A-Z</option>
                                        <option value="title_desc">Judul Z-A</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Active Filters Display -->
                        <div class="active-filters mt-3" id="active-filters" style="display: none;">
                            <span class="text-muted">Filter aktif:</span>
                            <div class="d-inline-flex flex-wrap gap-2 ms-2" id="filter-tags">
                                <!-- Active filter tags will appear here -->
                            </div>
                            <button class="btn btn-sm btn-outline-danger ms-2" id="clear-all-filters">
                                <i class="bi bi-x-circle"></i> Hapus Semua
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Results Info -->
            <div class="row mb-3">
                <div class="col-12">
                    <div class="results-info" id="results-info" style="display: none;">
                        <small class="text-muted">
                            Menampilkan <span id="results-count">0</span> artikel
                            <span id="search-query-display" style="display: none;">
                                untuk "<span id="search-term"></span>"
                            </span>
                            <span id="category-filter-display" style="display: none;">
                                dalam kategori "<span id="selected-category"></span>"
                            </span>
                        </small>
                    </div>
                </div>
            </div>
            
            <!-- Loading State -->
            <div id="loading" class="loading text-center py-5">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Memuat...</span>
                </div>
                <p class="mt-3 text-muted">Memuat artikel...</p>
            </div>
            
            <!-- Error State -->
            <div id="error" class="error-message text-center py-5" style="display: none;">
                <i class="bi bi-exclamation-triangle text-warning" style="font-size: 3rem;"></i>
                <h4 class="mt-3">Terjadi Kesalahan</h4>
                <p class="text-muted">Gagal memuat artikel. Silakan coba lagi.</p>
                <button class="btn btn-primary" onclick="loadArticles()">
                    <i class="bi bi-arrow-clockwise"></i> Coba Lagi
                </button>
            </div>
            
            <!-- No Data State -->
            <div id="no-data" class="no-data text-center py-5" style="display: none;">
                <i class="bi bi-inbox text-muted" style="font-size: 3rem;"></i>
                <h4 class="mt-3">Tidak Ada Artikel</h4>
                <p class="text-muted" id="no-data-message">Belum ada artikel yang dipublikasikan.</p>
            </div>
            
            <!-- Articles Container -->
            <div id="articles-container" class="row gy-4 posts-list" style="display: none;">
                <!-- Articles will be dynamically loaded here -->
            </div>
            
            <!-- Pagination -->
            <div id="pagination-container" class="blog-pagination" style="display: none;">
                <ul class="justify-content-center" id="pagination-list">
                    <!-- Pagination will be dynamically loaded here -->
                </ul>
            </div>
        </div>
    </section>

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
        // Inisialisasi AOS
        AOS.init();
        
        // Konfigurasi
        const API_URL = 'http://127.0.0.1:8000/api/artikel-desa';
        let currentPage = 1;
        let totalPages = 1;
        let articles = [];
        let allArticles = []; // Store all articles for client-side filtering
        let filteredArticles = []; // Store filtered results
        let searchTimeout = null;

        const query_kategori = new URLSearchParams(window.location.search).get('kategori');
        const query_cari = new URLSearchParams(window.location.search).get('cari');

        function capitalize(str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
        }
        
        // Filter state
        let currentFilters = {
            search: query_cari == null ? '' : query_cari,
            category: query_kategori == null ? '' : capitalize(query_kategori),
            sort: 'latest'
        };
        
        // Fungsi untuk memformat tanggal
        function formatDate(dateString) {
            const options = { 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            };
            return new Date(dateString).toLocaleDateString('id-ID', options);
        }
        
        // Fungsi untuk mendapatkan URL thumbnail
        function getThumbnailUrl(thumbnail) {
            if (!thumbnail) return 'assets/img/default-article.jpg';
            if (thumbnail.startsWith('http')) return thumbnail;
            return `http://127.0.0.1:8000/storage/${thumbnail}`;
        }
        
        // Fungsi untuk memotong konten
        function truncateContent(content, maxLength = 150) {
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = content;
            const textContent = tempDiv.textContent || tempDiv.innerText || '';
            
            if (textContent.length <= maxLength) return textContent;
            return textContent.substr(0, maxLength) + '...';
        }
        
        // Fungsi untuk memuat semua artikel dari API
        async function loadAllArticles() {
            try {
                showLoading();
                
                let allData = [];
                let page = 1;
                let hasMorePages = true;
                
                while (hasMorePages) {
                    const response = await fetch(`${API_URL}?page=${page}&per_page=50`);
                    
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    
                    const data = await response.json();
                    
                    if (data.data && data.data.length > 0) {
                        // Filter artikel yang published
                        const publishedArticles = data.data.filter(article => article.status === 'published');
                        allData = allData.concat(publishedArticles);
                        
                        // Check if there are more pages
                        if (data.meta && data.meta.current_page < data.meta.last_page) {
                            page++;
                        } else {
                            hasMorePages = false;
                        }
                    } else {
                        hasMorePages = false;
                    }
                }
                
                allArticles = allData;
                
                if (allArticles.length === 0) {
                    showNoData();
                    return;
                }
                
                // Apply current filters
                applyFilters();
                
            } catch (error) {
                console.error('Error loading articles:', error);
                showError();
            }
        }
        
        // Fungsi untuk memuat artikel dengan pagination (fallback jika API mendukung server-side filtering)
        async function loadArticles(page = 1, search = '', category = '', sort = 'latest') {
            try {
                showLoading();
                
                // Build query parameters
                const params = new URLSearchParams({
                    page: page,
                    per_page: 9
                });
                
                if (search) params.append('search', search);
                if (category) params.append('category', category);
                if (sort) params.append('sort', sort);
                
                const response = await fetch(`${API_URL}?${params}`);
                
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                
                const data = await response.json();
                
                // Menangani struktur API Laravel pagination
                if (data.data && data.meta) {
                    // Filter artikel yang published
                    articles = data.data.filter(article => article.status === 'published');
                    
                    // Menggunakan informasi pagination dari API
                    currentPage = data.meta.current_page;
                    totalPages = data.meta.last_page;
                    const totalItems = data.meta.total;
                    
                    if (articles.length === 0 && totalItems === 0) {
                        showNoData();
                        return;
                    }
                    
                    displayArticles(articles);
                    displayPagination(data.meta, data.links);
                    updateResultsInfo(totalItems);
                }
                else {
                    showNoData();
                }
                
            } catch (error) {
                console.error('Error loading articles:', error);
                // Fallback to client-side filtering
                loadAllArticles();
            }
        }
        
        // Fungsi untuk menerapkan filter client-side
        function applyFilters() {
            let filtered = [...allArticles];
            
            // Apply search filter
            if (currentFilters.search) {
                const searchTerm = currentFilters.search.toLowerCase();
                filtered = filtered.filter(article => 
                    article.title.toLowerCase().includes(searchTerm) ||
                    article.content.toLowerCase().includes(searchTerm) ||
                    (article.author_name && article.author_name.toLowerCase().includes(searchTerm)) ||
                    (article.kategori && article.kategori.toLowerCase().includes(searchTerm))
                );
            }
            
            // Apply category filter
            if (currentFilters.category) {
                filtered = filtered.filter(article => 
                    article.kategori === currentFilters.category
                );
            }
            
            // Apply sorting
            filtered.sort((a, b) => {
                switch (currentFilters.sort) {
                    case 'latest':
                        return new Date(b.date || b.created_at) - new Date(a.date || a.created_at);
                    case 'oldest':
                        return new Date(a.date || a.created_at) - new Date(b.date || b.created_at);
                    case 'title':
                        return a.title.localeCompare(b.title);
                    case 'title_desc':
                        return b.title.localeCompare(a.title);
                    default:
                        return new Date(b.date || b.created_at) - new Date(a.date || a.created_at);
                }
            });
            
            filteredArticles = filtered;
            
            // Pagination for client-side filtering
            const itemsPerPage = 9;
            totalPages = Math.ceil(filteredArticles.length / itemsPerPage);
            currentPage = Math.min(currentPage, totalPages) || 1;
            
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const articlesToShow = filteredArticles.slice(startIndex, endIndex);

            console.log(filteredArticles.length)
            
            if (filteredArticles.length === 0) {
                showNoData();
                updateNoDataMessage();
            } else {
                hideNoData();
                displayArticles(articlesToShow);
                displayClientSidePagination();
                updateResultsInfo(filteredArticles.length);
            }
            
            updateActiveFilters();
        }
        
        // Fungsi untuk menampilkan artikel
        function displayArticles(articles) {
            const container = document.getElementById('articles-container');
            container.innerHTML = '';
            
            articles.forEach((article, index) => {
                const articleHtml = `
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="${(index + 1) * 100}">
                        <div class="post-item position-relative h-100">
                            <div class="post-img position-relative overflow-hidden">
                                <img src="${getThumbnailUrl(article.thumbnail)}" 
                                    class="img-fluid" 
                                    alt="${article.title}"
                                    onerror="this.src='https://via.placeholder.com/400x250?text=Tidak+Ada+Gambar'">
                                <span class="post-date">${formatDate(article.date || article.created_at)}</span>
                            </div>
                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">${article.title}</h3>
                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> 
                                        <span class="ps-2">${article.author_name || 'Admin'}</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> 
                                        <span class="ps-2 category-badge">${article.kategori || 'Umum'}</span>
                                    </div>
                                </div>
                                <p>${truncateContent(article.content)}</p>
                                <hr>
                                <a href="/artikel/${article.slug || article.id}" 
                                class="readmore stretched-link">
                                <span>Baca Selengkapnya</span>
                                <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                `;
                container.innerHTML += articleHtml;
            });
            
            hideLoading();
            container.style.display = 'flex';
            
            // Re-initialize AOS for new elements
            AOS.refresh();
        }
        
        // Fungsi untuk menampilkan pagination (server-side)
        function displayPagination(meta = null, links = null) {
            if (!meta || meta.last_page <= 1) {
                document.getElementById('pagination-container').style.display = 'none';
                return;
            }
            
            const paginationList = document.getElementById('pagination-list');
            paginationList.innerHTML = '';
            
            const currentPage = meta.current_page;
            const lastPage = meta.last_page;
            
            // Previous button
            if (links && links.prev) {
                paginationList.innerHTML += `
                    <li>
                        <a href="#" onclick="changePage(${currentPage - 1})" aria-label="Previous">
                            <i class="bi bi-chevron-left"></i>
                        </a>
                    </li>
                `;
            }
            
            // Page numbers dengan logika yang lebih baik
            const startPage = Math.max(1, currentPage - 2);
            const endPage = Math.min(lastPage, currentPage + 2);
            
            // First page dan ellipsis
            if (startPage > 1) {
                paginationList.innerHTML += `<li><a href="#" onclick="changePage(1)">1</a></li>`;
                if (startPage > 2) {
                    paginationList.innerHTML += `<li><span class="px-3">...</span></li>`;
                }
            }
            
            // Page range
            for (let i = startPage; i <= endPage; i++) {
                paginationList.innerHTML += `
                    <li class="${i === currentPage ? 'active' : ''}">
                        <a href="#" onclick="changePage(${i})">${i}</a>
                    </li>
                `;
            }
            
            // Last page dan ellipsis
            if (endPage < lastPage) {
                if (endPage < lastPage - 1) {
                    paginationList.innerHTML += `<li><span class="px-3">...</span></li>`;
                }
                paginationList.innerHTML += `<li><a href="#" onclick="changePage(${lastPage})">${lastPage}</a></li>`;
            }
            
            // Next button
            if (links && links.next) {
                paginationList.innerHTML += `
                    <li>
                        <a href="#" onclick="changePage(${currentPage + 1})" aria-label="Next">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </li>
                `;
            }
            
            document.getElementById('pagination-container').style.display = 'block';
        }
        
        // Fungsi untuk menampilkan pagination client-side
        function displayClientSidePagination() {
            if (totalPages <= 1) {
                document.getElementById('pagination-container').style.display = 'none';
                return;
            }
            
            const paginationList = document.getElementById('pagination-list');
            paginationList.innerHTML = '';
            
            // Previous button
            if (currentPage > 1) {
                paginationList.innerHTML += `
                    <li>
                        <a href="#" onclick="changeClientPage(${currentPage - 1})" aria-label="Previous">
                            <i class="bi bi-chevron-left"></i>
                        </a>
                    </li>
                `;
            }
            
            // Page numbers
            const startPage = Math.max(1, currentPage - 2);
            const endPage = Math.min(totalPages, currentPage + 2);
            
            if (startPage > 1) {
                paginationList.innerHTML += `<li><a href="#" onclick="changeClientPage(1)">1</a></li>`;
                if (startPage > 2) {
                    paginationList.innerHTML += `<li><span class="px-3">...</span></li>`;
                }
            }
            
            for (let i = startPage; i <= endPage; i++) {
                paginationList.innerHTML += `
                    <li class="${i === currentPage ? 'active' : ''}">
                        <a href="#" onclick="changeClientPage(${i})">${i}</a>
                    </li>
                `;
            }
            
            if (endPage < totalPages) {
                if (endPage < totalPages - 1) {
                    paginationList.innerHTML += `<li><span class="px-3">...</span></li>`;
                }
                paginationList.innerHTML += `<li><a href="#" onclick="changeClientPage(${totalPages})">${totalPages}</a></li>`;
            }
            
            // Next button
            if (currentPage < totalPages) {
                paginationList.innerHTML += `
                    <li>
                        <a href="#" onclick="changeClientPage(${currentPage + 1})" aria-label="Next">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </li>
                `;
            }
            
            document.getElementById('pagination-container').style.display = 'block';
        }
        
        // Fungsi untuk mengubah halaman (server-side)
        function changePage(page) {
            if (page >= 1 && page !== currentPage) {
                loadArticles(page, currentFilters.search, currentFilters.category, currentFilters.sort);
                scrollToTop();
            }
        }
        
        // Fungsi untuk mengubah halaman (client-side)
        function changeClientPage(page) {
            if (page >= 1 && page <= totalPages && page !== currentPage) {
                currentPage = page;
                applyFilters();
                scrollToTop();
            }
        }
        
        // Fungsi untuk scroll ke atas
        function scrollToTop() {
            document.getElementById('blog').scrollIntoView({ 
                behavior: 'smooth' 
            });
        }
        
        // Fungsi untuk update info hasil
        function updateResultsInfo(totalCount) {
            const resultsInfo = document.getElementById('results-info');
            const resultsCount = document.getElementById('results-count');
            const searchQueryDisplay = document.getElementById('search-query-display');
            const searchTerm = document.getElementById('search-term');
            const categoryFilterDisplay = document.getElementById('category-filter-display');
            const selectedCategory = document.getElementById('selected-category');
            
            resultsCount.textContent = totalCount;
            
            if (currentFilters.search) {
                searchTerm.textContent = currentFilters.search;
                searchQueryDisplay.style.display = 'inline';
            } else {
                searchQueryDisplay.style.display = 'none';
            }
            
            if (currentFilters.category) {
                selectedCategory.textContent = currentFilters.category;
                categoryFilterDisplay.style.display = 'inline';
            } else {
                categoryFilterDisplay.style.display = 'none';
            }
            
            resultsInfo.style.display = 'block';
        }
        
        // Fungsi untuk update active filters
        function updateActiveFilters() {
            const activeFilters = document.getElementById('active-filters');
            const filterTags = document.getElementById('filter-tags');
            
            filterTags.innerHTML = '';
            let hasActiveFilters = false;
            
            if (currentFilters.search) {
                filterTags.innerHTML += `
                    <span class="badge bg-primary">
                        Pencarian: "${currentFilters.search}"
                        <i class="bi bi-x-lg ms-1" onclick="clearSearchFilter()" style="cursor: pointer;"></i>
                    </span>
                `;
                hasActiveFilters = true;
            }
            
            if (currentFilters.category) {
                filterTags.innerHTML += `
                    <span class="badge bg-success">
                        Kategori: ${currentFilters.category}
                        <i class="bi bi-x-lg ms-1" onclick="clearCategoryFilter()" style="cursor: pointer;"></i>
                    </span>
                `;
                hasActiveFilters = true;
            }
            
            if (currentFilters.sort !== 'latest') {
                const sortLabels = {
                    'oldest': 'Terlama',
                    'title': 'Judul A-Z',
                    'title_desc': 'Judul Z-A'
                };
                filterTags.innerHTML += `
                    <span class="badge bg-info">
                        Urutan: ${sortLabels[currentFilters.sort]}
                        <i class="bi bi-x-lg ms-1" onclick="clearSortFilter()" style="cursor: pointer;"></i>
                    </span>
                `;
                hasActiveFilters = true;
            }
            
            activeFilters.style.display = hasActiveFilters ? 'block' : 'none';
        }
        
        // Fungsi untuk update pesan no data
        function updateNoDataMessage() {
            const noDataMessage = document.getElementById('no-data-message');
            
            if (currentFilters.search || currentFilters.category) {
                noDataMessage.textContent = 'Tidak ada artikel yang sesuai dengan filter yang dipilih.';
            } else {
                noDataMessage.textContent = 'Belum ada artikel yang dipublikasikan.';
            }
        }
        
        // Fungsi untuk clear individual filters
        function clearSearchFilter() {
            currentFilters.search = '';
            document.getElementById('search-input').value = '';
            document.getElementById('clear-search').style.display = 'none';
            currentPage = 1;
            applyFilters();
        }
        
        function clearCategoryFilter() {
            currentFilters.category = '';
            document.getElementById('category-filter').value = '';
            currentPage = 1;
            applyFilters();
        }
        
        function clearSortFilter() {
            currentFilters.sort = 'latest';
            document.getElementById('sort-filter').value = 'latest';
            currentPage = 1;
            applyFilters();
        }
        
        // Fungsi untuk clear semua filter
        function clearAllFilters() {
            currentFilters = {
                search: '',
                category: '',
                sort: 'latest'
            };
            
            document.getElementById('search-input').value = '';
            document.getElementById('category-filter').value = '';
            document.getElementById('sort-filter').value = 'latest';
            document.getElementById('clear-search').style.display = 'none';
            
            currentPage = 1;
            applyFilters();
        }
        
        // Event handlers
        function setupEventHandlers() {
            // Search input with debouncing
            const searchInput = document.getElementById('search-input');
            const clearSearchBtn = document.getElementById('clear-search');
            
            searchInput.addEventListener('input', function(e) {
                const value = e.target.value.trim();
                
                if (searchTimeout) {
                    clearTimeout(searchTimeout);
                }
                
                clearSearchBtn.style.display = value ? 'block' : 'none';
                
                searchTimeout = setTimeout(() => {
                    currentFilters.search = value;
                    currentPage = 1;
                    applyFilters();
                }, 500);
            });
            
            clearSearchBtn.addEventListener('click', function() {
                clearSearchFilter();
            });
            
            // Category filter
            document.getElementById('category-filter').addEventListener('change', function(e) {
                currentFilters.category = e.target.value;
                currentPage = 1;
                applyFilters();
            });
            
            // Sort filter
            document.getElementById('sort-filter').addEventListener('change', function(e) {
                currentFilters.sort = e.target.value;
                currentPage = 1;
                applyFilters();
            });
            
            // Clear all filters button
            document.getElementById('clear-all-filters').addEventListener('click', function() {
                clearAllFilters();
            });
            
            // Enter key on search
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    if (searchTimeout) {
                        clearTimeout(searchTimeout);
                    }
                    currentFilters.search = searchInput.value.trim();
                    currentPage = 1;
                    applyFilters();
                }
            });
        }
        
        // Fungsi untuk menampilkan loading
        function showLoading() {
            document.getElementById('loading').style.display = 'block';
            document.getElementById('error').style.display = 'none';
            document.getElementById('no-data').style.display = 'none';
            document.getElementById('articles-container').style.display = 'none';
            document.getElementById('pagination-container').style.display = 'none';
            document.getElementById('results-info').style.display = 'none';
        }
        
        // Fungsi untuk menyembunyikan loading
        function hideLoading() {
            document.getElementById('loading').style.display = 'none';
        }
        
        // Fungsi untuk menampilkan error
        function showError() {
            hideLoading();
            document.getElementById('error').style.display = 'block';
            document.getElementById('no-data').style.display = 'none';
            document.getElementById('articles-container').style.display = 'none';
            document.getElementById('pagination-container').style.display = 'none';
            document.getElementById('results-info').style.display = 'none';
        }
        
        // Fungsi untuk menampilkan no data
        function showNoData() {
            hideLoading();
            document.getElementById('error').style.display = 'none';
            document.getElementById('no-data').style.display = 'block';
            document.getElementById('articles-container').style.display = 'none';
            document.getElementById('pagination-container').style.display = 'none';
            document.getElementById('results-info').style.display = 'none';
        }

        function hideNoData() {
            document.getElementById('error').style.display = 'none';
            document.getElementById('no-data').style.display = 'none';
            document.getElementById('articles-container').style.display = 'none';
            document.getElementById('pagination-container').style.display = 'none';
            document.getElementById('results-info').style.display = 'none';
        }
        
        // Memuat artikel saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            setupEventHandlers();
            loadAllArticles();
        });
    </script>
</body>

</html>