
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-heading">{{ __('msg.halaman') }}</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('home') }}">
          <i class="bi bi-house"></i>
          <span>{{ __('msg.menu_beranda') }}</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('pesanekspedisi') }}">
          <i class="bi bi-basket"></i>
          <span>{{ __('msg.ekspedisi') }}</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('pesanpabrikasi') }}">
          <i class="bi bi-basket"></i>
          <span>{{ __('msg.pabrikasi') }}</span>
        </a>
      </li><!-- End kontak Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('pesanpenyewaan') }}">
          <i class="bi bi-basket"></i>
          <span>{{ __('msg.penyewaan') }}</span>
        </a>
      </li><!-- End mitra Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('pesanperbaikan') }}">
          <i class="bi bi-basket"></i>
          <span>{{ __('msg.perbaikan') }}</span>
        </a>
      </li><!-- End pemesanan Page Nav --> 

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('pesansupplier') }}">
          <i class="bi bi-basket"></i>
          <span>{{ __('msg.supplier') }}</span>
        </a>
      </li><!-- End pemesanan Page Nav --> 
     
       <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="bottom">
              <a href="{{ url('/lang/id') }}" class="nav-link collapsed">
                  <img src="{{ asset('assets/id.png') }}" alt="Bahasa Indonesia" width="17"> <span class="ms-2">Bahasa Indonesia</span>
              </a>
              <a href="{{ url('/lang/en') }}" class="nav-link collapsed">
                  <img src="{{ asset('assets/en.png') }}" alt="English" width="17"> <span class="ms-2">English</span>
              </a>
        </li>
    </ul>

  </aside><!-- End Sidebar-->