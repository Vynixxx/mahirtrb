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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.supplier') }}">Supplier</a></li>
                                    <li class="breadcrumb-item active">Detail</li>
                                </ol>
                            </nav>Detail
                        </h5>
                        <h5>Detail Pemesan</h5>
                        @php
                            $hasXss = array_sum($xssDetected) > 0;
                        @endphp

                        <div class="form-group mb-3">
                            <label class="text-secondary mb-2">Nama Pemesan / Perusahaan</label>
                            <input class="form-control border border-secondary" name="nama" required value="{{ old('nama', $sup->nama) }}" type="text">
                            @if(!empty($xssDetected['nama']))
                                <div class="text-danger">⚠️ Nama ini mengandung karakter mencurigakan!</div>
                            @endif
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Nomor WhatsApp</label>
                                <input class="form-control border border-secondary" name="nohp" required value="{{ old('nohp', $sup->nohp) }}" type="number">
                                @if(!empty($xssDetected['nohp']))
                                    <div class="text-danger">⚠️ Nomor ini mencurigakan!</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Email</label>
                                <input class="form-control border border-secondary" name="email" required value="{{ old('email', $sup->email) }}" type="email">
                                @if(!empty($xssDetected['email']))
                                    <div class="text-danger">⚠️ Email ini mencurigakan!</div>
                                @endif
                            </div>
                        </div>

                        <h5>Detail Kebutuhan</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Nama Barang</label>
                                <input type="text" class="form-control border border-secondary" name="nama_barang" required value="{{ old('nama_barang', $sup->nama_barang) }}">
                                @if(!empty($xssDetected['nama_barang']))
                                    <div class="text-danger">⚠️ Nama barang ini mencurigakan!</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Merek / Spesifikasi <span class="text-danger">(Opsional)</span></label>
                                <input type="text" class="form-control border border-secondary" name="merek_spesifikasi" value="{{ old('merek_spesifikasi', $sup->merek_spesifikasi ? $sup->merek_spesifikasi : 'Tidak ada merk yang tercantum') }}">
                                @if(!empty($xssDetected['merek_spesifikasi']))
                                    <div class="text-danger">⚠️ Data ini mencurigakan!</div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Jumlah Tersedia</label>
                                <div class="input-group">
                                    <input type="number" class="form-control border border-secondary" name="jumlah" min="1" required value="{{ old('jumlah', $sup->jumlah) }}">
                                    <select class="form-select border border-secondary" name="satuan">
                                        <option value="unit" {{ old('satuan', $sup->satuan) == 'unit' ? 'selected' : '' }}>Unit</option>
                                        <option value="liter" {{ old('satuan', $sup->satuan) == 'liter' ? 'selected' : '' }}>Liter</option>
                                        <option value="kilogram" {{ old('satuan', $sup->satuan) == 'kilogram' ? 'selected' : '' }}>Kilogram</option>
                                        <option value="meter" {{ old('satuan', $sup->satuan) == 'meter' ? 'selected' : '' }}>Meter</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Tanggal Ketersediaan</label>
                                <input type="date" class="form-control border border-secondary" name="tanggal_kebutuhan" required value="{{ old('tanggal_kebutuhan', $sup->tanggal_kebutuhan) }}">
                                @if(!empty($xssDetected['tanggal_kebutuhan']))
                                    <div class="text-danger">⚠️ Data ini mencurigakan!</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label class="text-secondary mb-2">Catatan <span class="text-danger">(Opsional)</span></label>
                            <textarea class="form-control border border-secondary" name="catatan" placeholder="Tambahkan catatan jika diperlukan / Kosongkan saja">{{ old('catatan', $sup->catatan ? $sup->catatan : 'Tidak ada catatan tambahan') }}</textarea>
                            @if(!empty($xssDetected['catatan']))
                                <div class="text-danger">⚠️ Catatan ini mencurigakan!</div>
                            @endif
                        </div>

                        @if (!$hasXss)
                            <!-- Tombol Balas -->
                            <button type="button" class="btn btn-primary mt-5" onclick="replyEmail()" title="Balas via Email">
                                <i class="bi bi-envelope-at"></i>
                            </button>
                            <button type="button" class="btn btn-success mt-5" onclick="replyWhatsApp()" title="Balas via WhatsApp">
                                <i class="bi bi-whatsapp"></i>
                            </button>
                        @endif

                        @if ($hasXss)
                            <div class="alert alert-danger mt-4">
                                ⚠️ Ditemukan karakter mencurigakan yang berpotensi sebagai serangan XSS. Disarankan untuk segera menghapus data ini.
                            </div>

                            <!-- Tombol Hapus (Memicu Modal) -->
                            <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                <i class="bi bi-trash"></i> Hapus Data
                            </button>

                            <!-- Modal Konfirmasi Hapus -->
                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data ini? Data yang dihapus tidak dapat dikembalikan.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <form action="{{ route('admin.deletesupplier', $sup->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
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
      let email = "{{ $sup->email }}";
      let name = "{{ $sup->nama }}";
      let subject = encodeURIComponent("Konfirmasi dan Detail Pemesanan Barang");
      let body = encodeURIComponent(`Halo ${name},\n\nTerima kasih telah menghubungi kami. Berikut adalah rincian pemesanan barang Anda:\n\n` +
          `Nama Barang: {{ $sup->nama_barang }}\n` +
          `Merek / Spesifikasi: {{ $sup->merek_spesifikasi ? $sup->merek_spesifikasi : 'Tidak ada spesifikasi tambahan' }}\n` +
          `Jumlah: {{ $sup->jumlah }} {{ $sup->satuan }}\n` +
          `Tanggal Kebutuhan: {{ $sup->tanggal_kebutuhan }}\n` +
          `Catatan Tambahan:\n{{ $sup->catatan ? $sup->catatan : 'Tidak ada catatan tambahan' }}\n\n` +
          `Mohon konfirmasi apakah rincian ini sudah sesuai atau jika ada informasi tambahan yang perlu disampaikan.\n\n` +
          `Salam,\nMahir Trans Bersaudara`);

      let mailtoLink = `mailto:${email}?subject=${subject}&body=${body}`;
      window.location.href = mailtoLink;
  }

  function replyWhatsApp() {
      let whatsappNumber = "{{ $sup->nohp }}";
      let name = "{{ $sup->nama }}";
      let message = encodeURIComponent(`Halo ${name},\n\nKami telah menerima pemesanan barang Anda dengan rincian berikut:\n\n` +
          `Nama Barang: {{ $sup->nama_barang }}\n` +
          `Merek / Spesifikasi: {{ $sup->merek_spesifikasi ? $sup->merek_spesifikasi : 'Tidak ada spesifikasi tambahan' }}\n` +
          `Jumlah: {{ $sup->jumlah }} {{ $sup->satuan }}\n` +
          `Tanggal Kebutuhan: {{ $sup->tanggal_kebutuhan }}\n` +
          `Catatan Tambahan:\n{{ $sup->catatan ? $sup->catatan : 'Tidak ada catatan tambahan' }}\n\n` +
          `Mohon konfirmasi apakah rincian ini sudah sesuai atau jika ada informasi tambahan yang perlu disampaikan.\n\nSalam,\nMahir Trans Bersaudara`);

      let whatsappLink = `https://wa.me/${whatsappNumber}?text=${message}`;
      window.open(whatsappLink, '_blank');
  }
</script>

</body>

</html>