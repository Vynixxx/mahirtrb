<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ __('msg.menu_tentang') }} - PT. Mahir Trans Bersaudara</title>
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
          <li><a href="{{ route('tentang-kami') }}" class="active">{{ __('msg.menu_tentang') }}</a></li>
          <li><a href="{{ route('layanan') }}">{{ __('msg.menu_layanan') }}</a></li>
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
                <h1>{{ __('msg.tentang_kami') }}</h1>
                </div>
            </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">{{ __('msg.menu_beranda') }}</a></li>
                <li class="current">{{ __('msg.menu_tentang') }}</li>
            </ol>
            </div>
        </nav>
        </div><!-- End Page Title -->

        <section class="container my-5" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6">
          <h2>{!! __('msg.tentang_perusahaan') !!}</h2>
          <p>
          {{ __('msg.desc_tentang_perusahaan') }}<br>{{ __('msg.desc_tentang_perusahaan1') }}
          </p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <img src="assets/img/konstruksi.jpg" class="img-fluid" alt="Tentang PT. Mahir Trans Bersaudara">
        </div>
      </div>
    </section>

    <section class="container my-5" data-aos="fade-up">
    <h2 class="text-center">{!! __('msg.visi_misi_heading') !!}</h2>
    <div class="row">
        <div class="col-md-6">
          <div class="p-4" data-aos="fade-up" data-aos-delay="100">
            <h3>{{ __('msg.vision_title') }}</h3>
            <p>{{ __('msg.vision_content') }}</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="p-4" data-aos="fade-up" data-aos-delay="100">
            <h3>{{ __('msg.mission_title') }}</h3>
            <ul>
            @foreach(__('msg.mission_list') as $mission)
                <li>{{ $mission }}</li>
            @endforeach
            </ul>
          </div>
        </div>
      </div>
    </section>

   <!-- layanan Section -->
   <section id="layanan-kami" class="services section light-background py-5">
    <h2 class="text-center mb-4" data-aos="fade-up">{!! __('msg.layanan_heading') !!}</h2>

    <div class="container">
        <div class="row gy-4 justify-content-center text-center">
            <!-- Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 custom-service-card">
                    <img src="assets/img/services/ekspedisi.png" class="custom-card-img-top" alt="Ekspedisi">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ __('msg.ekspedisi') }}</h5>
                        <p class="card-text text-muted">
                          {{ __('msg.deskripsi_ekspedisi') }}
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center pb-4">
                        <a href="{{ route('pesanekspedisi') }}" class="btn btn-primary btn-lg custom-animate-btn">
                        {{ __('msg.pesan_sekarang') }}
                        </a>
                    </div>
                </div>
            </div>
            <!-- Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 custom-service-card">
                    <img src="assets/img/services/pabrikasi.png" class="custom-card-img-top" alt="Pabrikasi">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ __('msg.pabrikasi') }}</h5>
                        <p class="card-text text-muted">
                            {{ __('msg.deskripsi_pabrikasi') }}
                    </div>
                    <div class="card-footer bg-white border-0 text-center pb-4">
                        <a href="{{ route('pesanpabrikasi') }}" class="btn btn-primary btn-lg custom-animate-btn">
                        {{ __('msg.pesan_sekarang') }}
                        </a>
                    </div>
                </div>
            </div>
            <!-- Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100 custom-service-card">
                    <img src="assets/img/services/perbaikan.png" class="custom-card-img-top" alt="Perbaikan">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ __('msg.perbaikan') }}</h5>
                        <p class="card-text text-muted">
                        {{ __('msg.deskripsi_perbaikan') }}
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center pb-4">
                        <a href="{{ route('pesanperbaikan') }}" class="btn btn-primary btn-lg custom-animate-btn">
                        {{ __('msg.pesan_sekarang') }}
                        </a>
                    </div>
                </div>
            </div>
            <!-- Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 custom-service-card">
                    <img src="assets/img/services/penyewaan.png" class="custom-card-img-top" alt="Penyewaan">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ __('msg.penyewaan') }}</h5>
                        <p class="card-text text-muted">
                        {{ __('msg.deskripsi_penyewaan') }}
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center pb-4">
                        <a href="{{ route('pesanpenyewaan') }}" class="btn btn-primary btn-lg custom-animate-btn">
                        {{ __('msg.pesan_sekarang') }}
                        </a>
                    </div>
                </div>
            </div>
            <!-- Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100 custom-service-card">
                    <img src="assets/img/services/supplier.png" class="custom-card-img-top" alt="Supplier">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ __('msg.supplier') }}</h5>
                        <p class="card-text text-muted">
                        {{ __('msg.deskripsi_supplier') }}
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center pb-4">
                        <a href="{{ route('pesansupplier') }}" class="btn btn-primary btn-lg custom-animate-btn">
                        {{ __('msg.pesan_sekarang') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-service-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 12px;
            overflow: hidden;
        }
        .custom-service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }
        .custom-card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .custom-animate-btn {
            transition: all 0.3s ease-in-out;
        }
        .custom-animate-btn:hover {
            transform: scale(1.05);
        }
    </style>
    </section><!-- layanan section -->

    <section class="container my-5 text-center">
    <div class="mb-4">
        <h2 data-aos="zoom-in">{!! __('msg.hubungi_kami_heading') !!}</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">{{ __('msg.hubungi_kami_sub') }}</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 mb-3" data-aos="flip-left">
            <div class="card border-0 shadow-sm py-3">
                <div class="card-body">
                    <i class="bi bi-geo-alt text-danger fs-2"></i>
                    <h5 class="fw-bold mt-2">{{ __('msg.alamat') }}</h5>
                    <p class="text-muted">{{ __('msg.isi_alamat') }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3" data-aos="flip-left" data-aos-delay="100">
            <div class="card border-0 shadow-sm py-3">
                <div class="card-body">
                    <i class="bi bi-telephone text-success fs-2"></i>
                    <h5 class="fw-bold mt-2">{{ __('msg.telepon') }}</h5>
                    <p class="text-muted">{{ __('msg.isi_telepon') }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3" data-aos="flip-left" data-aos-delay="200">
            <div class="card border-0 shadow-sm py-3">
                <div class="card-body">
                    <i class="bi bi-envelope text-primary fs-2"></i>
                    <h5 class="fw-bold mt-2">{{ __('msg.email') }}</h5>
                    <p class="text-muted">{{ __('msg.isi_email') }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3" data-aos="flip-left" data-aos-delay="300">
            <div class="card border-0 shadow-sm py-3">
                <div class="card-body">
                    <i class="bi bi-globe text-warning fs-2"></i>
                    <h5 class="fw-bold mt-2">{{ __('msg.website') }}</h5>
                    <p class="text-muted">
                        <a href="https://www.mahirtb.com" class="text-decoration-none fw-bold text-dark"><a href="">www.mahirtransbersaudara.com</a></a>
                    </p>
                </div>
            </div>
        </div>
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