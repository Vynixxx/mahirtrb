<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pesan Pabrikasi | PT. Mahir Trans Bersaudara</title>
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
                                Pabrikasi</h5>
                                <div class="modal fade" id="confirmModalPabrikasi" tabindex="-1" aria-labelledby="confirmModalPabrikasiLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmModalPabrikasiLabel">Konfirmasi Pemesanan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin melakukan pemesanan?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-success" id="confirmOrderPabrikasi">Ya, Pesan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form id="orderFormPabrikasi" action="{{ route('postPesanpabrikasi') }}" method="POST">
                                    @csrf
                                    <h5>Detail Pemesan</h5>
                                    
                                    <div class="form-group mb-3">
                                        <label class="text-secondary mb-2">Nama Pemesan / Perusahaan</label>
                                        <input class="form-control border border-secondary" name="nama" required type="text">
                                        <span class="text-danger">@error('nama'){{ 'Kolom ini wajib diisi' }}@enderror</span>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label class="text-secondary mb-2">Nomor WhatsApp</label>
                                            <input class="form-control border border-secondary" name="nohp" required type="number">
                                            <span class="text-danger">@error('nohp'){{ 'Kolom ini wajib diisi' }}@enderror</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="text-secondary mb-2">Email</label>
                                            <input class="form-control border border-secondary" name="email" required type="email">
                                            @error('email')
                                                    <div class="text-danger">
                                                        @if ($message === 'Kolom ini wajib diisi.')
                                                            Kolom ini wajib diisi.
                                                        @else
                                                            Format yang Anda masukkan salah.
                                                        @endif
                                                    </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <h5>Detail Kebutuhan</h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="text-secondary">Jenis Pabrikasi</label>
                                            <select class="form-select" name="jenis_pabrikasi" id="jenisPabrikasi" required>
                                                <option selected disabled>Pilih Jenis Pabrikasi</option>
                                                <option value="Material">Material</option>
                                                <option value="Jasa">Jasa</option>
                                                <option value="Material + Jasa">Material + Jasa</option>
                                            </select>
                                            <span class="text-danger">@error('jenis_pabrikasi'){{ 'Kolom ini wajib diisi' }}@enderror</span>
                                            <div class="alert alert-info mt-2 d-none" id="notifPabrikasi"></div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-2">
                                        <label class="text-secondary mb-2">Jenis Kendaraan</label>
                                        <input class="form-control border border-secondary" name="jenis_kendaraan" required type="text">
                                        <span class="text-danger">@error('jenis_kendaraan'){{ 'Kolom ini wajib diisi' }}@enderror</span>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="text-secondary mb-2">Catatan Tambahan</label> <span class="text-danger">(Opsional)</span>
                                        <textarea class="form-control border border-secondary" name="isi" placeholder="Tambahkan catatan jika diperlukan / Kosongkan saja"></textarea>
                                    </div>

                                    <!-- Tombol untuk memunculkan modal -->
                                    <button type="button" class="btn btn-success mt-5 w-100" data-bs-toggle="modal" data-bs-target="#confirmModalPabrikasi">
                                        <i class="bi bi-cart"></i> Pesan Sekarang
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
        document.getElementById('jenisPabrikasi').addEventListener('change', function () {
            let notif = document.getElementById('notifPabrikasi');
            let selectedValue = this.value;

            // Menentukan pesan sesuai pilihan
            let message = "";
            if (selectedValue === "Material") {
                message = "Anda memilih layanan penyediaan material. Kami akan menyediakan material kendaraan berat sesuai kebutuhan Anda. Silakan cantumkan detail tambahan pada kolom catatan.";
            } else if (selectedValue === "Jasa") {
                message = "Anda memilih layanan jasa pabrikasi. Silakan siapkan material yang diperlukan, dan tim kami akan membantu dalam proses pabrikasi.";
            } else if (selectedValue === "Material + Jasa") {
                message = "Anda memilih layanan lengkap (Material + Jasa). Kami akan menyediakan seluruh material serta melakukan proses pabrikasi sesuai kebutuhan Anda.";
            }

            // Menampilkan notifikasi
            if (message) {
                notif.textContent = message;
                notif.classList.remove('d-none'); // Menampilkan alert
            } else {
                notif.classList.add('d-none'); // Menyembunyikan alert jika tidak ada pilihan
            }
        });
    </script>
    <script>
        document.getElementById('confirmOrderPabrikasi').addEventListener('click', function() {
            document.getElementById('orderFormPabrikasi').submit();
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