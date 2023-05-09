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
              <label>kodemk</label>
              <input class="form-control @error('kodemk') is-invalid @enderror" value="{{isset($mk)? $mk->kodemk : old('kodemk') }}" name="kodemk" type="text" />
              @error('kodemk')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>namaMatkul</label>
              <input class="form-control @error('namaMatkul') is-invalid @enderror" value="{{isset($mk)? $mk->namaMatkul : old('namaMatkul') }}" name="namaMatkul" type="text"/>
              @error('namaMatkul')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>dosen</label>
              <input class="form-control @error('dosen') is-invalid @enderror" value="{{isset($mk)? $mk->dosen : old('dosen') }}" name="dosen" type="text"/>
              @error('dosen')
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
              <button class="btn btn-sm btn-primary">Simpan</button>
            </div>
          </form>
      
        </div>
    </div>
</section>
@endsection