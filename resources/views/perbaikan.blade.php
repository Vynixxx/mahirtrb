<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ __('msg.perbaikan') }} - PT. Mahir Trans Bersaudara</title>
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
            <li><a href="{{ route('home') }}">{{ __('msg.menu_beranda') }}</a></li>
            <li><a href="{{ route('tentang-kami') }}">{{ __('msg.menu_tentang') }}</a></li>
            <li><a href="{{ route('layanan') }}">{{ __('msg.menu_layanan') }}</a></li>
            <li><a href="{{ route('galeri') }}">{{ __('msg.menu_galeri') }}</a></li>
            <li><a href="{{ route('mitra') }}">{{ __('msg.menu_mitra') }}</a></li>
            <li><a href="{{ route('kontak') }}"">{{ __('msg.menu_kontak') }}</a></li>

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
        <h2 class="text-center mb-4" data-aos="fade-up" data-aos-delay="100">
            {!! __('prosedur.perbaikan.judul') !!}
        </h2>

        <div class="timeline">
            @foreach(__('prosedur.perbaikan.langkah') as $index => $step)
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
                    <div class="circle bg-{{ ['success','warning','primary','danger','info','secondary'][$index] }}">
                        <i class="{{ $step['ikon'] }}"></i>
                    </div>
                    <h6>{{ $step['judul'] }}</h6>
                    <p class="custom">
                        {!! Str::replaceArray(':route', [
                            $index === 0 ? route('pesanperbaikan') : '#'
                        ], $step['deskripsi']) !!}
                    </p>
                </div>

                @if($index < count(__('prosedur.perbaikan.langkah')) - 1)
                    <div class="line" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}"></div>
                @endif
            @endforeach
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
                {!! __('msg.cta_judul') !!}
                </h2>
                <p class="animate-text" data-aos="fade-up" data-aos-delay="200">
                {{ __('msg.cta_desc') }}
                </p>
                <a href="{{ route('pesanperbaikan') }}" class="btn btn-primary btn-lg mb-5 animate-btn" data-aos="zoom-in" data-aos-delay="400">
                {{ __('msg.pesan_sekarang') }}
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