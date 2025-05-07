<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ekspedisi - PT. Mahir Trans Bersaudara</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">



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
            <li><a href="#beranda">{{ __('msg.menu_beranda') }}</a></li>
            <li><a href="#tentang-kami">{{ __('msg.menu_tentang') }}</a></li>
            <li><a href="#layanan-kami">{{ __('msg.menu_layanan') }}</a></li>
            <li><a href="#galeri">{{ __('msg.menu_galeri') }}</a></li>
            <li><a href="#mitra">{{ __('msg.menu_mitra') }}</a></li>
            <li><a href="#kontak">{{ __('msg.menu_kontak') }}</a></li>

            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="bottom">
                <a href="{{ url('/lang/id') }}" class="nav-link">
                    <img src="{{ asset('assets/id.png') }}" alt="Bahasa Indonesia" width="20">
                </a>
                <a href="{{ url('/lang/en') }}" class="nav-link">
                    <img src="{{ asset('assets/en.png') }}" alt="English" width="20">
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
                <h1 class="mb-4">Ekspedisi</h1>
                </div>
            </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li class="current">Ekspedisi</li>
            </ol>
            </div>
        </nav>
        </div><!-- End Page Title -->

        <!-- Timeline Pemesanan Ekspedisi Kendaraan Berat -->
        <div class="container py-5">
            <h2 class="text-center mb-4" data-aos="fade-up" data-aos-delay="100">
                Prosedur Pemesanan Ekspedisi Kendaraan Berat <br> <span class="text-primary">PT. Mahir Trans Bersaudara</span>
            </h2>
            
            <div class="timeline">
                <!-- Langkah 1: Pilih Kendaraan -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="circle bg-primary"><i class="fas fa-truck"></i></div>
                    <h6>Pilih Kendaraan</h6>
                    <p class="custom"><a href="{{ route('produk') }}">Pilih jenis</a> kendaraan berat yang sesuai dengan kebutuhan Anda.</p>
                </div>
                <div class="line" data-aos="fade-up" data-aos-delay="100"></div>
                
                <!-- Langkah 2: Isi Formulir -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="circle bg-success"><i class="fas fa-file-alt"></i></div>
                    <h6>Isi Formulir</h6>
                    <p class="custom">Lengkapi <a href="{{ route('pesanekspedisi') }}">formulir pemesanan</a> dengan detail kebutuhan dan informasi kontak Anda.</p>
                </div>
                <div class="line" data-aos="fade-up" data-aos-delay="200"></div>
                
                <!-- Langkah 3: Konfirmasi & Diskusi Harga -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="circle bg-warning"><i class="fas fa-comments"></i></div>
                    <h6>Konfirmasi & Diskusi Harga</h6>
                    <p class="custom">Admin akan menghubungi Anda melalui WhatsApp dan email untuk mendiskusikan ekspedisi dan kisaran harga.</p>
                </div>
                <div class="line" data-aos="fade-up" data-aos-delay="300"></div>
                
                <!-- Langkah 4: Kesepakatan & Pembayaran -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="circle bg-danger"><i class="fas fa-credit-card"></i></div>
                    <h6>Kesepakatan & Pembayaran</h6>
                    <p class="custom">Setelah kesepakatan tercapai, lakukan pembayaran untuk memproses pesanan.</p>
                </div>
                <div class="line" data-aos="fade-up" data-aos-delay="400"></div>
                
                <!-- Langkah 5: Pengiriman Kendaraan -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="circle bg-info"><i class="fas fa-shipping-fast"></i></div>
                    <h6>Pengiriman Kendaraan</h6>
                    <p class="custom">Kendaraan dikirim sesuai dengan jadwal yang telah disepakati.</p>
                </div>
                <div class="line" data-aos="fade-up" data-aos-delay="400"></div>
                
                <!-- Langkah 6: Penggunaan & Pengembalian -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="circle bg-secondary"><i class="fas fa-undo"></i></div>
                    <h6>Penggunaan & Pengembalian</h6>
                    <p class="custom">Gunakan kendaraan sesuai keperluan dan lakukan pengembalian setelah selesai.</p>
                </div>
            </div>
        </div>

        <!-- CSS -->
        <style>
            .timeline {
                display: flex;
                flex-direction: column;
                align-items: center;
                position: relative;
                margin: 50px auto;
            }
            
            .timeline-step {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                margin: 20px;
            }
            
            .circle {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 1.5rem;
                position: relative;
                z-index: 2;
                transition: transform 0.3s ease-in-out;
            }
            
            .circle:hover {
                transform: scale(1.2);
            }
            
            .line {
                width: 5px;
                height: 50px;
                background: linear-gradient(to bottom, gray, lightgray);
                margin: 10px 0;
            }
            
            h6 {
                margin-top: 10px;
                font-size: 1.1rem;
                font-weight: bold;
            }
    
            p.custom {
                font-size: 0.9rem;
                color: #666;
                max-width: 300px;
            }
            
            @media (max-width: 768px) {
                .timeline {
                    flex-direction: column;
                    align-items: center;
                }
                
                .line {
                    width: 5px;
                    height: 50px;
                    margin: 10px 0;
                }
            }
        </style>

        <!-- Script AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        @include('keunggulan')
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
                <a href="{{ route('pesanekspedisi') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="400">
                    Pesan Sekarang
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