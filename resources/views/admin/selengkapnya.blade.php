<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kontak | Mahir Trans Bersaudara</title>
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
                  <li class="breadcrumb-item"><a href="{{ route('admin.kontak') }}">Kontak</a></li>
                  <li class="breadcrumb-item active">Detail</li>
                </ol>
              </nav>Detail</h5>
                <div class="form-group mt-4">
                    <label class="text-secondary mb-2">Nama / Perusahaan</label>
                    <input type="text" class="form-control border border-secondary form-control" name="name" required value="{{ $kontak->name }}">
                </div><br>

                <div class="form-group mt-1">
                    <label class="text-secondary mb-2">Email</label>
                    <input type="text" class="form-control border border-secondary form-control" name="email" required value="{{ $kontak->email }}">
                </div><br>

                <div class="form-group mt-1">
                    <label class="text-secondary mb-2">Nomor WhatsApp</label>
                    <input type="text" class="form-control border border-secondary form-control" name="whatsapp" required value="{{ $kontak->whatsapp }}">
                </div><br>

                <div class="form-group mt-1">
                    <label class="text-secondary mb-2">Perihal</label>
                    <input type="text" class="form-control border border-secondary form-control" name="subject" required value="{{ $kontak->subject }}">
                </div><br>

                <div class="form-group mt-1">
                    <label class="text-secondary mb-2">Pesan</label>
                    <textarea type="text" class="form-control border border-secondary form-control" name="message" required>{{ old('message', $kontak->message) }}</textarea>
                </div><br>
                <!-- Tombol Balas -->
                <button type="button" class="btn btn-success mt-5" onclick="replyEmail()" title="Balas via Email"><i class="bi bi-envelope-at"></i></button>
                <button type="button" class="btn btn-success mt-5" onclick="replyWhatsApp()" title="Balas via WhatsApp"><i class="bi bi-whatsapp"></i></button>
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
        function replyEmail() {
            let email = "{{ $kontak->email }}";
            let name = "{{ $kontak->name }}";
            let subject = encodeURIComponent("Balasan: {{ $kontak->subject }}");
            let body = encodeURIComponent("Halo " + name + ",\n\n");

            let mailtoLink = `mailto:${email}?subject=${subject}&body=${body}`;
            window.location.href = mailtoLink;
        }

        function replyWhatsApp() {
            let whatsappNumber = "{{ $kontak->whatsapp }}";
            let name = "{{ $kontak->name }}";
            let message = encodeURIComponent("Halo " + name + ",\n\n");

            let whatsappLink = `https://wa.me/${whatsappNumber}?text=${message}`;
            window.open(whatsappLink, '_blank');
        }
    </script>

</body>

</html>