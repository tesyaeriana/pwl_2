@extends('layouts.tamplate')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
    <div class="card">
    <div class="card-header text text-md-center">Kartu Hasil Studi(KHS)</div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Nim : </b>{{$mahasiswa->nim}}</li>
            <li class="list-group-item"><b>Nama : </b>{{$mahasiswa->nama}}</li>
            <li class="list-group-item"><b>Kelas : </b>{{$mahasiswa->kelas->nama_kelas}}</li>
        </ul>
        <table class="table table-bordered table-striped mt-2 text-center">
            <thead>
            <tr>
                <th>MataKuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
            </thead>
            <tbody>
            @if($khs->count() > 0)
                @foreach($khs as $hm)
                    <tr>
                        <td>{{ $hm->mata_kuliah->nama_matkul }}</td>
                        <td>{{ $hm->mata_kuliah->sks }}</td>
                        <td>{{ $hm->mata_kuliah->semester }}</td>
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
    <a class="btn btn-success mt-3" href="{{ url('/mahasiswas') }}">Kembali</a>
    </div>
    </div>
    </div>
@endsection
