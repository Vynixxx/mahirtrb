<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Perbaikan - PT. Mahir Trans Bersaudara</title>
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
                <h1 class="mb-4">Perbaikan</h1>
                </div>
            </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li class="current">Perbaikan</li>
            </ol>
            </div>
        </nav>
        </div><!-- End Page Title -->

        <!-- Timeline -->
        <div class="container py-5">
            <h2 class="text-center mb-4" data-aos="fade-up" data-aos-delay="100">Cara Perbaikan Kendaraan Berat <br> PT. Mahir Trans Bersaudara</h2><br>

            <div class="timeline">
                <!-- Langkah 1 -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="circle bg-primary">1</div>
                    <h6>Pilih Kendaraan</h6>
                </div>

                <div class="line" data-aos="fade-up" data-aos-delay="100"></div> <!-- Garis Penghubung -->

                <!-- Langkah 2 -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="circle bg-success">2</div>
                    <h6>Isi Formulir</h6>
                </div>

                <div class="line" data-aos="fade-up" data-aos-delay="200"></div> <!-- Garis Penghubung -->

                <!-- Langkah 3 -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="circle bg-warning">3</div>
                    <h6>Konfirmasi & Pembayaran</h6>
                </div>

                <div class="line" data-aos="fade-up" data-aos-delay="300"></div> <!-- Garis Penghubung -->

                <!-- Langkah 4 -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="circle bg-danger">4</div>
                    <h6>Pengiriman</h6>
                </div>

                <div class="line" data-aos="fade-up" data-aos-delay="400"></div> <!-- Garis Penghubung -->

                <!-- Langkah 5 -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="500">
                    <div class="circle bg-info">5</div>
                    <h6>Penggunaan</h6>
                </div>

                <div class="line" data-aos="fade-up" data-aos-delay="500"></div> <!-- Garis Penghubung -->

                <!-- Langkah 6 -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="600">
                    <div class="circle bg-secondary">6</div>
                    <h6>Pengembalian</h6>
                </div>
            </div>

        <!-- CSS -->
        <style>
            .timeline {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                position: relative;
                margin: 50px auto;
            }

            .timeline-item {
                display: flex;
                align-items: center;
                text-align: center;
                position: relative;
            }

            .timeline-step {
                display: flex;
                flex-direction: column;
                align-items: center;
                position: relative;
                margin: 20px;
            }

            .circle {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-weight: bold;
                font-size: 1.2rem;
                position: relative;
                z-index: 2;
                transition: transform 0.3s ease-in-out;
            }

            .circle:hover {
                transform: scale(1.2);
            }

            .line {
                flex-grow: 1;
                height: 5px;
                background-color: gray;
                margin: 0 10px;
            }

            @keyframes grow {
                from {
                    width: 0;
                }
                to {
                    width: 80px;
                }
            }

            h6 {
                margin-top: 10px;
                font-size: 1rem;
                text-align: center;
            }

            @media (max-width: 768px) {
                .timeline {
                    flex-direction: column;
                    align-items: center;
                }

                .timeline-item {
                    flex-direction: column;
                }

                .line {
                    width: 5px; /* Garis menjadi vertikal */
                    height: 50px; /* Jarak antar elemen */
                    margin: 10px 0;
                }
            }
        </style>

        <!-- Script AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <!-- Keunggulan Section -->
        <section class="about section">
            <div class="container" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-center mb-4">Mengapa Memilih Kami?</h2>
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
        </div>

            <!-- /About Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section dark-background">

        <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                "loop": true,
                "speed": 600,
                "autoplay": {
                    "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                }
                }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
            </div>

        </div>

        </section><!-- /Testimonials Section -->
        
        <!-- Call to Action -->
        <section id="sewa" class="text-center py-5 mt-5 mb-5">
            <div class="container mt-5">
                <h2 class="fw-bold animate-title" data-aos="fade-down">
                    Optimalkan Proyek Anda dengan Kendaraan Terbaik!
                </h2>
                <p class="animate-text" data-aos="fade-up" data-aos-delay="200">
                    Jangan ragu untuk menghubungi kami dan dapatkan layanan terbaik.
                </p>
                <a href="{{ route('kontak') }}" class="btn btn-success btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="400">
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