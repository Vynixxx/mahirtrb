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

  @include('layouts.headerp')
  @include('layouts.sidebar')

  <main id="main" class="main">
            <div class="container">
            <div class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 1050">
                    <div id="toastNotification" class="toast align-items-center text-white bg-success border-0" role="alert">
                        <div class="d-flex">
                            <div class="toast-body" id="toastMessage"></div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        var toastElement = document.getElementById("toastNotification");
                        var toastMessage = document.getElementById("toastMessage");

                        @if (Session::has('success'))
                            toastMessage.textContent = "{{ Session::get('success') }}";
                            var toast = new bootstrap.Toast(toastElement);
                            toast.show();
                        @endif

                        @if (Session::has('failed'))
                            toastMessage.textContent = "{{ Session::get('failed') }}";
                            toastElement.classList.remove("bg-success");
                            toastElement.classList.add("bg-danger");
                            var toast = new bootstrap.Toast(toastElement);
                            toast.show();
                        @endif
                    });
                </script>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="card mt-4" style="width: 800px">
                            <div class="card-body">
                              <div  href="" >
                                <h5 class="card-title text-center">
                                <nav class="d-flex justify-content-center">
                                </nav>
                                Penyewaan</h5>
                                <form action="{{ route('postPesanpenyewaan') }}" method="POST">
                                    @csrf
                                    <h5>Detail Pemesan</h5>

                                    <div class="mb-3">
                                        <label class="form-label">Nama Pemesan / Perusahaan</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required value="{{ old('nama') }}">
                                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Nomor WhatsApp</label>
                                            <input type="number" class="form-control @error('nohp') is-invalid @enderror" name="nohp" required value="{{ old('nohp') }}">
                                            @error('nohp') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{ old('email') }}">
                                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                    </div>

                                    <h5>Detail Kebutuhan</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Jenis Kendaraan</label>
                                            <select class="form-select @error('jenis_kendaraan') is-invalid @enderror" name="jenis_kendaraan" required>
                                                <option value="" disabled selected>Pilih Jenis Kendaraan</option>
                                                <option value="Truk Foco">Truk Foco</option>
                                                <option value="Crane">Crane</option>
                                                <option value="Dozer">Dozer</option>
                                                <option value="Lowbed">Lowbed</option>
                                                <option value="Triller">Triller</option>
                                                <option value="Truk Kepala">Truk Kepala</option>
                                                <option value="Truk Tandem">Truk Tandem</option>
                                                <option value="Truk Vakum">Truk Vakum</option>
                                                <option value="Tangki Air">Tangki Air</option>
                                            </select>
                                            @error('jenis_kendaraan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Jumlah Kebutuhan</label>
                                            <input type="number" class="form-control @error('jumlah_kebutuhan') is-invalid @enderror" name="jumlah_kebutuhan" required min="1" value="{{ old('jumlah_kebutuhan') }}">
                                            @error('jumlah_kebutuhan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Durasi Penyewaan</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control @error('durasi') is-invalid @enderror" name="durasi" required min="1" value="{{ old('durasi') }}">
                                                <select class="form-select @error('satuan_durasi') is-invalid @enderror" name="satuan_durasi">
                                                    <option value="bulan" {{ old('satuan_durasi') == 'bulan' ? 'selected' : '' }}>Bulan</option>
                                                    <option value="tahun" {{ old('satuan_durasi') == 'tahun' ? 'selected' : '' }}>Tahun</option>
                                                </select>
                                            </div>
                                            @error('durasi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                            @error('satuan_durasi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Awal Penyewaan</label>
                                            <input type="date" class="form-control @error('awal_penyewaan') is-invalid @enderror" name="awal_penyewaan" required value="{{ old('awal_penyewaan') }}">
                                            @error('awal_penyewaan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Catatan Tambahan <span class="text-danger">(Opsional)</span></label>
                                        <textarea class="form-control @error('catatan_tambahan') is-invalid @enderror" name="catatan_tambahan" placeholder="Tambahkan catatan jika diperlukan / Kosongkan saja">{{ old('catatan_tambahan') }}</textarea>
                                        @error('catatan_tambahan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <button type="submit" class="btn btn-success w-100 mt-4">
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