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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.perbaikan') }}">Perbaikan</a></li>
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
                            <input class="form-control border border-secondary form-control" name="nama" required value="{{ $perb->nama }}" type="text">
                            @if(!empty($xssDetected['nama']))
                                <div class="text-danger">⚠️ Nama ini mengandung karakter mencurigakan!</div>
                            @endif
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Nomor WhatsApp</label>
                                <input class="form-control border border-secondary form-control" name="nohp" required value="{{ $perb->nohp }}" type="number">
                                @if(!empty($xssDetected['nohp']))
                                    <div class="text-danger">⚠️ Nomor ini mencurigakan!</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Email</label>
                                <input class="form-control border border-secondary form-control" name="email" required value="{{ $perb->email }}" type="email">
                                @if(!empty($xssDetected['email']))
                                    <div class="text-danger">⚠️ Email ini mencurigakan!</div>
                                @endif
                            </div>
                        </div>

                        <h5>Detail Kendaraan</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Plat Nomor</label>
                                <input class="form-control border border-secondary" name="nopol" required type="text" maxlength="12" id="nopol" value="{{ old('nopol', $perb->nopol) }}">
                                @if(!empty($xssDetected['nopol']))
                                    <div class="text-danger">⚠️ Plat nomor ini mencurigakan!</div>
                                @endif
                            </div>

                            <script>
                                document.getElementById('nopol').addEventListener('input', function() {
                                    this.value = this.value.toUpperCase();
                                });
                            </script>

                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Jenis Kendaraan</label>
                                <input class="form-control border border-secondary" name="jenis" required type="text" value="{{ old('jenis', $perb->jenis) }}">
                                @if(!empty($xssDetected['jenis']))
                                    <div class="text-danger">⚠️ Data ini mencurigakan!</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label class="text-secondary mb-2">Kendala Kendaraan</label>
                            <textarea class="form-control border border-secondary" name="kendala_kendaraan" required>{{ old('kendala_kendaraan', $perb->kendala_kendaraan) }}</textarea>
                            @if(!empty($xssDetected['kendala_kendaraan']))
                                <div class="text-danger">⚠️ Deskripsi kendala mencurigakan!</div>
                            @endif
                        </div>

                        <div class="form-group mt-3">
                            <label class="text-secondary mb-2">Catatan Tambahan <span class="text-danger">(Opsional)</span></label>
                            <textarea class="form-control border border-secondary" name="catatan_tambahan" placeholder="Tambahkan catatan jika diperlukan / Kosongkan saja">{{ old('catatan_tambahan', $perb->catatan_tambahan ? $perb->catatan_tambahan : 'Tidak ada catatan tambahan') }}</textarea>
                            @if(!empty($xssDetected['catatan_tambahan']))
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
                                            <form action="{{ route('admin.deleteperbaikan', $perb->id) }}" method="POST">
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
      let email = "{{ $perb->email }}";
      let name = "{{ $perb->nama }}";
      let subject = encodeURIComponent("Konfirmasi Perbaikan Kendala Kendaraan Anda");
      let body = encodeURIComponent(`Halo ${name},\n\nTerima kasih telah menghubungi kami. Berikut adalah rincian kendala kendaraan yang telah Anda laporkan:\n\n` +
          `Plat Nomor: {{ $perb->nopol }}\n` +
          `Jenis Kendaraan: {{ $perb->jenis }}\n` +
          `Kendala Kendaraan: {{ $perb->kendala_kendaraan }}\n` +
          `Catatan Tambahan:\n{{ $perb->catatan_tambahan ? $perb->catatan_tambahan : 'Tidak ada catatan tambahan' }}\n\n` +
          `Kami ingin memastikan bahwa kebutuhan Anda telah sesuai. Mohon konfirmasi atau beri tahu kami jika ada perubahan atau tambahan informasi.\n\n` +
          `Kami siap membantu! Jangan ragu untuk membalas email ini.\n\nSalam,\nMahir Trans Bersaudara`);

      let mailtoLink = `mailto:${email}?subject=${subject}&body=${body}`;
      window.location.href = mailtoLink;
  }

  function replyWhatsApp() {
      let whatsappNumber = "{{ $perb->nohp }}";
      let name = "{{ $perb->nama }}";
      let message = encodeURIComponent(`Halo ${name},\n\nKami telah menerima laporan pemesanan perbaikan kendaraan Anda dengan rincian berikut:\n\n` +
          `Plat Nomor: {{ $perb->nopol }}\n` +
          `Jenis Kendaraan: {{ $perb->jenis }}\n` +
          `Kendala Kendaraan: {{ $perb->kendala_kendaraan }}\n` +
          `Catatan Tambahan:\n{{ $perb->catatan_tambahan ? $perb->catatan_tambahan : 'Tidak ada catatan tambahan' }}\n\n` +
          `Mohon konfirmasi apakah rincian ini sudah sesuai atau jika ada informasi tambahan yang perlu disampaikan.\n\nSalam,\nMahir Trans Bersaudara`);

      let whatsappLink = `https://wa.me/${whatsappNumber}?text=${message}`;
      window.open(whatsappLink, '_blank');
  }
</script>


</body>

</html>