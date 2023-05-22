@extends ('layouts.tamplate')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Mata Kuliah </h3>
            <br>
        </div>
        <div class="card-body">
          <form method="POST" action="{{$url_form }}">
            @csrf
            {!! (isset($mk))? method_field('PUT'):''!!}
            
            <div class="form-group">
              <label>nama_matkul</label>
              <input class="form-control @error('nama_matkul') is-invalid @enderror" value="{{isset($mk)? $mk->nama_matkul : old('nama_matkul') }}" name="nama_matkul" type="text"/>
              @error('nama_matkul')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>sks</label>
              <input class="form-control @error('sks') is-invalid @enderror" value="{{isset($mk)? $mk->sks : old('sks') }}" name="sks" type="text"/>
              @error('sks')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>jam</label>
              <input class="form-control @error('jam') is-invalid @enderror" value="{{isset($mk)? $mk->jam: old('jam') }}" name="jam" type="text"/>
              @error('jam')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>semester</label>
              <input class="form-control @error('semester') is-invalid @enderror" value="{{isset($mk)? $mk->semester : old('semester') }}" name="semester" type="text"/>
              @error('semester')
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