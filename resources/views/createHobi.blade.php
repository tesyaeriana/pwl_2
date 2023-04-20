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
            <form method="POST" action="{{$url_form }}">
                @csrf
                {!! (isset($hobi))? method_field('PUT'):''!!}
              
                <div class="form-group">
                  <label>Nama Hobi</label>
                  <input class="form-control @error('namaHobi') is-invalid @enderror" value="{{isset($hobi)? $hobi->namaHobi : old('namaHobi') }}" name="namaHobi" type="text"/>
                  @error('namaHobi')
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