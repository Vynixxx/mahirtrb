<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Layanan | Mahir Trans Bersaudara</title>
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
              <h5 class="card-title text-center">
              <nav class="d-flex justify-content-center">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('admin.galeri') }}">Galeri</a></li>
                  <li class="breadcrumb-item active">Edit Galeri</li>
                </ol>
              </nav>Edit Galeri</h5>
              <form action="/postEditgaleri/{{ $galeri->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-4">
                <label class="form-label">Kategori</label>
                <select class="form-select" name="kategori" required>
                    <option disabled {{ empty($galeri->kategori) ? 'selected' : '' }}>Pilih kategori Kendaraan</option>
                    <option value="Crane" {{ $galeri->kategori == 'Crane' ? 'selected' : '' }}>Crane</option>
                    <option value="Dozer" {{ $galeri->kategori == 'Dozer' ? 'selected' : '' }}>Dozer</option>
                    <option value="Lowbed" {{ $galeri->kategori == 'Lowbed' ? 'selected' : '' }}>Lowbed</option>
                    <option value="Pekerjaan" {{ $galeri->kategori == 'Pekerjaan' ? 'selected' : '' }}>Pekerjaan</option>
                    <option value="Tim" {{ $galeri->kategori == 'Tim' ? 'selected' : '' }}>Tim</option>
                    <option value="Triller" {{ $galeri->kategori == 'Triller' ? 'selected' : '' }}>Triller</option>
                    <option value="Truk Foco" {{ $galeri->kategori == 'Truk Foco' ? 'selected' : '' }}>Truk Foco</option>
                    <option value="Truk Kepala" {{ $galeri->kategori == 'Truk Kepala' ? 'selected' : '' }}>Truk Kepala</option>
                    <option value="Truk Tandem" {{ $galeri->kategori == 'Truk Tandem' ? 'selected' : '' }}>Truk Tandem</option>
                    <option value="Truk Vakum" {{ $galeri->kategori == 'Truk Vakum' ? 'selected' : '' }}>Truk Vakum</option>
                    <option value="Tangki Air" {{ $galeri->kategori == 'Tangki Air' ? 'selected' : '' }}>Tangki Air</option>
                </select>
                <span class="text-danger">
                    @error('kategori')
                        {{ $message }}
                    @enderror
                </span>
                </div><br>

                <div class="form-group mt-1">
                  <label class="text-secondary mb-2">Gambar</label>
                  <input type="file" class="form-control border border-secondary form-control" name="gambar" accept="image/*">
                  <small>Biarkan kosong jika tidak mengubah gambar.</small>
                  <span class="text-danger">
                    @error('gambar')
                    {{ $message }}
                    @enderror
                  </span>
                </div>

                <button type="submit" class="btn btn-success mt-5">Edit Data</button>
              </form>
            </div>
          </div>
        </div>
      </div><br><br><br><br>
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

</body>

</html>