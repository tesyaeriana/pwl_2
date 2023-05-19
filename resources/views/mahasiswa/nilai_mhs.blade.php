@extends('layouts.tamplate')
@section('content')
<div class="container mt-3">
    <div class="text text-center">
        <h2>KARTU HASIL STUDI (KHS)</h2>
    </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <p><b>Nim: </b>{{$mahasiswa->nim}}</p>
                    <p><b>Nama: </b>{{$mahasiswa->nama}}</p>
                    <p><b>Kelas: </b>{{$mahasiswa->kelas->nama_kelas}}</p>
                </div>
                <table class="table table-bordered ">
                    <thead>
                    <tr>
                        <th>MataKuliah</th>
                        <th>SKS</th>
                        <th>Nilai</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($khs->count() > 0)
                        @foreach($khs as $hm)
                            <tr>
                                <td>{{ $hm->mata_kuliah->nama_matkul }}</td>
                                <td>{{ $hm->mata_kuliah->sks }}</td>
                                <td>{{ $hm->nilai}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">Data tidak ada</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
        </div>
        </div>
        
    <div class="form-group text-left">
        <a href="{{url('/mahasiswas/cetak_khs/'.$mahasiswa->id)}}" class="btn btn-sm btn-success">Cetak KHS</a>
        <a class="btn btn-sm btn-danger " href="{{ url('/mahasiswas') }}">Kembali</a>
    </div>
   
    </div>
    </div>
    </div>
@endsection
