<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Admin | Mahir Trans Bersaudara</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assetsadmin/img/favicon.ico') }}" rel="icon">
  <link href="{{ asset('assetsadmin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assetsadmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsadmin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsadmin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsadmin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsadmin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsadmin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsadmin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assetsadmin/css/style.css') }}" rel="stylesheet">

</head>

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- kontak Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Kontak Masuk</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-envelope"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jumlah_kontak }}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- mitra Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Mitra</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-square"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jumlah_mitra }}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End mitra Card -->

            <!-- Pemesanan Card -->
            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title">Total Pemesanan</h5>
                            <!-- Three-dots dropdown -->
                            <div class="dropdown">
                                <button class="btn btn-light border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Ekspedisi: {{ $totalekspedisi }}</a></li>
                                    <li><a class="dropdown-item">Pabrikasi: {{ $totalpabrikasi }}</a></li>
                                    <li><a class="dropdown-item">Penyewaan: {{ $totalpenyewaan }}</a></li>
                                    <li><a class="dropdown-item">Perbaikan: {{ $totalperbaikan }}</a></li>
                                    <li><a class="dropdown-item">Supplier: {{ $totalsupplier }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-card-list"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalPemesanan }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End pemesanan Card -->

            <!-- Reports -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Laporan Pemesanan</h5>
                        </div>

                        <!-- Chart -->
                        <div id="reportsChart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                let dataPemesanan = {
                                    totalPemesanan: {{ $totalPemesanan }},
                                    totalekspedisi: {{ $totalekspedisi }},
                                    totalpabrikasi: {{ $totalpabrikasi }},
                                    totalpenyewaan: {{ $totalpenyewaan }},
                                    totalperbaikan: {{ $totalperbaikan }},
                                    totalsupplier: {{ $totalsupplier }}
                                };

                                let chartOptions = {
                                    series: [{
                                        name: "Jumlah Pesanan",
                                        data: [dataPemesanan.totalPemesanan, dataPemesanan.totalekspedisi, dataPemesanan.totalpabrikasi, dataPemesanan.totalpenyewaan, dataPemesanan.totalperbaikan, dataPemesanan.totalsupplier]
                                    }],
                                    chart: {
                                        height: 350,
                                        type: 'bar'
                                    },
                                    plotOptions: {
                                        bar: { horizontal: false }
                                    },
                                    dataLabels: { enabled: false },
                                    xaxis: {
                                        categories: ["Semua", "Ekspedisi", "Pabrikasi", "Penyewaan", "Perbaikan", "Supplier"]
                                    }
                                };

                                let chart = new ApexCharts(document.querySelector("#reportsChart"), chartOptions);
                                chart.render();

                                document.querySelectorAll('.filter-option').forEach(item => {
                                    item.addEventListener('click', function () {
                                        let filter = this.getAttribute('data-filter');
                                        chart.updateSeries([{ name: "Jumlah Pesanan", data: [dataPemesanan[filter]] }]);
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
              <div class="card-body">
                  <div class="activity mt-5">
                      <h5 id="greeting" class="fw-bold text-primary"></h5>
                      <p id="subGreeting" class="text-muted"></p>
                  </div>
              </div>
          </div>

          <style>
              #greeting {
                  opacity: 0;
                  transform: translateY(-10px);
                  transition: opacity 1s ease-in-out, transform 1s ease-in-out;
              }

              #subGreeting {
                  opacity: 0;
                  transition: opacity 2s ease-in-out;
              }

              .typing {
                  display: inline-block;
                  overflow: hidden;
                  white-space: nowrap;
                  border-right: 3px solid transparent;
                  animation: typing 2s steps(30, end), blink 0.75s step-end infinite;
              }

              @keyframes typing {
                  from { width: 0; }
                  to { width: 100%; }
              }

              @keyframes blink {
                  from, to { border-color: transparent; }
                  50% { border-color: orange; }
              }
          </style>

          <script>
              document.addEventListener("DOMContentLoaded", function() {
                  let greetingElement = document.getElementById("greeting");
                  let subGreetingElement = document.getElementById("subGreeting");
                  let currentHour = new Date().getHours();
                  let greetingMessage = "";
                  let subMessage = "";
                  let emoji = "";

                  if (currentHour >= 5 && currentHour < 12) {
                      greetingMessage = "🌅 Selamat Pagi, Admin!";
                      subMessage = "Semoga harimu penuh semangat dan keberkahan! ☕✨";
                      emoji = "☀️";
                  } else if (currentHour >= 12 && currentHour < 15) {
                      greetingMessage = "🌞 Selamat Siang, Admin!";
                      subMessage = "Jangan lupa makan siang dan tetap produktif! 🍽️🔥";
                      emoji = "🍕";
                  } else if (currentHour >= 15 && currentHour < 18) {
                      greetingMessage = "🌇 Selamat Sore, Admin!";
                      subMessage = "Sore yang indah untuk menyelesaikan tugas dengan santai. 🍵🌻";
                      emoji = "🌆";
                  } else {
                      greetingMessage = "🌙 Selamat Malam, Admin!";
                      subMessage = "Terima kasih atas kerja kerasmu hari ini. Selamat beristirahat! 😴🌠";
                      emoji = "🌛";
                  }

                  // Animasi Muncul
                  setTimeout(() => {
                      greetingElement.classList.add("typing");
                      greetingElement.textContent = greetingMessage;
                      greetingElement.style.opacity = "1";
                      greetingElement.style.transform = "translateY(0)";
                  }, 500);

                  setTimeout(() => {
                      subGreetingElement.innerHTML = emoji + " " + subMessage;
                      subGreetingElement.style.opacity = "1";
                  }, 2500);
              });
          </script>
          <!-- End Recent Activity -->

          <style>
            .animation-container {
              position: relative;
              width: 100%;
              height: 200px;
              overflow: hidden;
              background:rgb(255, 255, 255);
            }

            canvas {
              position: absolute;
              top: 0;
              left: 0;
            }

            .fun-text {
              text-align: center;
              font-size: 1rem;
              font-weight: bold;
              color: #444;
              margin-top: 10px;
            }
          </style>

          <!-- Animasi Hiburan untuk Admin -->
          <div class="card">
            <div class="card-body pb-0 text-center">
              <!-- Container Animasi Pixel Art -->
              <div class="animation-container">
                <canvas id="starCanvas"></canvas>
                <canvas id="pixelCanvas"></canvas>
              </div>
              <!-- Pesan Hiburan -->
              <p class="fun-text">Selamat datang, Admin! Nikmati pertunjukan seru pixel ini!</p>
            </div>
          </div>

          <!-- Script untuk Animasi Pixel Art dan Bintang -->
          <script>
            const starCanvas = document.getElementById('starCanvas');
            const starCtx = starCanvas.getContext('2d');
            const pixelCanvas = document.getElementById('pixelCanvas');
            const pixelCtx = pixelCanvas.getContext('2d');
            
            starCanvas.width = pixelCanvas.width = document.querySelector(".animation-container").offsetWidth;
            starCanvas.height = pixelCanvas.height = 200;

            const stars = Array.from({ length: 50 }, () => ({
              x: Math.random() * starCanvas.width,
              y: Math.random() * starCanvas.height,
              speed: Math.random() * 1.5 + 0.5
            }));

            function drawStars() {
              starCtx.clearRect(0, 0, starCanvas.width, starCanvas.height);
              starCtx.fillStyle = 'white';
              stars.forEach(star => {
                starCtx.beginPath();
                starCtx.arc(star.x, star.y, 2, 0, Math.PI * 2);
                starCtx.fill();
                star.y += star.speed;
                if (star.y > starCanvas.height) star.y = 0;
              });
            }

            const pixelAnimals = [
              { x: 20, y: 100, sprite: '🐱', dx: 1 },
              { x: 50, y: 110, sprite: '🐶', dx: -1 },
              { x: 80, y: 90, sprite: '🐰', dx: 1.2 },
              { x: 110, y: 95, sprite: '🦊', dx: -0.8 },
              { x: 140, y: 105, sprite: '🐻', dx: 1.1 }
            ];

            function drawAnimals() {
              pixelCtx.clearRect(0, 0, pixelCanvas.width, pixelCanvas.height);
              pixelAnimals.forEach(animal => {
                pixelCtx.font = '24px Arial';
                pixelCtx.fillText(animal.sprite, animal.x, animal.y);
                animal.x += animal.dx;
                
                if (animal.x > pixelCanvas.width - 30 || animal.x < 0) {
                  animal.dx *= -1;
                }
              });
            }

            function animate() {
              drawStars();
              drawAnimals();
              requestAnimationFrame(animate);
            }

            animate();
          </script>
        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assetsadmin/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assetsadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assetsadmin/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assetsadmin/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assetsadmin/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('assetsadmin/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assetsadmin/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assetsadmin/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assetsadmin/js/main.js') }}"></script>

  <script>
      history.pushState(null, null, location.href);
      window.onpopstate = function () {
          history.go(1);
      };
  </script>

  <script>
      (function () {
          window.history.pushState(null, "", window.location.href);
          window.onpopstate = function () {
              window.history.pushState(null, "", window.location.href);
          };
      })();
  </script>

</body>

</html>