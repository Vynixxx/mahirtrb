<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tambah Galeri | Mahir Trans Bersaudara</title>
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
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="card mt-4" style="width: 800px">
                            <div class="card-body">
                              <div  href="" >
                                <h5 class="card-title text-center">
                                <nav class="d-flex justify-content-center">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.galeri') }}">Galeri</a></li>
                                        <li class="breadcrumb-item active">Tambah Galeri</li>
                                    </ol>
                                </nav>    
                                Tambah Galeri</h5>
                                <form action="{{ route('postTambahgaleri') }}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group mt-1">
                                    <label class="form-label">Kategori</label>
                                            <select class="form-select" name="kategori" required value="{{ old('kategori') }}">
                                                <option value="" disabled {{ old('jenis_kendaraan') ? '' : 'selected' }}>Pilih Jenis Kendaraan</option>
                                                <option value="Bulldozer" {{ old('kategori') == 'Bulldozer' ? 'selected' : '' }}>Bulldozer</option>
                                                <option value="Crane" {{ old('kategori') == 'Crane' ? 'selected' : '' }}>Crane</option>
                                                <option value="Foco Truck" {{ old('kategori') == 'Foco Truck' ? 'selected' : '' }}>Foco Truck</option>
                                                <option value="Trailer" {{ old('kategori') == 'Trailer' ? 'selected' : '' }}>Trailer</option>
                                                <option value="Lowbed Trailer" {{ old('kategori') == 'Lowbed Trailer' ? 'selected' : '' }}>Lowbed Trailer</option>
                                                <option value="Prime Mover" {{ old('kategori') == 'Prime Mover' ? 'selected' : '' }}>Prime Mover</option>
                                                <option value="Tandem Roller" {{ old('kategori') == 'Tandem Roller' ? 'selected' : '' }}>Tandem Roller</option>
                                                <option value="Vacuum Truck" {{ old('kategori') == 'Vacuum Truck' ? 'selected' : '' }}>Vacuum Truck</option>
                                                <option value="Water Tank Truck" {{ old('kategori') == 'Water Tank Truck' ? 'selected' : '' }}>Water Tank Truck</option>
                                            </select>
                                            <span class="text-danger">
                                                @error('kategori')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="text-secondary mb-2">Foto</label>
                                        <input class="form-control border border-secondary form-control" name="gambar" required value="{{ old('gambar') }}" type="file">
                                        <div class="form-text">Maksimal ukuran foto 5MB
                                        <span class="text-danger">
                                            @error('gambar')
                                              {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-5">Tambah Data</button>
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

</body>

</html>