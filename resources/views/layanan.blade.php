<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Layanan - PT. Mahir Trans Bersaudara</title>
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
                <h1>Layanan Kami</h1>
                </div>
            </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li class="current">Layanan</li>
            </ol>
            </div>
        </nav>
        </div><!-- End Page Title -->

    <!-- layanan Section -->
    <section id="layanan-kami" class="services section light-background py-5">
    <h2 class="text-center mb-4" data-aos="fade-up">Layanan yang <span class="fw-bold text-primary">Kami Tawarkan</span></h2>


      <div class="container">
        <div class="row gy-4 justify-content-center text-center mt-5">
        <!-- Service Item 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
          <div class="card border-0 shadow-sm h-100">
              <img src="assets/img/services/ekspedisi.png" class="card-img-top" alt="Layanan kami">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Ekspedisi</h5>
              <p class="card-text text-muted">
              PT. Mahir Trans Bersaudara hadir sebagai mitra terpercaya dalam penyewaan ekspedisi khusus untuk kendaraan alat berat. Dengan armada terbaik dan tenaga profesional berpengalaman, kami siap membantu pengangkutan alat berat Anda dengan aman, cepat, dan efisien ke berbagai lokasi di seluruh Indonesia terkhusus di wilayah Riau. Kami memahami bahwa setiap pengiriman memiliki tantangan tersendiri, oleh karena itu kami menawarkan layanan ekspedisi yang fleksibel dan disesuaikan dengan kebutuhan Anda. Dari pengiriman Truk Foco, bulldozer, crane, hingga kendaraan berat lainnya, kami memastikan proses transportasi berjalan lancar dengan standar keselamatan tinggi. Percayakan kebutuhan logistik alat berat Anda kepada PT. Mahir Trans Bersaudara untuk solusi ekspedisi yang andal dan profesional.              
            </p>
            </div>
            <a href="{{ route('pesanekspedisi') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="200">
              Pesan Sekarang
            </a>
          </div>
        </div>
          <!-- Service Item 2 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card border-0 shadow-sm h-100">
              <img src="assets/img/services/pabrikasi.png" class="card-img-top" alt="Layanan 1">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">Pabrikasi</h5>
                <p class="card-text text-muted">PT. Mahir Trans Bersaudara menawarkan layanan pabrikasi berkualitas tinggi untuk memenuhi kebutuhan industri Anda. Dengan tim ahli dan peralatan modern, kami siap memproduksi berbagai komponen dan struktur berbahan logam, baik untuk industri konstruksi, manufaktur, hingga alat berat. Kami berkomitmen untuk menghadirkan hasil pabrikasi yang presisi, kuat, dan sesuai dengan standar kualitas tinggi. Setiap proses produksi dilakukan dengan ketelitian dan pengawasan ketat untuk memastikan ketahanan serta keamanan produk yang kami hasilkan. Dengan pengalaman dan dedikasi dalam industri ini, PT. Mahir Trans Bersaudara menjadi pilihan tepat bagi Anda yang membutuhkan solusi pabrikasi profesional, efisien, dan terpercaya.</p>
              </div>
              <a href="{{ route('pesanpabrikasi') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="300">
                    Pesan Sekarang
                </a>
            </div>
          </div>
          <!-- Service Item 3 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
            <div class="card border-0 shadow-sm h-100">
              <img src="assets/img/services/perbaikan.png" class="card-img-top" alt="Layanan 1">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">Perbaikan</h5>
                <p class="card-text text-muted">PT. Mahir Trans Bersaudara menyediakan layanan perbaikan alat berat yang handal dan profesional untuk memastikan performa optimal mesin Anda. Dengan teknisi berpengalaman dan peralatan canggih, kami siap menangani berbagai jenis perbaikan, mulai dari perawatan rutin hingga perbaikan komponen utama seperti mesin, hidrolik, dan sistem kelistrikan. Kami memahami bahwa downtime alat berat dapat berdampak besar pada operasional bisnis, oleh karena itu kami berkomitmen untuk memberikan layanan yang cepat, efisien, dan berkualitas tinggi. Apapun jenis alat berat Anda, percayakan perbaikannya kepada kami. PT. Mahir Trans Bersaudara siap menjadi mitra terbaik Anda dalam menjaga kinerja dan keandalan alat berat di lapangan.</p>
              </div>
              <a href="{{ route('pesanperbaikan') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="400">
                    Pesan Sekarang
                </a>
            </div>
          </div>
          <!-- Service Item 4 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card border-0 shadow-sm h-100">
              <img src="assets/img/services/penyewaan.png" class="card-img-top" alt="Layanan 4">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">Penyewaan</h5>
                <p class="card-text text-muted">PT. Mahir Trans Bersaudara menyediakan layanan penyewaan alat berat dengan berbagai pilihan unit berkualitas tinggi untuk mendukung kelancaran proyek konstruksi, pertambangan, dan industri lainnya. Dengan armada yang terawat dan siap pakai, kami menawarkan beragam alat berat sesuai dengan kebutuhan operasional Anda. Kami memahami pentingnya efisiensi dan ketepatan waktu dalam setiap proyek, sehingga kami berkomitmen memberikan layanan sewa yang fleksibel, harga kompetitif, serta dukungan teknis profesional. Percayakan kebutuhan alat berat Anda kepada PT. Mahir Trans Bersaudara untuk solusi sewa yang andal, efisien, dan berkualitas tinggi.</p>
              </div>
              <a href="{{ route('pesanpenyewaan') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="200">
                    Pesan Sekarang
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