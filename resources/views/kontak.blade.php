<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kontak - PT. Mahir Trans Bersaudara</title>
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
          <li><a href="{{ route('galeri') }}" >Galeri</a></li>
          <li><a href="{{ route('mitra') }}" >Mitra</a></li>
          <li><a href="{{ route('kontak') }}" class="active">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
    <main class="main">
    <div class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 1050">
      <div id="toastNotification" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
                <div class="toast-body" id="toastMessage">
                  Pesan berhasil dikirim!
                </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>
        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade">
        <div class="heading">
            <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                <h1>Kontak</h1>
                </div>
            </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li class="current">Kontak</li>
            </ol>
            </div>
        </nav>
        </div><!-- End Page Title -->

      <!-- Contact Section -->
      <section id="kontak" class="contact section">
      <div class="container" data-aos="fade-up">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" data-aos="fade-up">
              <strong>Berhasil!</strong> {{ Session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" data-aos="fade-up">
              <strong>Gagal!</strong> {{ Session('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
      </div>
      <!-- Section Title -->
      <h2 class="text-center mb-4" data-aos="fade-up"><span class="fw-bold text-primary">Kontak</span> Kami</h2>
      <!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

      
        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Jalan Lingkar, Balairaja, Pinggir, Riau, 28784</p>
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
            <form id="contactForm" action="{{ route('postkontak') }}" method="POST" data-aos="fade-up" data-aos-delay="200">
                @csrf
                <div class="row gy-4">
                  <div class="col-md-6">
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Nama / Perusahaan" value="{{ old('name') }}" required>
                      @error('name')
                          <div class="invalid-feedback">Kolom ini wajib diisi</div>
                      @enderror
                  </div>

                  <div class="col-md-6">
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email" value="{{ old('email') }}" required>
                      @error('email')
                          <div class="invalid-feedback">Kolom ini wajib diisi</div>
                      @enderror
                  </div>

                  <div class="col-md-6">
                      <input type="text" name="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror"
                            placeholder="Nomor WhatsApp" value="{{ old('whatsapp') }}">
                      @error('whatsapp')
                          <div class="invalid-feedback">Kolom ini wajib diisi</div>
                      @enderror
                  </div>

                  <div class="col-md-6">
                      <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror"
                            placeholder="Perihal" value="{{ old('subject') }}" required>
                      @error('subject')
                          <div class="invalid-feedback">Kolom ini wajib diisi</div>
                      @enderror
                  </div>

                  <div class="col-md-12">
                      <textarea name="message" class="form-control @error('message') is-invalid @enderror"
                                rows="6" placeholder="Pesan" required>{{ old('message') }}</textarea>
                      @error('message')
                          <div class="invalid-feedback">Kolom ini wajib diisi</div>
                      @enderror
                  </div>

                  <div class="col-md-12 text-center">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmModal">
                          Kirim Pesan
                      </button>
                  </div>
                </div>
            </form>
        </div><!-- End Contact Form -->

          <!-- Modal Konfirmasi -->
          <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Pengiriman</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          Apakah Anda yakin ingin mengirim pesan ini?
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-primary" id="confirmSend">Ya, Kirim</button>
                      </div>
                  </div>
              </div>
          </div>
          
          </div>
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

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
      document.getElementById("confirmSend").addEventListener("click", function () {
          document.getElementById("contactForm").submit();
      });
  </script>

  <script>
      document.addEventListener("DOMContentLoaded", function () {
        let message = "{{ e(session('success') ?? session('error')) }}";
        let messageType = "{{ session('success') ? 'success' : (session('error') ? 'error' : '') }}";

          if (message) {
              let toastMessage = document.getElementById("toastMessage");
              let toastNotification = document.getElementById("toastNotification");

              toastMessage.innerHTML = message;

              // Ubah warna berdasarkan jenis notifikasi
              if (messageType === "success") {
                  toastNotification.classList.remove("bg-danger");
                  toastNotification.classList.add("bg-success");
              } else if (messageType === "error") {
                  toastNotification.classList.remove("bg-success");
                  toastNotification.classList.add("bg-danger");
              }

              // Tampilkan toast
              let toast = new bootstrap.Toast(toastNotification);
              toast.show();
          }
      });
  </script>

</body>

</html>