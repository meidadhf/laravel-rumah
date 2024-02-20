@extends('template.master')

@section('title', 'Detail Kelas')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Detail Kelas</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="nama_kelas">Nama Kelas</label>
          <input type="text" class="form-control" id="nama_kelas" value="{{ $kelass->nama_kelas }}" readonly>
        </div>
        <div class="form-group">
          <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
          <input type="text" class="form-control" id="kompetensi_keahlian" value="{{ $spp->kompetensi_keahlian }}" readonly>
        </div>
      </div>
      <div class="card-footer">
        <a href="{{ route('class.index') }}" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection
