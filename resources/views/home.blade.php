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
            <h1>Butuh Kendaraan Berat untuk Proyek Anda? <span> Kami Siap Membantu!</span></h1>
            <p>Mahir Trans Bersaudara hadir untuk memenuhi kebutuhan akan kendaraan berat dengan armada lengkap dan layanan terbaik.</p>
            <div class="d-grid d-sm-flex gap-3 mt-3">
                <a href="#tentang-kami" class="btn-get-started"><center>Selengkapnya</center></a>
                <a href="{{ url('profile-company/Profile_Company.pdf') }}" target="_blank" class="btn-get-started">
                <center><i class="bi bi-file-earmark-pdf me-2"></i> Profil Perusahaan</center>
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
            <h3>Tentang Kami</h3>
            <h2>Siapa Kami?</h2>
            <p>PT. Mahir Trans Bersaudara adalah perusahaan yang bergerak di bidang penyewaan, perbaikan, ekspedisi, dan pabrikasi alat berat. Beroperasi sejak 23 Februari 2023, kami berkomitmen menyediakan layanan profesional dan berkualitas untuk mendukung proyek konstruksi, infrastruktur, serta logistik, khususnya di Riau.

            Kami menawarkan berbagai alat berat seperti Foco Truck, Crane, Triller, dan Head Truck yang selalu dalam kondisi optimal. Didukung operator berpengalaman dan teknisi handal, kami memastikan peralatan berfungsi dengan efisiensi dan keamanan tinggi. Selain itu, kami menyediakan layanan perbaikan alat berat, ekspedisi, trucking, serta pabrikasi komponen industri.

            Dengan harga kompetitif, fleksibilitas penyewaan, dan layanan konsultasi, kami siap memberikan solusi terbaik bagi pelanggan. Seiring pertumbuhan sektor konstruksi dan logistik di Indonesia, PT. Mahir Trans Bersaudara terus berinovasi untuk menjadi mitra terpercaya yang mengutamakan kualitas, keselamatan, dan kepuasan pelanggan.</p>
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
            <!-- Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100 custom-service-card">
                    <img src="assets/img/services/supplier.png" class="custom-card-img-top" alt="Supplier">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Supplier</h5>
                        <p class="card-text text-muted">
                        Supplier berbagai kebutuhan, suku cadang, serta peralatan pendukung untuk operasional dan pemeliharaan alat berat.
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center pb-4">
                        <a href="{{ route('pesansupplier') }}" class="btn btn-primary btn-lg custom-animate-btn">
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

   <!-- Gallery Section -->
    <section id="galeri" class="gallery section">

    <!-- Section Title -->
    <div class="container section-title d-flex justify-content-between align-items-center flex-wrap gap-2" data-aos="fade-up">
        <div>
            <h2 class="mb-0">Galeri</h2>
            <div><span>Dokumentasi</span></div>
        </div>
        <a href="{{ route('galeri') }}">Selengkapnya <i class="bi bi-arrow-right"></i></a>
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
            <h2>Mitra</h2>
            <div><span>Mitra</span> <span class="description-title">Kami</span></div>
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
                <p>Jalan Lingkar Timur Pinggir, Balairaja, Pinggir, Riau, 28784</p>
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
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="col-md-6">
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email" value="{{ old('email') }}" required>
                      @error('email')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="col-md-6">
                      <input type="number" name="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror"
                            placeholder="Nomor WhatsApp" value="{{ old('whatsapp') }}">
                      @error('whatsapp')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="col-md-6">
                      <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror"
                            placeholder="Perihal" value="{{ old('subject') }}" required>
                      @error('subject')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="col-md-12">
                      <textarea name="message" class="form-control @error('message') is-invalid @enderror"
                                rows="6" placeholder="Pesan" required>{{ old('message') }}</textarea>
                      @error('message')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="d-flex justify-content-center align-items-center my-3">
                      <button type="button" class="btn btn-primary btn-lg shadow-sm px-4 py-2 fw-bold d-flex align-items-center gap-2" 
                          data-bs-toggle="modal" data-bs-target="#confirmModal"
                          style="transition: all 0.3s ease-in-out;">
                          <i class="bi bi-send"></i> Kirim Pesan
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