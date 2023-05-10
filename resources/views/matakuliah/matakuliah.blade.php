  @extends('layouts.tamplate')

  @section('content')
   <section class="content">
 <!-- Default box -->
 <div class="card">
    <div class="card-header">
      <h3 class="card-title"><h1>Mata Kuliah</h1></h3>
    </div>
    <div class="card-body">
      <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
           
        <a href="{{url('matakuliah/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
        <form action="{{url('cari')}}" method="GET" >
            <div class="form-group w-100 mb-3">
                <input type="text" name="cari" placeholder="Masukkan nim" id="cari" >
                <button type="submit">cari</button>
            </div>
        </form>
      </div>
      
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama MK</th>
              <th>SKS</th>
              <th>Semester</th>
              <th>Action</th>
            </tr>
          </thead>
      <tbody>
        @if($matakuliah->count() > 0)
                        @foreach($matakuliah as $i => $m)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$m->nama_matkul}}</td>
                                <td>{{$m->sks}}</td>
                                <td>{{$m->semester}}</td>
                                <td>
                                  <a href="{{url('/matakuliah/'.$m->id.'/edit')}}" class="btn btn-sm btn-warning">edit</a>
                                  <form method="POST" action="{{url('/matakuliah/'.$m->id)}}" onsubmit="return confirm('Yakin hapus data?')">
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
       <tfoot>

       </tfoot>
      </table>
   
      
    </div>
 </div>
  <!-- /.card -->
   </section>
   @push('js')
   <!--<script>
    alert('Selamat Datang')
   </script>
       
   @endpush
   @endsection
 