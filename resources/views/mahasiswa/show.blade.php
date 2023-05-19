@extends('layouts.tamplate')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DATA MAHASISWA</h3><br><br><br>
            <div class="text text-center">
               <img width="150px" height="170px" src="{{asset('storage/'.$mahasiswa->foto)}}">
            </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nim : </b>{{$mahasiswa->nim}}</li>
                <li class="list-group-item"><b>Nama : </b>{{$mahasiswa->nama}}</li>
                <li class="list-group-item"><b>Kelas : </b>{{$mahasiswa->kelas->nama_kelas}}</li>
                <li class="list-group-item"><b>Jk : </b>{{$mahasiswa->jk}}</li>
                <li class="list-group-item"><b>Tempat_lahir : </b>{{$mahasiswa->tempat_lahir}}</li>
                <li class="list-group-item"><b>Tanggal_lahir : </b>{{$mahasiswa->tanggal_lahir}}</li>
                <li class="list-group-item"><b>Alamat : </b>{{$mahasiswa->alamat}}</li>
                <li class="list-group-item"><b>Hp : </b>{{$mahasiswa->hp}}</li>
            </ul>
        </div>
    </div>
       
      
    <!-- /.card -->

    </section>
@endsection