<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Penyewaan | Mahir Trans Bersaudara</title>
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
  <div class="container">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Penyewaan
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Pemesanan</li>
                  <li class="breadcrumb-item active">Penyewaan</li>
                </ol>
              </nav>  
              </h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pemesan / Perusahaan</th>
                    <th scope="col">Jenis Kendaraan</th>
                    <th scope="col">Jumlah Kebutuhan</th>
                    <th scope="col">Durasi Penyewaan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($sewa as $sewa)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $sewa->nama }}</td>
                    <td>{{ $sewa->jenis_kendaraan }}</td>
                    <td>{{ $sewa->jumlah_kebutuhan }}</td>
                    <td>{{ $sewa->durasi }} {{ $sewa->satuan_durasi }}</td>
                    <td>
                      <a class="btn btn-outline-info" href="/admin/sewaselengkapnya/{{ $sewa->id }}" title="Detail"><i class="bi bi-eye"></i></a>
                       <button class="btn btn-outline-danger btn-delete" 
                              data-id="{{ $sewa->id }}" 
                              data-nama="{{ $sewa->nama }}"
                              data-url="{{ route('admin.deletepenyewaan', $sewa->id) }}"
                              title="Hapus">
                          <i class="bi bi-trash3"></i>
                       </button>
                    </td>
                </tr>
              @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
              <!-- Modal Konfirmasi Hapus -->
              <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              Apakah Anda yakin ingin menghapus pemesanan penyewaan dari <b id="namaSewa"></b>?
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                              <form id="deleteForm" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Hapus</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
  </div>

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
    document.addEventListener("DOMContentLoaded", function () {
        let deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        let deleteForm = document.getElementById("deleteForm");

        document.querySelectorAll(".btn-delete").forEach(button => {
            button.addEventListener("click", function () {
                let sewaNama = this.getAttribute("data-nama");
                let deleteUrl = this.getAttribute("data-url");

                document.getElementById("namaSewa").innerText = sewaNama;
                deleteForm.setAttribute("action", deleteUrl); // Set action ke form

                deleteModal.show();
            });
        });
    });
</script>


</body>

</html>