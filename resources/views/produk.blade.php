<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Produk - PT. Mahir Trans Bersaudara</title>
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
          <li><a href="{{ route('home') }}">Beranda</a></li>
          <li><a href="{{ route('tentang-kami') }}" >Tentang</a></li>
          <li><a href="{{ route('layanan') }}" class="active">Layanan</a></li>
          <li><a href="{{ route('galeri') }}">Galeri</a></li>
          <li><a href="{{ route('mitra') }}" >Mitra</a></li>
          <li><a href="{{ route('kontak') }}">Kontak</a></li>
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
                <h1 class="mb-4">Produk Kami</h1>
                </div>
            </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li class="current">Produk</li>
            </ol>
            </div>
        </nav>
        </div><!-- End Page Title -->

          <!-- layanan Section -->
          <section class="container py-5">
              <div class="row g-4">
                  @foreach ($layanan as $p)
                  <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="{{ $loop->index * 150 }}">
                      <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                          <div class="ratio ratio-16x9"> 
                              <img src="{{ asset('/images/' . $p->gambar) }}" class="img-fluid object-fit-cover" alt="{{ $p->nama }}">
                          </div>
                          <div class="card-body text-center">
                              <h4 class="fw-bold">{{ $p->nama }}</h4>
                              <p class="text-muted">{{ $p->isi }}</p>
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>
          </section>

          @include('testimoni')        
          <!-- Call to Action -->
          <section id="sewa" class="text-center py-5 mt-5 mb-5">
              <div class="container mt-5">
                  <h2 class="fw-bold animate-title" data-aos="fade-down">
                      <span class="fw-bold text-primary">Optimalkan Proyek Anda</span> dengan Kendaraan Terbaik!
                  </h2>
                  <p class="animate-text" data-aos="fade-up" data-aos-delay="200">
                      Jangan ragu untuk menghubungi kami dan dapatkan layanan terbaik.
                  </p>
                  <a href="{{ route('kontak') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="400">
                      Hubungi Kami
                  </a>
              </div>
          </section>
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