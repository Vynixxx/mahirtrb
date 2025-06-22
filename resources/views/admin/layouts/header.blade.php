  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    @if (Session::get('success') || Session::get('failed'))
        <div class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 1050">
            <div id="toastNotification" class="toast align-items-center text-white bg-{{ Session::get('success') ? 'success' : 'danger' }} border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true">
                <div class="d-flex">
                    <div class="toast-body" id="toastMessage">
                        <strong>{{ Session::get('success') ? 'Berhasil!' : 'Gagal!' }}</strong> {{ Session::get('success') ?? Session::get('failed') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                let toastElement = document.getElementById('toastNotification');
                let toast = new bootstrap.Toast(toastElement);
                toast.show();
            });
        </script>
    @endif
    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            {{-- Notifikasi Pemesanan --}}
            <li class="nav-item dropdown">
                <a class="nav-link nav-icon position-relative" href="#" data-bs-toggle="dropdown" data-bs-toggle="tooltip" title="Notifikasi Pemesanan">
                    <i class="bi bi-bell fs-5"></i>
                    @if(count($latestOrders))
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                        {{ count($latestOrders) }}
                    </span>
                    @endif
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications shadow">
                    <li class="dropdown-header text-primary fw-bold">
                        Anda memiliki {{ count($latestOrders) }} pemesanan baru
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    @forelse ($latestOrders as $order)
                    <li class="notification-item">
                        <i class="bi bi-box text-success"></i>
                        <div>
                            <h6 class="mb-1">{{ $order->nama ?? 'Pelanggan' }}</h6>
                            <p class="mb-0">
                                Pesanan dari 
                                <strong>
                                    @if ($order instanceof \App\Models\Ekspedisi)
                                        Ekspedisi
                                    @elseif ($order instanceof \App\Models\Pabrikasi)
                                        Pabrikasi
                                    @elseif ($order instanceof \App\Models\Penyewaan)
                                        Penyewaan
                                    @elseif ($order instanceof \App\Models\Perbaikan)
                                        Perbaikan
                                    @elseif ($order instanceof \App\Models\Supplier)
                                        Supplier
                                    @else
                                        Tidak Diketahui
                                    @endif
                                </strong>
                            </p>
                            <small class="text-muted">{{ $order->created_at->diffForHumans() }}</small>
                        </div>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    @empty
                    <li class="text-center text-muted p-3">Tidak ada pemesanan baru</li>
                    @endforelse
                </ul>
            </li>

            {{-- Pesan Masuk --}}
            <li class="nav-item dropdown">
                <a class="nav-link nav-icon position-relative" href="#" data-bs-toggle="dropdown" data-bs-toggle="tooltip" title="Pesan Masuk">
                    <i class="bi bi-chat-left-text fs-5"></i>
                    @if($messages->count())
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                        {{ $messages->count() }}
                    </span>
                    @endif
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages shadow">
                    <li class="dropdown-header text-success fw-bold">
                        Anda memiliki {{ $messages->count() }} pesan baru
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    @forelse($messages as $message)
                    <li class="message-item">
                    <a href="{{ route('admin.kontak') }}">
                        <img src="{{ asset('assetsadmin/img/default-user.png') }}" alt="" class="rounded-circle">
                        <div>
                            <h4>{{ $message->name }}</h4>
                            <p>{{ Str::limit($message->message, 50) }}</p>
                            <p>{{ $message->created_at->diffForHumans() }}</p>
                        </div>
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                @empty
                <li class="dropdown-header text-center">Tidak ada pesan baru</li>
                    @endforelse
                    <li class="dropdown-footer text-center">
                        <a href="{{ route('admin.kontak') }}" class="text-primary fw-bold">Lihat semua pesan</a>
                    </li>
                </ul>
            </li>

            {{-- Profil --}}
            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('assetsadmin/img/newprofile.png') }}" alt="Profile" class="rounded-circle" width="32" height="32">
                    <span class="d-none d-md-inline ps-2">Profil</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile shadow">
                    <li class="dropdown-header text-center">
                        <img src="{{ asset('assetsadmin/img/newprofile.png') }}" class="rounded-circle shadow mb-2" width="60" height="60">
                        <h6 class="mb-0">PT. Mahir Trans Bersaudara</h6>
                        <small class="text-muted">Administrator</small>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.profile') }}">
                            <i class="bi bi-person me-2"></i> <span>Profil</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="https://wa.me/6285162669547?text=Halo+aku+butuh+bantuan+nih" target="_blank">
                            <i class="bi bi-question-circle me-2"></i> <span>Bantuan</span>
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="px-3 py-2">
                        <form action="{{ route('cred.logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger w-100 d-flex align-items-center justify-content-center">
                                <i class="bi bi-box-arrow-right me-2"></i> <span>Keluar</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>


  </header><!-- End Header -->