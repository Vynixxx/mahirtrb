<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logomtbscale.png" alt="Logo Perusahaan">
        <!-- <h1 class="sitename">Mahir Trans Bersaudara</h1> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#home" class="active">{{ __('msg.menu_beranda') }}</a></li>
          <li><a href="#about">{{ __('msg.menu_tentang') }}</a></li>
          <li><a href="#services">{{ __('msg.menu_layanan') }}</a></li>
          <li><a href="#gallery">{{ __('msg.menu_galeri') }}</a></li>
          <li><a href="#partners">{{ __('msg.menu_mitra') }}</a></li>
          <li><a href="#contact">{{ __('msg.menu_kontak') }}</a></li>

          <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="bottom">
              <a href="{{ url('/lang/id') }}" class="nav-link">
                  <img src="{{ asset('assets/id.png') }}" alt="Bahasa Indonesia" width="20">
                  <span class="d-xl-none ms-1">Bahasa Indonesia</span>
              </a>
              <a href="{{ url('/lang/en') }}" class="nav-link">
                  <img src="{{ asset('assets/en.png') }}" alt="English" width="20">
                  <span class="d-xl-none ms-1">English</span>
              </a>
          </li>

        </ul>
      
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>