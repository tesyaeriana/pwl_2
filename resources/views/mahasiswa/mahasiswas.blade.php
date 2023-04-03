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
          <a href="{{url('mahasiswas/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>No. HP</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($mhs->count() > 0)
                        @foreach($mhs as $i => $m)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$m->nim}}</td>
                                <td>{{$m->nama}}</td>
                                <td>{{$m->jk}}</td>
                                <td>{{$m->hp}}</td>
                                <td>
                                  <a href="{{url('/mahasiswas/'.$m->id.'/edit')}}" class="btn btn-sm btn-warning">edit</a>
                                  <form method="POST" action="{{url('/mahasiswas/'.$m->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                                 
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