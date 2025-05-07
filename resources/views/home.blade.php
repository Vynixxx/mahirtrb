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
    <div class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 1050">
      <div id="toastNotification" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
                <div class="toast-body" id="toastMessage">
                </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>
    <!-- Beranda Section -->
    <section id="beranda" class="hero section dark-background">
      <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

      <div class="container">
        <div class="row gy-4 justify-content-between mt-5">
          <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/headerbaru.png" class="img-fluid animated" alt="">
          </div>

          <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
            <h1>{{ __('msg.halaman_atas') }} <span> {{ __('msg.halaman_atasgaris') }}</span></h1>
            <p>{{ __('msg.halaman_atasbawahgaris') }}</p>
            <div class="d-grid d-sm-flex gap-3 mt-3">
                <a href="#tentang-kami" class="btn-get-started"><center>{{ __('msg.selengkapnya') }}</center></a>
                <a href="{{ url('profile-company/Profile_Company.pdf') }}" target="_blank" class="btn-get-started">
                <center><i class="bi bi-file-earmark-pdf me-2"></i> {{ __('msg.profil_perusahaan') }}</center>
                </a>            
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
            <h3>{{ __('msg.tentang_kami') }}</h3>
            <h2>{{ __('msg.siapa_kami') }}</h2>
            <p>{{ __('msg.deskripsi_perusahaan') }}</p>
            <a href="{{ route('tentang-kami') }}" class="read-more"><span>{{ __('msg.profil_perusahaan') }}</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-award"></i>
                  <h3>{{ __('msg.komitmen_kami') }}</h3>
                  <p>{{ __('msg.deskripsi_komitmen') }}</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-star"></i>
                  <h3>{{ __('msg.keunggulan_layanan') }}</h3>
                  <p>{{ __('msg.deskripsi_keunggulan') }}</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-person-check"></i>
                  <h3>{{ __('msg.profesionalisme_tim') }}</h3>
                  <p>{{ __('msg.deskripsi_profesionalisme') }}</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-broadcast"></i>
                  <h3>{{ __('msg.jangkauan_mitra') }}</h3>
                  <p>{{ __('msg.deskripsi_jangkauan') }}</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- layanan Section -->
    <section id="layanan-kami" class="services section light-background py-5">
      <!-- Section Title -->
      <div class="container section-title d-flex justify-content-between align-items-center flex-wrap gap-2" data-aos="fade-up">
          <div>
              <h2 class="mb-0">{{ __('msg.layanan') }}</h2>
              <div><span>{{ __('msg.layanan_tersedia') }}</span></div>
          </div>
          <a href="{{ route('pemesanan') }}">{{ __('msg.selengkapnya1') }} <i class="bi bi-arrow-right"></i></a>
      </div>
      <!-- End Section Title -->

      <div class="container">
        <div class="row gy-4 justify-content-center text-center">
            <!-- Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 custom-service-card">
                    <img src="assets/img/services/ekspedisi.png" class="custom-card-img-top" alt="Ekspedisi">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ __('msg.layanan_ekspedisi_judul') }}</h5>
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
                        <h5 class="card-title fw-bold">{{ __('msg.layanan_pabrikasi_judul') }}</h5>
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
                        <h5 class="card-title fw-bold">{{ __('msg.layanan_perbaikan_judul') }}</h5>
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
                        <h5 class="card-title fw-bold">{{ __('msg.layanan_penyewaan_judul') }}</h5>
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
                        <h5 class="card-title fw-bold">{{ __('msg.layanan_supplier_judul') }}</h5>
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

    <!-- Gallery Section -->
    <section id="galeri" class="gallery section">

    <!-- Section Title -->
    <div class="container section-title d-flex justify-content-between align-items-center flex-wrap gap-2" data-aos="fade-up">
        <div>
            <h2 class="mb-0">{{ __('msg.menu_galeri') }}</h2>
            <div><span>{{ __('msg.dokumentasi') }}</span></div>
        </div>
        <a href="{{ route('galeri') }}">{{ __('msg.selengkapnya1') }} <i class="bi bi-arrow-right"></i></a>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-3">
            @foreach($gambar as $gbr)
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="gallery-item position-relative">
                        <a href="{{ asset('/images/' . $gbr->gambar) }}" class="glightbox" data-gallery="images-gallery">
                            <div class="ratio ratio-1x1">
                                <img src="{{ asset('/images/' . $gbr->gambar) }}" alt="" class="img-fluid rounded object-fit-cover">
                            </div>
                        </a>
                    </div>
                </div><!-- End Gallery Item -->
            @endforeach
        </div>
    </div>

    </section><!-- /Gallery Section -->

    <!-- Features Section -->
    <section id="mitra" class="features section">

      <div class="container">
          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('msg.menu_mitra') }}</h2>
            <div><span>{{ __('msg.deskripsi_mitra') }}</span></div>
          </div><!-- End Section Title -->
          <!-- Swiper Wrapper -->
          <div class="swiper mySwiper" data-aos="fade-up">
                <div class="swiper-wrapper">
                @foreach ($mitra as $m)
                  <div class="swiper-slide">
                      <div class="features-item text-center d-flex flex-column align-items-center justify-content-center h-100 p-3 border rounded shadow-sm">
                          <div class="img-container" style="width: 100px; height: 100px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
                              <img src="{{ asset('/images/' . $m->gambar) }}" alt="{{ $m->nama }}" class="img-fluid mb-3" style="max-width: 100%; max-height: 100%;">
                          </div>
                          <h3 class="text-center">
                              <p>{{ $m->nama }}</p>
                          </h3>
                      </div>
                  </div>
                @endforeach
                </div>
              </div>
          </div>
    </section><!-- /Features Section -->
    <!-- Contact Section -->
    <section id="kontak" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{ __('msg.kontak_kami') }}</h2>
        <div><span>{{ __('msg.silakan_hubungi') }}</span> </div>
      </div><!-- End Section Title -->

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
                          <h5 class="modal-title" id="confirmModalLabel">{{ __('msg.konfirmasi_pengiriman') }}</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      {{ __('msg.pesan_konfirmasi') }}
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('msg.batal') }}</button>
                          <button type="button" class="btn btn-primary" id="confirmSend">{{ __('msg.ya_kirim') }}</button>
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
  <script>
    (function () {
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function () {
            window.history.pushState(null, "", window.location.href);
        };
    })();
</script>

  <script>
        window.onpageshow = function(event) {
            if (event.persisted) {
                window.location.reload();
            }
        };
  </script>
</body>

</html>