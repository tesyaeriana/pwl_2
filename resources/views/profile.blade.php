@extends('layouts.tamplate')

@section('content')
   <section class="content">
 <!-- Default box -->
 <div class="card">
    <div class="card-header">
      <h3 class="card-title">Profil Mahasiswa</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
       
      </div>
    </div>
    <div class="card-body">
     Nama   : {!! $nama !!}<br>
     Kelas  : {!!$kelas!!}<br>
     NIM    :{!!$nim!!}<br>
     Jurusan    :{!!$jurusan!!}<br>
     Prodi      :{!!$prodi!!}<br>
     Asal Instansi :{!!$asal!!}<br>
     Tahun Angkatan   :{!!$angkatan!!}<br>
    </div>
   
   </section>
   @endsection