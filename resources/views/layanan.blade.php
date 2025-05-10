<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ __('msg.menu_layanan') }} - PT. Mahir Trans Bersaudara</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logomtbscale.png" alt="Logo Perusahaan">
        <!-- <h1 class="sitename">Mahir Trans Bersaudara</h1> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}">{{ __('msg.menu_beranda') }}</a></li>
          <li><a href="{{ route('tentang-kami') }}">{{ __('msg.menu_tentang') }}</a></li>
          <li><a href="{{ route('layanan') }}" class="active">{{ __('msg.menu_layanan') }}</a></li>
          <li><a href="{{ route('galeri') }}">{{ __('msg.menu_galeri') }}</a></li>
          <li><a href="{{ route('mitra') }}">{{ __('msg.menu_mitra') }}</a></li>
          <li><a href="{{ route('kontak') }}">{{ __('msg.menu_kontak') }}</a></li>

          <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="bottom">
              <a href="{{ url('/lang/id') }}" class="nav-link">
                  <img src="{{ asset('assets/id.png') }}" alt="Bahasa Indonesia" width="20">
                  <span class="d-xl-none ms-1">Bahasa Indonesia</span>
              </a>
              <a href="{{ url('/lang/en') }}" class="nav-link">
                  <img src="{{ asset('assets/en.png') }}" alt="English" width="20">
                  <span class="d-xl-none ms-1">English</span>
              </a>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade">
        <div class="heading">
            <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                <h1>{{ __('msg.layanan_heading1') }}</h1>
                </div>
            </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">{{ __('msg.menu_beranda') }}</a></li>
                <li class="current">{{ __('msg.menu_layanan') }}</li>
            </ol>
            </div>
        </nav>
        </div><!-- End Page Title -->

    <!-- layanan Section -->
    <section id="layanan-kami" class="services section light-background py-5">
    <h2 class="text-center mb-4" data-aos="fade-up">{!! __('msg.layanan_kami_tawarkan_heading') !!}</h2>


      <div class="container">
        <div class="row gy-4 justify-content-center text-center mt-5">
        <!-- Service Item 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
          <div class="card border-0 shadow-sm h-100">
              <img src="assets/img/services/ekspedisi.png" class="card-img-top" alt="Ekspedisi">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">{{ __('msg.layanan_ekspedisi_judul') }}</h5>
              <p class="card-text text-muted">{{ __('msg.layanan_ekspedisi_isi') }}</p>
            </div>
            <a href="{{ route('pesanekspedisi') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="200">
            {{ __('msg.pesan_sekarang') }}
            </a>
          </div>
        </div>
          <!-- Service Item 2 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card border-0 shadow-sm h-100">
              <img src="assets/img/services/pabrikasi.png" class="card-img-top" alt="Layanan 1">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">{{ __('msg.layanan_pabrikasi_judul') }}</h5>
              <p class="card-text text-muted">{{ __('msg.layanan_pabrikasi_isi') }}</p>
              </div>
              <a href="{{ route('pesanpabrikasi') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="300">
              {{ __('msg.pesan_sekarang') }}
                </a>
            </div>
          </div>
          <!-- Service Item 3 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
            <div class="card border-0 shadow-sm h-100">
              <img src="assets/img/services/perbaikan.png" class="card-img-top" alt="Layanan 1">
              <div class="card-body text-center">
              <h5 class="card-title fw-bold">{{ __('msg.layanan_perbaikan_judul') }}</h5>
              <p class="card-text text-muted">{{ __('msg.layanan_perbaikan_isi') }}</p>
              </div>
              <a href="{{ route('pesanperbaikan') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="400">
              {{ __('msg.pesan_sekarang') }}
                </a>
            </div>
          </div>
          <!-- Service Item 4 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card border-0 shadow-sm h-100">
              <img src="assets/img/services/penyewaan.png" class="card-img-top" alt="Layanan 4">
              <div class="card-body text-center">
              <h5 class="card-title fw-bold">{{ __('msg.layanan_penyewaan_judul') }}</h5>
              <p class="card-text text-muted">{{ __('msg.layanan_penyewaan_isi') }}</p>
              </div>
              <a href="{{ route('pesanpenyewaan') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="200">
              {{ __('msg.pesan_sekarang') }}
                </a>
            </div>
          </div>
          <!-- Service Item 4 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card border-0 shadow-sm h-100">
              <img src="assets/img/services/supplier.png" class="card-img-top" alt="Layanan 4">
              <div class="card-body text-center">
              <h5 class="card-title fw-bold">{{ __('msg.layanan_supplier_judul') }}</h5>
              <p class="card-text text-muted">{{ __('msg.layanan_supplier_isi') }}</p>
              </div>
              <a href="{{ route('pesansupplier') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="200">
              {{ __('msg.pesan_sekarang') }}
                </a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- layanan section -->
    </main>

  @include('layouts.footer')


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>