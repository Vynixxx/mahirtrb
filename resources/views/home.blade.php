<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PT. Mahir Trans Bersaudara</title>
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

@include('layouts.header')

  <main class="main">

    <!-- Hero Section -->
    <section id="beranda" class="hero section dark-background">
      <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

      <div class="container">
        <div class="row gy-4 justify-content-between mt-5">
          <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/headerbaru.png" class="img-fluid animated" alt="">
          </div>

          <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
            <h1>Butuh Kendaraan Berat untuk Proyek Anda? <span> Kami Siap Membantu!</span></h1>
            <p>Mahir Trans Bersaudara hadir untuk memenuhi kebutuhan akan kendaraan berat dengan armada lengkap dan layanan terbaik.</p>
            <div class="d-flex">
              <a href="#tentang-kami" class="btn-get-started">Selengkapnya</a>
            </div>
          </div>

        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="tentang-kami" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>Tentang Kami</h3>
            <h2>Siapa Kami?</h2>
            <p>PT. Mahir Trans Bersaudara merupakan perusahaan yang bergerak di bidang penyewaan, perbaikan, trucking atau ekspedisi, serta pabrikasi alat berat. Sejak mulai beroperasi pada (tanggal) (bulan) (tahun), kami berkomitmen untuk menyediakan layanan profesional, terpercaya, dan berkualitas guna mendukung berbagai proyek konstruksi, infrastruktur, serta kebutuhan logistik di seluruh Indonesia terkhususnya provinsi Riau.
            Dengan pengalaman luas di industri ini, kami menghadirkan berbagai alat berat seperti Foco Truck, Crane, Triller, dan Head Truck, yang selalu dalam kondisi optimal. Didukung oleh operator berpengalaman dan tim teknisi handal, kami memastikan setiap peralatan berfungsi dengan efisiensi dan keamanan tinggi.
            Kami juga menawarkan layanan perbaikan alat berat, ekspedisi dan trucking untuk pengangkutan peralatan, serta pabrikasi komponen industri. Dengan harga kompetitif, fleksibilitas penyewaan, dan layanan konsultasi, kami siap membantu pelanggan mendapatkan solusi terbaik sesuai kebutuhan mereka.
            Seiring pertumbuhan sektor konstruksi dan logistik di Indonesia, PT. Mahir Trans Bersaudara terus berinovasi untuk memberikan layanan terbaik. Kami berkomitmen menjadi mitra terpercaya dengan mengutamakan kualitas, keselamatan, dan kepuasan pelanggan.</p>
            <a href="{{ route('tentang-kami') }}" class="read-more"><span>Profil Perusahaan</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-award"></i>
                  <h3>Komitmen Kami</h3>
                  <p>Kami berkomitmen memberikan layanan penyewaan alat berat berkualitas tinggi dengan harga kompetitif.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-star"></i>
                  <h3>Keunggulan Layanan</h3>
                  <p>PT Mahir Trans Bersaudara menawarkan fleksibilitas penyewaan alat berat untuk berbagai proyek industri.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-person-check"></i>
                  <h3>Profesionalisme Tim</h3>
                  <p>Dengan pengalaman oleh tim, kami didukung oleh tim profesional agar alat berat tetap optimal dan terawat dengan baik.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-broadcast"></i>
                  <h3>Jangkauan & MItra Kami</h3>
                  <p>Kami telah bermitra dengan berbagai perusahaan konstruksi dan infrastruktur di seluruh Indonesia terkhusus di wilayah Riau.</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-emoji-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-journal-richtext"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-headset"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-people"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- layanan Section -->
    <section id="layanan-kami" class="services section light-background py-5">
      <!-- Section Title -->
      <div class="container section-title d-flex justify-content-between align-items-center flex-wrap gap-2" data-aos="fade-up">
          <div>
              <h2 class="mb-0">Layanan</h2>
              <div><span>Layanan yang</span> <span class="description-title">Tersedia</span></div>
          </div>
          <a href="{{ route('pemesanan') }}">Selengkapnya <i class="bi bi-arrow-right"></i></a>
      </div>
      <!-- End Section Title -->

      <div class="container">
        <div class="row gy-4 justify-content-center text-center">
        <!-- Service Item 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card border-0 shadow-sm h-100">
            <div class="ratio ratio-16x9">
              <img src="assets/img/services/tendem.png" class="card-img-top" alt="Layanan kami">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Ekspedisi</h5>
              <p class="card-text text-muted">
                isi
              </p>
            </div>
            <a href="{{ route('pesanekspedisi') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="200">
              Pesan
            </a>
          </div>
        </div>
          <!-- Service Item 2 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card border-0 shadow-sm h-100">
            <div class="ratio ratio-16x9">
              <img src="assets/img/services/watertrailer1.jpg" class="card-img-top" alt="Layanan 1">
            </div>              
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">Pabrikasi</h5>
                <p class="card-text text-muted">isi</p>
              </div>
              <a href="{{ route('pesanpabrikasi') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="200">
                    Pesan
                </a>
            </div>
          </div>
          <!-- Service Item 3 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card border-0 shadow-sm h-100">
            <div class="ratio ratio-16x9">
              <img src="assets/img/services/foco.jpg" class="card-img-top" alt="Layanan 1">
            </div>
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">Perbaikan</h5>
                <p class="card-text text-muted">isi</p>
              </div>
              <a href="{{ route('pesanperbaikan') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="200">
                    Pesan
                </a>
            </div>
          </div>
          <!-- Service Item 4 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card border-0 shadow-sm h-100">
              <img src="assets/img/services/service4.jpg" class="card-img-top" alt="Layanan 4">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">Penyewaan</h5>
                <p class="card-text text-muted">isi</p>
              </div>
              <a href="{{ route('pesanpenyewaan') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="200">
                    Pesan
                </a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- layanan section -->

    <!-- Gallery Section -->
    <section id="galeri" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Galeri</h2>
        <div><span>Perangkat Kendaraan Berat</span> <span class="description-title">Kami</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Pertanyaan yang Sering </span><strong>Diajukan</strong></h3>
              <p>
                Beberapa pertanyaan yang sering diajukan
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apa saja jenis alat berat yang tersedia untuk disewa?</h3>
                <div class="faq-content">
                  <p>Kami menyediakan berbagai jenis alat berat seperti excavator, bulldozer, crane, forklift, dan dump truck untuk mendukung kebutuhan konstruksi, pertambangan, dan proyek lainnya.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Bagaimana cara menyewa alat berat di PT Mahir Trans Bersaudara?</h3>
                <div class="faq-content">
                  <p>Anda dapat menghubungi kami melalui telepon, WhatsApp, atau mengisi form yang telah disediakan untuk konsultasi dan pemesanan. Setelah itu, kami akan segera melakukan pengecekan dan konfirmasi kepada Anda, menentukan durasi sewa, dan mengatur pengiriman ke lokasi proyek Anda.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Bagaimana jika alat mengalami kerusakan saat digunakan?</h3>
                <div class="faq-content">
                  <p>Jika terjadi kerusakan, segera hubungi tim kami untuk mendapatkan bantuan teknis. Kami menyediakan layanan perbaikan dan penggantian alat jika diperlukan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Berapa lama durasi minimal penyewaan?</h3>
                <div class="faq-content">
                  <p>Durasi minimal penyewaan bervariasi tergantung pada jenis alat berat, namun umumnya kami menyediakan opsi sewa harian, mingguan, dan bulanan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->


            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/faq.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->
    <!-- Features Section -->
    <section id="mitra" class="features section">

      <div class="container">
          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Mitra</h2>
            <div><span>Mitra</span> <span class="description-title">Kami</span></div>
          </div><!-- End Section Title -->
          <!-- Swiper Wrapper -->
          <div class="swiper mySwiper" data-aos="fade-up">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="features-item text-center d-flex flex-column align-items-center justify-content-center h-100 p-3 border rounded shadow-sm">
                      <img src="assets/img/mitra/cosl.png" alt="PT. China Oilfield Services Limited (COSL) Indo" class="img-fluid mb-3" style="max-width: 60px;">
                      <h3 class="text-center">
                        <a href="https://id.linkedin.com/company/pt-cosl-indo-oilfield-chemical-division" class="stretched-link">PT. China Oilfield Services Limited (COSL) Indo</a>
                      </h3>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="features-item text-center d-flex flex-column align-items-center justify-content-center h-100 p-3 border rounded shadow-sm">
                      <img src="assets/img/mitra/csa.png" alt="PT. Cakrawala Sumber Abadi" class="img-fluid mb-3" style="max-width: 60px;">
                      <h3 class="text-center">
                        <a href="https://id.linkedin.com/in/chandra-lim-86a98347" class="stretched-link">PT. Cakrawala Sumber Abadi</a>
                      </h3>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="features-item text-center d-flex flex-column align-items-center justify-content-center h-100 p-3 border rounded shadow-sm">
                      <img src="assets/img/mitra/mkb.png" alt="PT. Multi Karya Berdikari" class="img-fluid mb-3" style="max-width: 60px;">
                      <h3 class="text-center">
                        <a href="https://id.linkedin.com/company/pt-cosl-indo-oilfield-chemical-division" class="stretched-link">PT. Multi Karya Berdikari</a>
                      </h3>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="features-item text-center d-flex flex-column align-items-center justify-content-center h-100 p-3 border rounded shadow-sm">
                      <img src="assets/img/mitra/btm.png" alt="PT. Bumi Tata Mulia" class="img-fluid mb-3" style="max-width: 60px;">
                      <h3 class="text-center">
                        <a href="https://www.tatamulia.co.id/" class="stretched-link">PT. Bumi Tata Mulia</a>
                      </h3>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="features-item text-center d-flex flex-column align-items-center justify-content-center h-100 p-3 border rounded shadow-sm">
                      <img src="assets/img/mitra/km.png" alt="CV. Karya Mitra" class="img-fluid mb-3" style="max-width: 60px;">
                      <h3 class="text-center">
                        <a href="#" class="stretched-link">CV. Karya Mitra</a>
                      </h3>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="features-item text-center d-flex flex-column align-items-center justify-content-center h-100 p-3 border rounded shadow-sm">
                      <img src="assets/img/mitra/rsu.png" alt="PT. Recon Sarana Utama" class="img-fluid mb-3" style="max-width: 60px;">
                      <h3 class="text-center">
                        <a href="https://recon.co.id/" class="stretched-link">PT. Recon Sarana Utama</a>
                      </h3>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="features-item text-center d-flex flex-column align-items-center justify-content-center h-100 p-3 border rounded shadow-sm">
                      <img src="assets/img/mitra/ib.png" alt="PT. Indrilco Bakti" class="img-fluid mb-3" style="max-width: 60px;">
                      <h3 class="text-center">
                        <a href="https://www.indrillcogroup.com/indrillcobakti" class="stretched-link">PT. Indrilco Bakti</a>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
          </div>
    </section><!-- /Features Section -->
    <!-- Contact Section -->
    <section id="kontak" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak Kami</h2>
        <div><span>Silahkan Hubungi</span> <span class="description-title">Kami</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telepon</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

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

  <!-- swiperjs -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3, // Menampilkan 3 card sekaligus
      spaceBetween: 20, // Jarak antar card
      loop: true, // Looping otomatis
      autoplay: {
        delay: 2000, // Pergantian slide setiap 2 detik
        disableOnInteraction: false, // Tetap autoplay meskipun pengguna berinteraksi
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        768: { slidesPerView: 3 },
        480: { slidesPerView: 2 },
        320: { slidesPerView: 1 }
      }
    });
  </script>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>