<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="footer-content position-relative">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-6 col-md-8 text-center">
        <div class="footer-info">
          <h3>Desa Tlogodalem</h3>
          <div class="social-links d-flex justify-content-center mt-3">
            <a href="{{ $profil->facebook ?? '#' }}" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
            <a href="{{ $profil->instagram ?? '#' }}" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
            <a href="{{ $profil->youtube ?? '#' }}" class="d-flex align-items-center justify-content-center"><i class="bi bi-youtube"></i></a>
            <a href="{{ $profil->whatsapp ? 'https://wa.me/62' . substr($profil->whatsapp, 1) : '#' }}" class="d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
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
