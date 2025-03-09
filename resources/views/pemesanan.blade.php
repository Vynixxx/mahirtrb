<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pemesanan - PT. Mahir Trans Bersaudara</title>
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
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">


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
            <li><a href="{{ route('layanan') }}">Layanan</a></li>
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
                <h1 class="mb-4">Pemesanan</h1>
                </div>
            </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li class="current">Pemesanan</li>
            </ol>
            </div>
        </nav>
        </div><!-- End Page Title -->
        
        <!-- Keunggulan Section -->
        <section class="about section">
            <div class="container" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-center mb-4">Mengapa <span class="fw-bold text-primary">Memilih</span> Kami?</h2>
                <div class="row align-items-xl-center">
                <div class="col-xl-12 d-flex justify-content-center">
                    <div class="row row-cols-1 row-cols-sm-2 g-4 text-center"> 

                        <div class="col" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-check-circle"></i>
                                <h3>Harga Terjangkau</h3>
                                <p>Kami menawarkan harga yang kompetitif dengan layanan berkualitas tinggi.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-check-circle"></i>
                                <h3>Pilihan Kendaraan Lengkap</h3>
                                <p>Berbagai jenis kendaraan berat tersedia untuk berbagai kebutuhan proyek Anda.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-check-circle"></i>
                                <h3>Pelayanan Cepat</h3>
                                <p>Tim kami siap membantu Anda dengan proses penyewaan yang cepat dan mudah.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-check-circle"></i>
                                <h3>Keamanan & Keandalan</h3>
                                <p>Kami memastikan setiap kendaraan berat dalam kondisi prima dengan perawatan rutin, sehingga aman dan andal untuk proyek Anda.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                    </div>
                </div>
                </div>
        </section>

        <!-- layanan Section -->
        <section id="layanan-kami" class="services section light-background py-5">
            <!-- Section Title -->
            <h2 class="text-center mb-4"><span class="fw-bold text-primary">Layanan</span> Kami</h2>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4 justify-content-center text-center">
                    <!-- Service Item -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card border-0 shadow-sm h-100 custom-service-card">
                            <img src="assets/img/services/ekspedisi.png" class="custom-card-img-top" alt="Ekspedisi">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Ekspedisi</h5>
                                <p class="card-text text-muted">
                                    Layanan ekspedisi alat berat yang cepat, aman, dan efisien dengan armada terbaik dan tenaga profesional berpengalaman.
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0 text-center pb-4">
                                <a href="{{ route('pesanekspedisi') }}" class="btn btn-primary btn-lg custom-animate-btn">
                                    Pesan Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card border-0 shadow-sm h-100 custom-service-card">
                            <img src="assets/img/services/pabrikasi.png" class="custom-card-img-top" alt="Pabrikasi">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Pabrikasi</h5>
                                <p class="card-text text-muted">
                                    Produksi komponen logam presisi tinggi untuk industri konstruksi, manufaktur, dan alat berat dengan standar kualitas terbaik.
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0 text-center pb-4">
                                <a href="{{ route('pesanpabrikasi') }}" class="btn btn-primary btn-lg custom-animate-btn">
                                    Pesan Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card border-0 shadow-sm h-100 custom-service-card">
                            <img src="assets/img/services/perbaikan.png" class="custom-card-img-top" alt="Perbaikan">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Perbaikan</h5>
                                <p class="card-text text-muted">
                                    Layanan perbaikan alat berat dengan teknisi profesional dan peralatan canggih untuk memastikan performa optimal.
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0 text-center pb-4">
                                <a href="{{ route('pesanperbaikan') }}" class="btn btn-primary btn-lg custom-animate-btn">
                                    Pesan Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card border-0 shadow-sm h-100 custom-service-card">
                            <img src="assets/img/services/penyewaan.png" class="custom-card-img-top" alt="Penyewaan">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Penyewaan</h5>
                                <p class="card-text text-muted">
                                    Penyewaan alat berat dengan berbagai pilihan unit berkualitas tinggi, harga kompetitif, dan dukungan teknis profesional.
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0 text-center pb-4">
                                <a href="{{ route('pesanpenyewaan') }}" class="btn btn-primary btn-lg custom-animate-btn">
                                    Pesan Sekarang
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
        </div>

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