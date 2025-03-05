
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#kendaraan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-truck"></i><span>Kendaraan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="kendaraan-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('admin.layanan') }}">
              <i class="bi bi-circle"></i><span>Layanan</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.galeri') }}">
              <i class="bi bi-circle"></i><span>Galeri</span>
            </a>
          </li>
        </ul>
      </li><!-- End kendaraan Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.kontak') }}">
          <i class="bi bi-envelope"></i>
          <span>Kontak</span>
        </a>
      </li><!-- End kontak Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.mitra') }}">
          <i class="bi bi-person-square"></i>
          <span>Mitra</span>
        </a>
      </li><!-- End mitra Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pemesanan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-card-list"></i><span>Pemesanan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pemesanan-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Ekspedisi</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Pabrikasi</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Penyewaan</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Perbaikan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Pemesanan Nav -->

    </ul>

  </aside><!-- End Sidebar-->