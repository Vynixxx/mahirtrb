<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Admin | Mahir Trans Bersaudara</title>
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
            <!-- <div class="container">
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
                </div> -->
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="card mt-4" style="width: 800px">
                            <div class="card-body">
                              <div  href="" >
                                <h5 class="card-title text-center">Tambah Galeri</h5>
                                <form action="{{ route('postTambahgaleri') }}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group mt-4">
                                        <label class="text-secondary mb-2">Nama Kendaraan</label>
                                        <input class="form-control border border-secondary form-control" name="name" required value="" type="text" >
                                        <span class="text-danger">
                                            @error('name')
                                              {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <!-- Slug (Read-Only) -->
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Slug</label>
                                        <input type="text" class="form-control border border-secondary" name="slug" id="slug" readonly placeholder="Kosongkan Saja">
                                        <span class="text-danger">@error('slug') {{ $message }} @enderror</span>
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Jumlah</label>
                                        <textarea  type="text" class="form-control border border-secondary form-control" name="jumlah" value=""></textarea>
                                        <span class="text-danger">
                                            @error('jumlah')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Foto</label>
                                        <input class="form-control border border-secondary form-control" name="gambar" required value="" type="file">
                                        <div class="form-text">Maksimal ukuran foto 5MB
                                        <span class="text-danger">
                                            @error('gambar')
                                              {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Tanggal</label>
                                        <input type="date" class="form-control border border-secondary form-control" name="tanggal" required value="">
                                        <span class="text-danger">
                                            @error('tanggal')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Tag</label>
                                        <input class="form-control border border-secondary form-control" name="tag" required value="" type="text">
                                        <div class="form-text">Harap berikan tanda tagar (#) pada setiap tag, pisahkan tag dengan spasi
                                        <span class="text-danger">
                                            @error('tag')
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