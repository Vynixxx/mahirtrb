<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Supplier | Mahir Trans Bersaudara</title>
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
        <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="card-title mb-0">Pemesanan Barang
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Pemesanan</li>
                            <li class="breadcrumb-item active">Pemesanan Barang</li>
                        </ol>
                    </nav>
                </div></h5>

                <!-- Form Search -->
                <form action="{{ route('admin.supplier') }}" method="GET" class="d-flex" style="max-width: 300px;">
                    <input type="text" name="search" class="form-control me-2" placeholder="Cari..." value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>

              <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pemesan / Perusahaan</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Invoice & Total</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @forelse ($sup as $s)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->nama_barang }}</td>
                    <td>{{ $s->jumlah }} {{ $s->satuan }}</td>
                    <td>
                        @if(is_null($s->invoice_no) || is_null($s->harga_total))
                            <span class="text-muted">Diskusi belum dilakukan</span>
                        @else
                            {{ $s->invoice_no }} <br> Rp. {{ number_format($s->harga_total, 0, ',', '.') }}
                        @endif
                    </td>                    
                    <td>
                      <a class="btn btn-outline-info" href="/admin/supselengkapnya/{{ $s->id }}" title="Detail"><i class="bi bi-eye"></i></a>
                      <button class="btn btn-outline-danger btn-delete" 
                              data-id="{{ $s->id }}" 
                              data-nama="{{ $s->nama }}"
                              data-url="{{ route('admin.deletesupplier', $s->id) }}"
                              title="Hapus">
                          <i class="bi bi-trash3"></i>
                      </button>
                    </td>
                </tr>
                @empty
                  <tr>
                    <td colspan="5" class="text-center text-muted">Tidak ada data terkait pencarian.</td>
                  </tr>
                @endforelse
                </tbody>
              </table>
              @if ($sup->hasPages())
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      {{-- Tombol sebelumnya --}}
                      @if ($sup->onFirstPage())
                        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                      @else
                        <li class="page-item">
                          <a class="page-link" href="{{ $sup->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                      @endif

                      {{-- Tombol angka halaman --}}
                      @foreach ($sup->getUrlRange(1, $sup->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $sup->currentPage() ? 'active' : '' }}">
                          <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                      @endforeach

                      {{-- Tombol berikutnya --}}
                      @if ($sup->hasMorePages())
                        <li class="page-item">
                          <a class="page-link" href="{{ $sup->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      @else
                        <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                      @endif
                    </ul>
                  </nav>
                @endif             
              </div>
              <!-- Modal Konfirmasi Hapus -->
              <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              Apakah Anda yakin ingin menghapus data pemesan barang <b id="namaSupplier"></b>?
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                              <form id="deleteForm" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Hapus</button>
                              </form>
                          </div>
                      </div>
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
    document.addEventListener("DOMContentLoaded", function () {
        let deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        let deleteForm = document.getElementById("deleteForm");

        document.querySelectorAll(".btn-delete").forEach(button => {
            button.addEventListener("click", function () {
                let supplierNama = this.getAttribute("data-nama");
                let deleteUrl = this.getAttribute("data-url");

                document.getElementById("namaSupplier").innerText = supplierNama;
                deleteForm.setAttribute("action", deleteUrl);

                deleteModal.show();
            });
        });
    });
</script>


</body>

</html>