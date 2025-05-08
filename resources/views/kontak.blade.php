<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ __('msg.menu_kontak') }} - PT. Mahir Trans Bersaudara</title>
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
<style>
  .btn-primary:hover {
    background-color: #0056b3;
    transform: scale(1.05);
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  }
  .btn-primary:active {
    transform: scale(0.95);
  }
</style>
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
          <li><a href="{{ route('layanan') }}">{{ __('msg.menu_layanan') }}</a></li>
          <li><a href="{{ route('galeri') }}">{{ __('msg.menu_galeri') }}</a></li>
          <li><a href="{{ route('mitra') }}">{{ __('msg.menu_mitra') }}</a></li>
          <li><a href="{{ route('kontak') }}" class="active">{{ __('msg.menu_kontak') }}</a></li>

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
                <h1>{{ __('msg.menu_kontak') }}</h1>
                </div>
            </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">{{ __('msg.menu_beranda') }}</a></li>
                <li class="current">{{ __('msg.menu_kontak') }}</li>
            </ol>
            </div>
        </nav>
        </div><!-- End Page Title -->

      <!-- Contact Section -->
      <section id="kontak" class="contact section">

      <!-- Section Title -->
      <h2 class="text-center mb-4" data-aos="fade-up">{!! __('msg.kontak_kami1') !!}</h2>
      <!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

      
        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>{{ __('msg.alamat') }}</h3>
                  <p>{{ __('msg.isi_alamat') }}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>{{ __('msg.telepon') }}</h3>
                  <p>{{ __('msg.isi_telepon') }}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>{{ __('msg.email') }}</h3>
                  <p>{{ __('msg.isi_email') }}</p>
                </div>
              </div><!-- End Info Item -->
          </div>

          <div class="col-lg-8">
            <form id="contactForm" action="{{ route('postkontak') }}" method="POST" data-aos="fade-up" data-aos-delay="200">
                @csrf
                <div class="row gy-4">
                  <div class="col-md-6">
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="{{ __('msg.nama_perusahaan') }}" value="{{ old('name') }}" required>
                      @error('name')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="col-md-6">
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="{{ __('msg.email') }}" value="{{ old('email') }}" required>
                      @error('email')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="col-md-6">
                      <input type="number" name="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror"
                            placeholder="{{ __('msg.nomor_wa') }}" value="{{ old('whatsapp') }}">
                      @error('whatsapp')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="col-md-6">
                      <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror"
                            placeholder="{{ __('msg.perihal') }}" value="{{ old('subject') }}" required>
                      @error('subject')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="col-md-12">
                      <textarea name="message" class="form-control @error('message') is-invalid @enderror"
                                rows="6" placeholder="{{ __('msg.pesan') }}" required>{{ old('message') }}</textarea>
                      @error('message')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="d-flex justify-content-center align-items-center my-3">
                      <button type="button" class="btn btn-primary btn-lg shadow-sm px-4 py-2 fw-bold d-flex align-items-center gap-2" 
                          data-bs-toggle="modal" data-bs-target="#confirmModal"
                          style="transition: all 0.3s ease-in-out;">
                          <i class="bi bi-send"></i> {{ __('msg.kirim_pesan') }}
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