@extends('template.master')

@section('header', "Masukkan Kelas")

@section('content')
<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
            <form action="{{route('class.update', $kelass->nama_kelas)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col d-flex justify-content-center">
                        <div class="row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="nama_kelas" class="form-control @error("nama_kelas"){{'is-invalid'}} @enderror" id="examplenama_kelas"
                                    placeholder="nama_kelas" value="{{$kelass->nama_kelas}}">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="kompetensi_keahlian" class="form-control @error("kompetensi_keahlian"){{'is-invalid'}} @enderror" id="examplekompetensi_keahlian"
                                    placeholder="kompetensi_keahlian" value="{{$kelass->kompetensi_keahlian}}">
                            </div>
                            @error('nama_kelas')
                              <span class="error invalid-feedback" style="display: inline;">{{$message}}</span>
                            @enderror

                            @error('kompetensi_keahlian')
                              <span class="error invalid-feedback" style="display: inline;">{{$message}}</span>
                            @enderror
                        </div>

                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                  </div>
            </form>
        </div>

    </div>
@endsection
