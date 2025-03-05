<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Galeri - PT. Mahir Trans Bersaudara</title>
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
          <li><a href="{{ route('layanan') }}" >Layanan</a></li>
          <li><a href="{{ route('galeri') }}" class="active">Galeri</a></li>
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
                <h1>Galeri Kami</h1>
                </div>
            </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li class="current">Galeri</li>
            </ol>
            </div>
        </nav>
        </div><!-- End Page Title -->

        <!-- Gallery Section -->
        <section id="galeri" class="gallery section">
          <!-- Section Title -->
            <h2 class="text-center mb-4" data-aos="fade-up"><span class="fw-bold text-primary">Galeri</span> Kami</h2>
          <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <!-- Dropdown untuk memilih kategori -->
                <div class="mb-4">
                    <select id="filterKategori" class="form-select">
                        <option value="semua">Semua Kategori</option>
                        @foreach($kategoris as $kategori)
                            <option value="{{ $kategori }}">{{ $kategori }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Kontainer untuk galeri -->
                <div class="row g-3" id="gallery-container">
                 @foreach($gambar as $gbr)
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item position-relative">
                            <a href="{{ asset('/images/' . $gbr->gambar) }}" class="glightbox" data-gallery="images-gallery">
                                <div class="ratio ratio-1x1">
                                    <img src="{{ asset('/images/' . $gbr->gambar) }}" alt="" class="img-fluid object-fit-cover w-100 h-100 rounded">
                                </div>
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->
                @endforeach
                </div>
            </div>
        </section><!-- /Gallery Section -->

        <!-- Script AJAX untuk filter -->
        <script>
        document.addEventListener("DOMContentLoaded", function () {
            const lightbox = GLightbox({
                selector: '.glightbox',  // Pastikan semua elemen dengan class ini bisa dibuka
                closeButton: true,       // Aktifkan tombol close
                touchNavigation: true,
                loop: true
            });

            document.getElementById('filterKategori').addEventListener('change', function () {
                let kategori = this.value;
                fetch(`/galeri/filter/${kategori}`)
                    .then(response => response.json())
                    .then(data => {
                        let galleryContainer = document.getElementById('gallery-container');
                        galleryContainer.innerHTML = '';

                        if (data.length === 0) {
                            galleryContainer.innerHTML = '<p class="text-center">Tidak ada gambar dalam kategori ini.</p>';
                        } else {
                            data.forEach(item => {
                                let galleryItem = `
                                    <div class="col-lg-3 col-md-4">
                                        <div class="gallery-item position-relative">
                                            <a href="/images/${item.gambar}" class="glightbox" data-gallery="images-gallery">
                                                <div class="ratio ratio-1x1">
                                                    <img src="/images/${item.gambar}" alt="" class="img-fluid object-fit-cover w-100 h-100 rounded">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                `;
                                galleryContainer.innerHTML += galleryItem;
                            });

                            // Re-inisialisasi Glightbox setelah update konten
                            lightbox.reload();
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
        </script>
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