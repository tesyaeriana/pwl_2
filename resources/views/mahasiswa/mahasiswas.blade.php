@extends ('layouts.tamplate')

@section('content')

<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
            <h3 class="card-title"> Data Mahasiswa </h3>
            <br>
            </div>
        </div>
        <div class="card-body">
        <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
           
                <a href="{{url('mahasiswas/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                <form action="{{url('cari')}}" method="GET" >
                    <div class="form-group w-100 mb-3">
                        <input type="text" name="cari" placeholder="Masukkan nim" id="cari" >
                        <button type="submit">cari</button>
                    </div>
                </form>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>No. HP</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($mahasiswa->count() > 0)
                        @foreach($mahasiswa as $i=>$m)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$m->nim}}</td>
                                <td>{{$m->nama}}</td>
                                <td>{{$m->kelas->nama_kelas}}</td>
                                <td>{{$m->jk}}</td>
                                <td>{{$m->hp}}</td>
                                <td>
                                  <a href="{{url('/mahasiswas/'.$m->id.'/edit')}}" class="btn btn-sm btn-warning">edit</a>
                                  <a href="{{url('/mahasiswas/'. $m->id)}}"class="btn btn-sm btn-primary">Show</a>
                                  <form class="d-inline-block" method="POST" action="{{url('/mahasiswas/'.$m->id)}}" onsubmit="return confirm('Yakin hapus data?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                                <a href="{{ url('/mahasiswas/nilai_mhs/'.$m->id) }}" class="btn btn-sm btn-info">Nilai</a>
                                </td>
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
</section>
@endsection