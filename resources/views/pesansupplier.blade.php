<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ __('msg.pesan_supplier') }} | PT. Mahir Trans Bersaudara</title>
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
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="card mt-4" style="width: 800px">
                            <div class="card-body">
                              <div  href="" >
                                <h5 class="card-title text-center">
                                <nav class="d-flex justify-content-center">
                                </nav>
                                {{ __('msg.supplier') }}</h5>
                                <div class="modal fade" id="confirmModalSupplier" tabindex="-1" aria-labelledby="confirmModalSupplierLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmModalSupplierLabel">{{ __('msg.konfirmasi_pemesanan') }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            {{ __('msg.yakin_pesan') }}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('msg.batal') }}</button>
                                                <button type="button" class="btn btn-success" id="confirmOrderSupplier">{{ __('msg.ya_pesan') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form id="orderFormSupplier" action="{{ route('postPesansupplier') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h5>{{ __('msg.detail_pemesan') }}</h5>
                                    <div class="form-group mb-3">
                                        <label class="text-secondary mb-2">{{ __('msg.nama_perusahaan') }}</label>
                                        <input class="form-control border border-secondary" name="nama" required type="text" value="{{ old('nama') }}">
                                        @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label class="text-secondary mb-2">{{ __('msg.nomor_wa') }}</label>
                                            <input class="form-control border border-secondary" name="nohp" required type="number" value="{{ old('nohp') }}">
                                            @error('nohp') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="text-secondary mb-2">{{ __('msg.email') }}</label>
                                            <input class="form-control border border-secondary" name="email" required type="email" value="{{ old('email') }}">
                                            @error('email')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <h5>{{ __('msg.detail_kebutuhan') }}</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-secondary mb-2">{{ __('msg.nama_barang') }}</label>
                                            <input type="text" class="form-control border border-secondary" name="nama_barang" required value="{{ old('nama_barang') }}">
                                            <p class="text-secondary">{{ __('msg.nama_barang_note') }}</p>
                                            @error('nama_barang') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6">
                                        <label class="text-secondary mb-2">
                                            {{ __('msg.merek_spesifikasi') }} <span class="text-danger">{{ __('msg.opsional') }}</span>
                                        </label>
                                        <input type="text" class="form-control border border-secondary" name="merek_spesifikasi" placeholder="{{ __('msg.placeholder_merek') }}" value="{{ old('merek_spesifikasi') }}">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                                <label class="text-secondary mb-2">{{ __('msg.jumlah_dipesan') }}</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control border border-secondary" name="jumlah" min="1" required value="{{ old('jumlah') }}">
                                                    <select class="form-select border border-secondary" name="satuan">
                                                        <option value="unit" {{ old('satuan') == 'unit' ? 'selected' : '' }}>{{ __('msg.unit') }}</option>
                                                        <option value="liter" {{ old('satuan') == 'liter' ? 'selected' : '' }}>{{ __('msg.liter') }}</option>
                                                        <option value="kilogram" {{ old('satuan') == 'kilogram' ? 'selected' : '' }}>{{ __('msg.kilogram') }}</option>
                                                        <option value="meter" {{ old('satuan') == 'meter' ? 'selected' : '' }}>{{ __('msg.meter') }}</option>
                                                    </select>
                                                </div>
                                                @error('jumlah') <span class="text-danger">{{ $message }}</span> @enderror
                                                @error('satuan') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="text-secondary mb-2">{{ __('msg.tanggal_kebutuhan') }}</label>
                                                <input type="date" class="form-control border border-secondary" name="tanggal_kebutuhan" required value="{{ old('tanggal_kebutuhan') }}">
                                                @error('tanggal_kebutuhan') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="text-secondary mb-2">{{ __('msg.catatan_tambahan') }} <span class="text-danger">{{ __('msg.opsional') }}</span></label>
                                        <textarea class="form-control border border-secondary" name="catatan" rows="3" placeholder="{{ __('msg.pesant') }}">{{ old('catatan') }}</textarea>
                                    </div>
                                    <button type="button" class="btn btn-success mt-5 w-100" data-bs-toggle="modal" data-bs-target="#confirmModalSupplier">
                                        <i class="bi bi-cart"></i> {{ __('msg.pesan_sekarang') }}
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
        document.getElementById('confirmOrderSupplier').addEventListener('click', function() {
            document.getElementById('orderFormSupplier').submit();
        });
    </script>
  <script>
        window.onpageshow = function(event) {
            if (event.persisted) {
                window.location.reload();
            }
        };
  </script>
</body>

</html>