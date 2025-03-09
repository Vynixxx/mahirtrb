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

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-chat-left-text"></i>
                <span class="badge bg-success badge-number">{{ $messages->count() }}</span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                <li class="dropdown-header">
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

                <li class="dropdown-footer">
                    <a href="{{ route('admin.kontak') }}">Lihat semua pesan</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Profil</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile shadow-lg">
            <!-- Header dengan Avatar -->
            <li class="dropdown-header text-center">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random&size=150&bold=true" 
                alt="Profile Picture" class="rounded-circle shadow mt-3 mb-3">
                <h6 class="mb-0">PT. Mahir Trans Bersaudara</h6>
                <small class="text-muted">Administrator</small>
            </li>
            <li><hr class="dropdown-divider"></li>

            <!-- Profil -->
            <li>
                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.profile') }}">
                    <i class="bi bi-person me-2"></i>
                    <span>Profil</span>
                </a>
            </li>
            <li><hr class="dropdown-divider"></li>

            <!-- Bantuan -->
            <li>
                <a class="dropdown-item d-flex align-items-center" href="https://wa.me/6285162669547?text=Halo+aku+butuh+bantuan+nih">
                    <i class="bi bi-question-circle me-2"></i>
                    <span>Bantuan</span>
                </a>
            </li>
            <li><hr class="dropdown-divider"></li>

            <!-- Logout -->
            <li class="px-3 py-2">
                <form action="{{ route('cred.logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger w-100 d-flex align-items-center justify-content-center">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        <span>Keluar</span>
                    </button>
                </form>
            </li>
        </ul>

        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->