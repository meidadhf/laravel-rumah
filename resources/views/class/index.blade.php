@extends('template.master')

@push('css')
<link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('midContent')
<div class="card shadow mb-4 w-100">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
    </div>
    <div class="input-group">
      <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..."
          aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
          <button class="btn btn-primary">
              <i class="fas fa-search fa-sm"></i>
          </button>
      </div>
  </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Kelas</th>
                        <th>Kompetensi Keahlian</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kelass as $key => $value)
                    <tr>
                      <td>
                        {{ $key + 1 }}
                      </td>
                      <td>
                        {{ $value->nama_kelas }}
                      </td>
                      <td>
                        {{ $value->kompetensi_keahlian }}
                      </td>
                      <td>
                        <form
                        action="{{route('class.destroy', $value->nama_kelas)}}" method="post">
                        <a href="{{route('class.edit', $value->nama_kelas)}}" class="btn btn-sm btn-warning">
                          Edit
                        </a>

                      @csrf
                      @method('DELETE')
                      <input type="submit" class="btn btn-sm btn-danger" style="display:inline" value="Hapus">
                        </form>
                      </td>
                    </tr>
                  @empty
                  <tr>
                    <td>Data Masih Kosong</td>
                  </tr>
                  @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('js')
    <!-- Page level plugins -->
    <script src="{{ asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sbadmin2/js/demo/datatables-demo.js') }}"></script>

    <script>
        $(function () {
          $("#table").DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>
@endpush
