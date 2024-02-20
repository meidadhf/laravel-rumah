@extends('template.master')

@section('title', 'Detail SPP')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Detail SPP</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="id">ID</label>
          <input type="text" class="form-control" id="id" value="{{ $spp->id_spp }}" readonly>
        </div>
        <div class="form-group">
          <label for="tahun">Tahun</label>
          <input type="text" class="form-control" id="tahun" value="{{ $spp->tahun }}" readonly>
        </div>
        <div class="form-group">
          <label for="nominal">Nominal</label>
          <input type="text" class="form-control" id="nominal" value="{{ $spp->nominal }}" readonly>
        </div>
      </div>
      <div class="card-footer">
        <a href="{{ route('spp.index') }}" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection