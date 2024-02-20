@extends('template.master');

@section('title', 'Tambah Data Kelas')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('class.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Nama Kelas</label>
                <input name="nama" type="text" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" id="nama"  placeholder="Nama Kelas" value="{{ @old('nama_kelas') }}">
              </div>
              @error('nama_kelas')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
              <div class="form-group">
                <label for="nama">Kompetensi Keahlian</label>
                <input name="umur" type="text" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" id="nama"  placeholder="Kompetensi Keahlian" value="{{ @old('kompetensi_keahlian')}}">
              </div>
              @error('kompetensi_keahlian')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
