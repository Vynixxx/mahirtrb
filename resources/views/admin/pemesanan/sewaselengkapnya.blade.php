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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.penyewaan') }}">Penyewaan</a></li>
                                    <li class="breadcrumb-item active">Detail</li>
                                </ol>
                            </nav>Detail
                        </h5>
                        <h5>Detail Pemesan</h5>
                        <div class="form-group mb-3">
                            <label class="text-secondary mb-2">Nama Pemesan / Perusahaan</label>
                            <input class="form-control border border-secondary form-control" name="nama" required value="{{ $sewa->nama }}" type="text">
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Nomor WhatsApp</label>
                                <input class="form-control border border-secondary form-control" name="nohp" required value="{{ $sewa->nohp }}" type="number">
                            </div>
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Email</label>
                                <input class="form-control border border-secondary form-control" name="email" required value="{{ $sewa->email }}" type="email">
                            </div>
                        </div>
                        <h5>Detail Kebutuhan</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Jenis Kendaraan</label>
                                    <select class="form-select @error('jenis_kendaraan') is-invalid @enderror" name="jenis_kendaraan" required>
                                        <option value="" disabled selected>Pilih Jenis Kendaraan</option>
                                        <option value="Truk Foco" {{ old('jenis_kendaraan', $sewa->jenis_kendaraan) == 'Truk Foco' ? 'selected' : '' }}>Truk Foco</option>
                                        <option value="Crane" {{ old('jenis_kendaraan', $sewa->jenis_kendaraan) == 'Crane' ? 'selected' : '' }}>Crane</option>
                                        <option value="Dozer" {{ old('jenis_kendaraan', $sewa->jenis_kendaraan) == 'Dozer' ? 'selected' : '' }}>Dozer</option>
                                        <option value="Lowbed" {{ old('jenis_kendaraan', $sewa->jenis_kendaraan) == 'Lowbed' ? 'selected' : '' }}>Lowbed</option>
                                        <option value="Triller" {{ old('jenis_kendaraan', $sewa->jenis_kendaraan) == 'Triller' ? 'selected' : '' }}>Triller</option>
                                        <option value="Truk Kepala" {{ old('jenis_kendaraan', $sewa->jenis_kendaraan) == 'Truk Kepala' ? 'selected' : '' }}>Truk Kepala</option>
                                        <option value="Truk Tandem" {{ old('jenis_kendaraan', $sewa->jenis_kendaraan) == 'Truk Tandem' ? 'selected' : '' }}>Truk Tandem</option>
                                        <option value="Truk Vakum" {{ old('jenis_kendaraan', $sewa->jenis_kendaraan) == 'Truk Vakum' ? 'selected' : '' }}>Truk Vakum</option>
                                        <option value="Tangki Air" {{ old('jenis_kendaraan', $sewa->jenis_kendaraan) == 'Tangki Air' ? 'selected' : '' }}>Tangki Air</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Jumlah Kebutuhan</label>
                                    <input type="number" class="form-control @error('jumlah_kebutuhan') is-invalid @enderror" name="jumlah_kebutuhan" required min="1" value="{{ old('jumlah_kebutuhan', $sewa->jumlah_kebutuhan) }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Durasi Penyewaan</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control @error('durasi') is-invalid @enderror" name="durasi" required min="1" value="{{ old('durasi', $sewa->durasi) }}">
                                        <select class="form-select @error('satuan_durasi') is-invalid @enderror" name="satuan_durasi">
                                            <option value="hari" {{ old('satuan_durasi', $sewa->satuan_durasi) == 'hari' ? 'selected' : '' }}>Hari</option>
                                            <option value="minggu" {{ old('satuan_durasi', $sewa->satuan_durasi) == 'minggu' ? 'selected' : '' }}>Minggu</option>
                                            <option value="bulan" {{ old('satuan_durasi', $sewa->satuan_durasi) == 'bulan' ? 'selected' : '' }}>Bulan</option>
                                            <option value="tahun" {{ old('satuan_durasi', $sewa->satuan_durasi) == 'tahun' ? 'selected' : '' }}>Tahun</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Awal Penyewaan</label>
                                    <input type="date" class="form-control @error('awal_penyewaan') is-invalid @enderror" name="awal_penyewaan" required value="{{ old('awal_penyewaan', $sewa->awal_penyewaan) }}">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Catatan Tambahan <span class="text-danger">(Opsional)</span></label>
                                <textarea class="form-control @error('catatan_tambahan') is-invalid @enderror" name="catatan_tambahan" placeholder="Tambahkan catatan jika diperlukan / Kosongkan saja">{{ old('catatan_tambahan', $sewa->catatan_tambahan ? $sewa->catatan_tambahan : 'Tidak ada catatan tambahan') }}</textarea>
                            </div>
                        <!-- Tombol Balas -->
                        <button type="button" class="btn btn-primary mt-5" onclick="replyEmail()" title="Balas via Email"><i class="bi bi-envelope-at"></i></button>
                        <button type="button" class="btn btn-success mt-5" onclick="replyWhatsApp()" title="Balas via WhatsApp"><i class="bi bi-whatsapp"></i></button>
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
    function replyEmail() {
        let email = "{{ $sewa->email }}";
        let name = "{{ $sewa->nama }}";
        let subject = encodeURIComponent("Konfirmasi dan Detail Kebutuhan Penyewaan Kendaraan Berat Anda");
        let body = encodeURIComponent(`Halo ${name},\n\nTerima kasih telah menghubungi kami. Kami telah menerima permintaan Anda terkait penyewaan kendaraan dengan rincian berikut:\n\n` +
            `Jenis Kendaraan: {{ $sewa->jenis_kendaraan }}\n` +
            `Jumlah Kebutuhan: {{ $sewa->jumlah_kebutuhan }} unit\n` +
            `Durasi Penyewaan: {{ $sewa->durasi }} {{ $sewa->satuan_durasi }}\n` +
            `Awal Penyewaan: {{ $sewa->awal_penyewaan }}\n` +
            `Catatan Tambahan:\n{{ $sewa->catatan_tambahan ? $sewa->catatan_tambahan : 'Tidak ada catatan tambahan' }}\n\n` +
            `Kami ingin memastikan bahwa kebutuhan Anda telah sesuai. Mohon konfirmasi atau beri tahu kami jika ada perubahan atau tambahan informasi.\n\n` +
            `Kami siap membantu! Jangan ragu untuk membalas email ini.\n\nSalam,\nMahir Trans Bersaudara`);

        let mailtoLink = `mailto:${email}?subject=${subject}&body=${body}`;
        window.location.href = mailtoLink;
    }

    function replyWhatsApp() {
        let whatsappNumber = "{{ $sewa->nohp }}";
        let name = "{{ $sewa->nama }}";
        let message = encodeURIComponent(`Halo ${name},\n\nKami telah menerima permintaan Anda terkait penyewaan kendaraan dengan rincian berikut:\n\n` +
            `Jenis Kendaraan: {{ $sewa->jenis_kendaraan }}\n` +
            `Jumlah Kebutuhan: {{ $sewa->jumlah_kebutuhan }} unit\n` +
            `Durasi Penyewaan: {{ $sewa->durasi }} {{ $sewa->satuan_durasi }}\n` +
            `Awal Penyewaan: {{ $sewa->awal_penyewaan }}\n` +
            `Catatan Tambahan:\n{{ $sewa->catatan_tambahan ? $sewa->catatan_tambahan : 'Tidak ada catatan tambahan' }}\n\n` +
            `Mohon konfirmasi apakah rincian ini sudah sesuai atau jika ada informasi tambahan yang perlu disampaikan.\n\nSalam,\nMahir Trans Bersaudara`);

        let whatsappLink = `https://wa.me/${whatsappNumber}?text=${message}`;
        window.open(whatsappLink, '_blank');
    }
</script>
</body>

</html>