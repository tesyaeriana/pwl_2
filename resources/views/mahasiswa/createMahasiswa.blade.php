@extends ('layouts.tamplate')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Mahasiswa </h3>
            <br>
        </div>
        <div class="card-body">
            <form method="POST" action="{{$url_form }}" enctype="multipart/form-data">
                @csrf
                {!! (isset($mhs))? method_field('PUT'):''!!}
                <div class="form-group">
                  <label>Nim</label>
                  <input class="form-control @error('nim') is-invalid @enderror" value="{{isset($mhs)? $mhs->nim : old('nim') }}" name="nim" type="text" />
                  @error('nim')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control @error('nama') is-invalid @enderror" value="{{isset($mhs)? $mhs->nama : old('nama') }}" name="nama" type="text"/>
                  @error('nama')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" class="form-control" required="required" name="image">
                  @error('foto')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="Kelas">Kelas</label>
                  <select name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror">
                    @foreach($kelas as $kls)
                    <option value="{{$kls->id}}">{{$kls->nama_kelas}}</option>
                    @endforeach
                  </select>
                  @error('kelas_id')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>JK</label>
                  <input class="form-control @error('jk') is-invalid @enderror" value="{{isset($mhs)? $mhs->jk : old('jk') }}" name="jk" type="text"/>
                  @error('jk')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Tempat lahir</label>
                  <input class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{isset($mhs)? $mhs->tempat_lahir : old('tempat_lahir') }}" name="tempat_lahir" type="text"/>
                  @error('tempat_lahir')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{isset($mhs)? $mhs->tanggal_lahir : old('tanggal_lahir') }}" name="tanggal_lahir" type="date"/>
                  @error('tanggal_lahir')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>HP</label>
                  <input class="form-control @error('hp') is-invalid @enderror" value="{{isset($mhs)? $mhs->hp : old('hp') }}" name="hp" type="text"/>
                  @error('hp')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>alamat</label>
                  <input class="form-control @error('alamat') is-invalid @enderror" value="{{isset($mhs)? $mhs->alamat : old('alamat') }}" name="alamat" type="text"/>
                  @error('alamat')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <button class="btn btn-sm btn-primary">Simpan</button>
                </div>
              </form>
      
        </div>
    </div>
</section>
@endsection