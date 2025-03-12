<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detail Pemesanan | Mahir Trans Bersaudara</title>
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
                        <h5 class="card-title text-center">
                            <nav class="d-flex justify-content-center">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.pabrikasi') }}">Pabrikasi</a></li>
                                    <li class="breadcrumb-item active">Detail</li>
                                </ol>
                            </nav>Detail
                        </h5>
                        <h5>Detail Pemesan</h5>
                        <div class="form-group mb-3">
                            <label class="text-secondary mb-2">Nama Pemesan / Perusahaan</label>
                            <input class="form-control border border-secondary form-control" name="nama" required value="{{ $pabs->nama }}" type="text">
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Nomor WhatsApp</label>
                                <input class="form-control border border-secondary form-control" name="nohp" required value="{{ $pabs->nohp }}" type="number">
                            </div>
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Email</label>
                                <input class="form-control border border-secondary form-control" name="email" required value="{{ $pabs->email }}" type="email">
                            </div>
                        </div>
                        <h5>Detail Kebutuhan</h5>
                        <div class="row">
                        <div class="col-md-12">
                            <label class="text-secondary">Jenis Pabrikasi</label>
                            <select class="form-select" name="jenis_pabrikasi" id="jenisPabrikasi" required>
                                <option selected disabled>Pilih Jenis Pabrikasi</option>
                                <option value="Material" {{ $pabs->jenis_pabrikasi == 'Material' ? 'selected' : '' }}>Material</option>
                                <option value="Jasa" {{ $pabs->jenis_pabrikasi == 'Jasa' ? 'selected' : '' }}>Jasa</option>
                                <option value="Material + Jasa" {{ $pabs->jenis_pabrikasi == 'Material + Jasa' ? 'selected' : '' }}>Material + Jasa</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label class="text-secondary mb-2">Jenis Kendaraan</label>
                        <input class="form-control border border-secondary" name="jenis_kendaraan" required type="text" value="{{ $pabs->jenis_kendaraan }}">
                    </div>

                    <div class="form-group mt-3">
                        <label class="text-secondary mb-2">Catatan Tambahan</label> <span class="text-danger">(Opsional)</span>
                        <textarea class="form-control border border-secondary" name="isi">{{ old('isi', $pabs->isi) }}</textarea>
                    </div>
                        <!-- Tombol Balas -->
                        <button type="button" class="btn btn-primary mt-5" onclick="replyEmail()" title="Balas via Email"><i class="bi bi-envelope-at"></i></button>
                        <button type="button" class="btn btn-success mt-5" onclick="replyWhatsApp()" title="Balas via WhatsApp"><i class="bi bi-whatsapp"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
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
    function replyEmail() {
        let email = "{{ $pabs->email }}";
        let name = "{{ $pabs->nama }}";
        let subject = encodeURIComponent("Konfirmasi dan Detail Kebutuhan Pabrikasi Kendaraan Berat Anda");
        let body = encodeURIComponent(`Halo ${name},\n\nTerima kasih telah menghubungi kami. Kami telah menerima permintaan Anda terkait Pabrikasi dengan rincian berikut:\n\n` +
            `Jenis Pabrikasi: {{ $pabs->jenis_pabrikasi }}\n` +
            `Jenis Kendaraan: {{ $pabs->jenis_kendaraan }}\n` +
            `Catatan Tambahan:\n{{ $pabs->isi ? $pabs->isi : 'Tidak ada catatan tambahan' }}\n\n` +
            `Kami ingin memastikan bahwa kebutuhan Anda telah sesuai. Mohon konfirmasi atau beri tahu kami jika ada perubahan atau tambahan informasi.\n\n` +
            `Kami siap membantu! Jangan ragu untuk membalas email ini.\n\nSalam,\nMahir Trans Bersaudara`);

        let mailtoLink = `mailto:${email}?subject=${subject}&body=${body}`;
        window.location.href = mailtoLink;
    }

    function replyWhatsApp() {
        let whatsappNumber = "{{ $pabs->nohp }}";
        let name = "{{ $pabs->nama }}";
        let message = encodeURIComponent(`Halo ${name},\n\nKami telah menerima permintaan Anda terkait pabrikasi dengan rincian berikut:\n\n` +
            `Jenis Pabrikasi: {{ $pabs->jenis_pabrikasi }}\n` +
            `Jenis Kendaraan: {{ $pabs->jenis_kendaraan }}\n` +
            `Catatan Tambahan:\n{{ $pabs->isi ? $pabs->isi : 'Tidak ada catatan tambahan' }}\n\n` +
            `Mohon konfirmasi apakah rincian ini sudah sesuai atau jika ada informasi tambahan yang perlu disampaikan.\n\nSalam,\nMahir Trans Bersaudara`);

        let whatsappLink = `https://wa.me/${whatsappNumber}?text=${message}`;
        window.open(whatsappLink, '_blank');
    }
</script>


</body>

</html>