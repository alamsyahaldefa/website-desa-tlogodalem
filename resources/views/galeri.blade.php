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

  @include('partials.header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Galeri Desa Tlogodalem</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Galeri</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            @foreach ($categories as $category)
                <li data-filter=".filter-{{ strtolower($category['name']) }}">{{ $category['name'] }}</li>
            @endforeach
          </ul><!-- End Projects Filters -->

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="200" id="gallery-container">
            <!-- Gallery items will be populated here by JavaScript -->
          </div><!-- End Projects Container -->

          <!-- Pagination -->
          <div class="row mt-4">
            <div class="col-12">
              <nav aria-label="Gallery pagination">
                <ul class="pagination justify-content-center" id="pagination-container">
                  <!-- Pagination links will be populated here -->
                </ul>
              </nav>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->

  @include('partials.footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script>
    // URL API
    const apiUrl = '/api/galeri';

    // Pagination variables
    let allItems = [];
    let filteredItems = [];
    let currentPage = 1;
    let currentFilter = '*';
    const itemsPerPage = 12;

    // Fungsi untuk mengambil data galeri dari API
    async function fetchGalleryData() {
      try {
        const response = await fetch(apiUrl);
        const data = await response.json();
        allItems = data.data;
        filteredItems = [...allItems];
        displayPage(currentPage);
        createPagination();
        initializeFilters();
      } catch (error) {
        console.error("Error fetching gallery data:", error);
        showErrorMessage();
      }
    }

    // Fungsi untuk menampilkan pesan error
    function showErrorMessage() {
      const galleryContainer = document.getElementById('gallery-container');
      galleryContainer.innerHTML = `
        <div class="col-12 text-center">
          <p>Maaf, terjadi kesalahan saat memuat galeri. Silakan coba lagi nanti.</p>
        </div>
      `;
    }

    // Fungsi untuk menampilkan halaman tertentu
    function displayPage(page) {
      const startIndex = (page - 1) * itemsPerPage;
      const endIndex = startIndex + itemsPerPage;
      const pageItems = filteredItems.slice(startIndex, endIndex);

      populateGallery(pageItems);
      updatePaginationButtons();
    }

    // Fungsi untuk mempopulasi galeri dengan data dari API
    function populateGallery(items) {
      const galleryContainer = document.getElementById('gallery-container');

      // Clear any existing gallery items
      galleryContainer.innerHTML = '';

      // Check if there are no items
      if (items.length === 0) {
        galleryContainer.innerHTML = `
          <div class="col-12 text-center py-5">
            <p>Tidak ada item galeri yang ditemukan.</p>
          </div>
        `;
        return;
      }

      // Loop through each item and create a gallery item
      items.forEach(item => {
        const itemElement = document.createElement('div');
        itemElement.classList.add('col-lg-4', 'col-md-6', 'portfolio-item', `filter-${item.kategori.toLowerCase()}`);

        itemElement.innerHTML = `
          <div class="portfolio-content h-100">
            <img src="${item.image_path}" class="img-fluid" alt="${item.caption}">
            <div class="portfolio-info">
              <h4>${item.kategori}</h4>
              <p>${item.caption}</p>
              <a href="${item.image_path}" title="${item.kategori}" data-gallery="portfolio-gallery-${item.kategori.toLowerCase()}" class="glightbox preview-link">
                <i class="bi bi-zoom-in"></i>
              </a>
              ${item.url_artikel ? `
              <a href="${item.url_artikel}" title="Detail" class="details-link">
                <i class="bi bi-link-45deg"></i>
              </a>
              ` : ''}
            </div>
          </div>
        `;

        galleryContainer.appendChild(itemElement);
      });

      // Ensure proper height calculation after content is loaded
      setTimeout(() => {
        // Trigger any layout recalculation if needed
        window.dispatchEvent(new Event('resize'));
      }, 100);
    }

    // Fungsi untuk inisialisasi filter
    function initializeFilters() {
      const filterButtons = document.querySelectorAll('.portfolio-flters li');

      filterButtons.forEach(button => {
        button.addEventListener('click', function() {
          // Remove active class from all buttons
          filterButtons.forEach(btn => btn.classList.remove('filter-active'));

          // Add active class to clicked button
          this.classList.add('filter-active');

          // Get filter value
          const filterValue = this.getAttribute('data-filter');
          currentFilter = filterValue;

          // Filter items
          if (filterValue === '*') {
            filteredItems = [...allItems];
          } else {
            const filterCategory = filterValue.replace('.filter-', '');
            filteredItems = allItems.filter(item =>
              item.kategori.toLowerCase() === filterCategory
            );
          }

          // Reset to first page and display
          currentPage = 1;
          displayPage(currentPage);
          createPagination();
        });
      });
    }

    // Fungsi untuk membuat tombol pagination
    function createPagination() {
      const totalPages = Math.ceil(filteredItems.length / itemsPerPage);
      const paginationContainer = document.getElementById('pagination-container');

      // Clear existing pagination
      paginationContainer.innerHTML = '';

      if (totalPages <= 1) return;

      // Previous button
      const prevLi = document.createElement('li');
      prevLi.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
      prevLi.innerHTML = `<a class="page-link" href="#" data-page="${currentPage - 1}">Previous</a>`;
      paginationContainer.appendChild(prevLi);

      // Calculate page range to show
      let startPage = Math.max(1, currentPage - 2);
      let endPage = Math.min(totalPages, currentPage + 2);

      // Adjust range if at the beginning or end
      if (currentPage <= 3) {
        endPage = Math.min(5, totalPages);
      }
      if (currentPage >= totalPages - 2) {
        startPage = Math.max(1, totalPages - 4);
      }

      // First page and ellipsis
      if (startPage > 1) {
        const firstLi = document.createElement('li');
        firstLi.className = 'page-item';
        firstLi.innerHTML = `<a class="page-link" href="#" data-page="1">1</a>`;
        paginationContainer.appendChild(firstLi);

        if (startPage > 2) {
          const ellipsisLi = document.createElement('li');
          ellipsisLi.className = 'page-item disabled';
          ellipsisLi.innerHTML = `<span class="page-link">...</span>`;
          paginationContainer.appendChild(ellipsisLi);
        }
      }

      // Page numbers
      for (let i = startPage; i <= endPage; i++) {
        const li = document.createElement('li');
        li.className = `page-item ${i === currentPage ? 'active' : ''}`;
        li.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i}</a>`;
        paginationContainer.appendChild(li);
      }

      // Last page and ellipsis
      if (endPage < totalPages) {
        if (endPage < totalPages - 1) {
          const ellipsisLi = document.createElement('li');
          ellipsisLi.className = 'page-item disabled';
          ellipsisLi.innerHTML = `<span class="page-link">...</span>`;
          paginationContainer.appendChild(ellipsisLi);
        }

        const lastLi = document.createElement('li');
        lastLi.className = 'page-item';
        lastLi.innerHTML = `<a class="page-link" href="#" data-page="${totalPages}">${totalPages}</a>`;
        paginationContainer.appendChild(lastLi);
      }

      // Next button
      const nextLi = document.createElement('li');
      nextLi.className = `page-item ${currentPage === totalPages ? 'disabled' : ''}`;
      nextLi.innerHTML = `<a class="page-link" href="#" data-page="${currentPage + 1}">Next</a>`;
      paginationContainer.appendChild(nextLi);

      // Add event listeners
      paginationContainer.addEventListener('click', handlePaginationClick);
    }

    // Fungsi untuk menangani klik pagination
    function handlePaginationClick(e) {
      e.preventDefault();

      if (e.target.classList.contains('page-link') && !e.target.parentElement.classList.contains('disabled')) {
        const page = parseInt(e.target.getAttribute('data-page'));
        if (page && page !== currentPage) {
          currentPage = page;
          displayPage(currentPage);
          createPagination();

          // Scroll to top of section
          document.querySelector('#projects').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    }

    // Fungsi untuk memperbarui status tombol pagination
    function updatePaginationButtons() {
      const totalPages = Math.ceil(filteredItems.length / itemsPerPage);
      const paginationContainer = document.getElementById('pagination-container');

      if (!paginationContainer) return;

      // Update all page items
      const pageItems = paginationContainer.querySelectorAll('.page-item');
      pageItems.forEach((item) => {
        const link = item.querySelector('.page-link');
        if (!link) return;

        const page = parseInt(link.getAttribute('data-page'));

        // Remove existing classes
        item.classList.remove('active', 'disabled');

        // Handle different button types
        if (link.innerHTML.includes('Previous')) {
          if (currentPage === 1) {
            item.classList.add('disabled');
          }
        } else if (link.innerHTML.includes('Next')) {
          if (currentPage === totalPages) {
            item.classList.add('disabled');
          }
        } else if (page === currentPage) {
          item.classList.add('active');
        }
      });
    }

    // Initialize gallery when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
      fetchGalleryData();
    });
  </script>

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
