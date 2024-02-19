@extends('layout.master');

@section('title', 'Edit Data kelas')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('kelas.update', ['kela' => $kela->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="nama_kelas">NamaKelas</label>
            <input name="nama_kelas" type="text" class="form-control @error('nama_kelas') {{ 'is-invalid' }} @enderror" id="nama_kelas"  placeholder="nama_kelas" value="{{$kela->nama_kelas}}">
          </div>
          @error('nama_kelas')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <label for="kompetensi_keahlian">Kopetensi_keahlian Keahlian</label>
            <input name="kompetensi_keahlian" type="text" class="form-control @error('kompetensi_keahlian') {{ 'is-invalid' }} @enderror" id="kompetensi_keahlian"  placeholder="kompetensi_keahlian" value="{{$kela->kompetensi_keahlian}}">
          </div>
          @error('kompetensi_keahlian')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        </div>
        <div class="card-footer">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="update" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection