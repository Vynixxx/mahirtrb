<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Supplier | Mahir Trans Bersaudara</title>
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

  @include('layouts.headerp')
  @include('layouts.sidebar')

  <main id="main" class="main">
            <div class="container">
                <div class="container mt-3">
                    @if (Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong> {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (Session::get('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Gagal!</strong> {{ Session::get('failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="card mt-4" style="width: 800px">
                            <div class="card-body">
                              <div  href="" >
                                <h5 class="card-title text-center">
                                <nav class="d-flex justify-content-center">
                                </nav>
                                Supplier</h5>
                                <form action="{{ route('postPesansupplier') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h5>Detail Pemesan</h5>
                                    <div class="form-group mb-3">
                                        <label class="text-secondary mb-2">Nama Pemesan / Perusahaan</label>
                                        <input class="form-control border border-secondary" name="nama" required type="text">
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label class="text-secondary mb-2">Nomor WhatsApp</label>
                                            <input class="form-control border border-secondary" name="nohp" required type="number">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="text-secondary mb-2">Email</label>
                                            <input class="form-control border border-secondary" name="email" required type="email">
                                        </div>
                                    </div>
                                    <h5>Detail Kebutuhan</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-secondary mb-2">Nama Barang</label>
                                            <input type="text" class="form-control" name="nama_barang" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="text-secondary mb-2">Merek / Spesifikasi <span class="text-danger">(Opsional)</span></label>
                                            <input type="text" class="form-control" name="merek_spesifikasi" placeholder="Jika ada preferensi tertentu / Kosongkan saja">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <label class="text-secondary mb-2">Jumlah yang Dipesan</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="jumlah" min="1" required>
                                                <select class="form-select" name="satuan">
                                                    <option value="unit">Unit</option>
                                                    <option value="liter">Liter</option>
                                                    <option value="kilogram">Kilogram</option>
                                                    <option value="meter">Meter</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="text-secondary mb-2">Tanggal Kebutuhan</label>
                                            <input type="date" class="form-control" name="tanggal_kebutuhan" required>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="text-secondary mb-2">Catatan Tambahan <span class="text-danger">(Opsional)</span></label>
                                        <textarea class="form-control" name="catatan" rows="3" placeholder="Tambahkan catatan jika diperlukan / Kosongkan saja"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-5 w-100">
                                        <i class="bi bi-cart"></i> Pesan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><br><br><br><br>
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
        window.onpageshow = function(event) {
            if (event.persisted) {
                window.location.reload();
            }
        };
  </script>
</body>

</html>