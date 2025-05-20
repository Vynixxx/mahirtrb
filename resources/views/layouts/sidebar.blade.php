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
     
      <li class="nav-heading">{{ __('msg.bahasa') }}</li>
      <li class="nav-item">
          <a href="{{ url('/lang/id') }}" class="nav-link collapsed">
              <img src="{{ asset('assets/id.png') }}" width="17"> <span class="ms-2">Bahasa Indonesia</span>
          </a>
          <a href="{{ url('/lang/en') }}" class="nav-link collapsed">
              <img src="{{ asset('assets/en.png') }}" width="17"> <span class="ms-2">English</span>
          </a>
      </li>
      <li class="nav-heading">{{ __('msg.display') }}</li>
      <li class="nav-item">
        <a href="javascript:void(0);" class="nav-link" id="toggle-theme">
          <i class="bi bi-circle-half"></i>
          <span id="theme-label">Dark Mode</span>
          <span class="ms-auto" id="theme-icon">🌙</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const toggle = document.getElementById("toggle-theme");
      const icon = document.getElementById("theme-icon");
      const label = document.getElementById("theme-label");
      const currentTheme = localStorage.getItem("theme");

      function applyTheme(theme) {
          if (theme === "dark") {
              document.body.classList.add("dark-mode");
              icon.textContent = "🌞";
              label.textContent = "Light Mode";
          } else {
              document.body.classList.remove("dark-mode");
              icon.textContent = "🌙";
              label.textContent = "Dark Mode";
          }
      }

      applyTheme(currentTheme);

      toggle?.addEventListener("click", function () {
          const isDark = document.body.classList.contains("dark-mode");
          const newTheme = isDark ? "light" : "dark";
          localStorage.setItem("theme", newTheme);
          applyTheme(newTheme);
      });
  });
  </script>