<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ __('msg.pesan_penyewaan') }} | PT. Mahir Trans Bersaudara</title>
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
                                {{ __('msg.penyewaan') }}</h5>
                                <div class="modal fade" id="confirmModalPenyewaan" tabindex="-1" aria-labelledby="confirmModalPenyewaanLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmModalPenyewaanLabel">{{ __('msg.konfirmasi_pemesanan') }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            {{ __('msg.yakin_pesan') }}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('msg.batal') }}</button>
                                                <button type="button" class="btn btn-success" id="confirmOrderPenyewaan">{{ __('msg.ya_pesan') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form id="orderFormPenyewaan" action="{{ route('postPesanpenyewaan') }}" method="POST">
                                    @csrf
                                    <h5>{{ __('msg.detail_pemesan') }}</h5>

                                    <div class="mb-3">
                                        <label class="form-label">{{ __('msg.nama_perusahaan') }}</label>
                                        <input type="text" class="form-control border border-secondary" name="nama" required value="{{ old('nama') }}">
                                        @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">{{ __('msg.nomor_wa') }}</label>
                                            <input type="number" class="form-control border border-secondary" name="nohp" required value="{{ old('nohp') }}">
                                            @error('nohp') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">{{ __('msg.email') }}</label>
                                            <input type="email" class="form-control border border-secondary" 
                                                name="email" required value="{{ old('email') }}">
                                            
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span> 
                                                @enderror
                                        </div>
                                    </div>

                                    <h5>{{ __('msg.detail_kebutuhan') }}</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">{{ __('msg.jenis_kendaraan') }}</label>
                                            <select class="form-select border border-secondary" name="jenis_kendaraan" required>
                                                <option value="" disabled {{ old('jenis_kendaraan') ? '' : 'selected' }}>{{ __('msg.pilih_jenis_kendaraan') }}</option>
                                                <option value="Bulldozer" {{ old('jenis_kendaraan') == 'Bulldozer' ? 'selected' : '' }}>Bulldozer</option>
                                                <option value="Crane" {{ old('jenis_kendaraan') == 'Crane' ? 'selected' : '' }}>Crane</option>
                                                <option value="Foco Truck" {{ old('jenis_kendaraan') == 'Foco Truck' ? 'selected' : '' }}>Foco Truck</option>
                                                <option value="Trailer" {{ old('jenis_kendaraan') == 'Trailer' ? 'selected' : '' }}>Trailer</option>
                                                <option value="Lowbed Trailer" {{ old('jenis_kendaraan') == 'Lowbed Trailer' ? 'selected' : '' }}>Lowbed Trailer</option>
                                                <option value="Prime Mover" {{ old('jenis_kendaraan') == 'Prime Mover' ? 'selected' : '' }}>Prime Mover</option>
                                                <option value="Tandem Roller" {{ old('jenis_kendaraan') == 'Tandem Roller' ? 'selected' : '' }}>Tandem Roller</option>
                                                <option value="Vacuum Truck" {{ old('jenis_kendaraan') == 'Vacuum Truck' ? 'selected' : '' }}>Vacuum Truck</option>
                                                <option value="Water Tank Truck" {{ old('jenis_kendaraan') == 'Water Tank Truck' ? 'selected' : '' }}>Water Tank Truck</option>
                                            </select>
                                            @error('jenis_kendaraan') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">{{ __('msg.jumlah_kebutuhan') }}</label>
                                            <input type="number" class="form-control border border-secondary" name="jumlah_kebutuhan" required min="1" value="{{ old('jumlah_kebutuhan') }}">
                                            @error('jumlah_kebutuhan') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">{{ __('msg.durasi') }}</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control border border-secondary" name="durasi" required min="1" value="{{ old('durasi') }}">
                                                <select class="form-select border border-secondary" name="satuan_durasi">
                                                    <option value="hari" {{ old('satuan_durasi') == 'hari' ? 'selected' : '' }}>{{ __('msg.hari') }}</option>
                                                    <option value="minggu" {{ old('satuan_durasi') == 'minggu' ? 'selected' : '' }}>{{ __('msg.minggu') }}</option>
                                                    <option value="bulan" {{ old('satuan_durasi') == 'bulan' ? 'selected' : '' }}>{{ __('msg.bulan') }}</option>
                                                    <option value="tahun" {{ old('satuan_durasi') == 'tahun' ? 'selected' : '' }}>{{ __('msg.tahun') }}</option>
                                                </select>
                                            </div>
                                            @error('durasi') <span class="text-danger">{{ $message }}</span> @enderror
                                            @error('satuan_durasi') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">{{ __('msg.awal_penyewaan') }}</label>
                                            <input type="date" class="form-control border border-secondary" name="awal_penyewaan" required value="{{ old('awal_penyewaan') }}">
                                            @error('awal_penyewaan') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('msg.dengan_tim') }}</label>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="dengan_tim" id="denganTimYa" value="Ya" 
                                            {{ old('dengan_tim') == 'Ya' ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="denganTimYa">{{ __('msg.ya') }}</label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="dengan_tim" id="denganTimTidak" value="Tidak" 
                                            {{ old('dengan_tim') == 'Tidak' ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="denganTimTidak">{{ __('msg.tidak') }}</label>
                                        </div>
                                        @error('dengan_tim') <span class="text-danger d-block">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">{{ __('msg.catatan_tambahan') }} <span class="text-danger">{{ __('msg.opsional') }}</span></label>
                                        <textarea class="form-control border border-secondary" name="catatan_tambahan" placeholder="{{ __('msg.pesant') }}">{{ old('catatan_tambahan') }}</textarea>                                    
                                    </div>

                                    <button type="button" class="btn btn-success w-100 mt-4" data-bs-toggle="modal" data-bs-target="#confirmModalPenyewaan">
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
  <script>
    document.getElementById('confirmOrderPenyewaan').addEventListener('click', function() {
        document.getElementById('orderFormPenyewaan').submit();
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        const kendaraanContainer = document.getElementById("kendaraan-container");
        const addKendaraanButton = document.getElementById("add-kendaraan");

        addKendaraanButton.addEventListener("click", function() {
            const newKendaraan = document.createElement("div");
            newKendaraan.classList.add("row", "kendaraan-item");
            newKendaraan.innerHTML = `
                <div class="col-md-5 mb-3">
                    <label class="form-label">Jenis Kendaraan</label>
                    <select class="form-select border border-secondary" name="jenis_kendaraan[]" required>
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
                </div>

                <div class="col-md-5 mb-3">
                    <label class="form-label">Jumlah Kebutuhan</label>
                    <input type="number" class="form-control border border-secondary" name="jumlah_kebutuhan[]" required min="1">
                </div>

                <div class="col-md-2 mb-3 d-flex align-items-end">
                    <button type="button" class="btn btn-danger remove-kendaraan">Hapus</button>
                </div>
            `;

            kendaraanContainer.appendChild(newKendaraan);
        });

        kendaraanContainer.addEventListener("click", function(e) {
            if (e.target.classList.contains("remove-kendaraan")) {
                e.target.closest(".kendaraan-item").remove();
            }
        });
    });
    </script>
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