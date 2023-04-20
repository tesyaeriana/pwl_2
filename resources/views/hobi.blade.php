  @extends('layouts.tamplate')

  @section('content')
   <section class="content">
 <!-- Default box -->
 <div class="card">
    <div class="card-header">
      <h3 class="card-title"><h1>Daftar Hobi</h1></h3>
    </div>
    <div class="card-body">
      <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0"> 
        <a href="{{url('hobi/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
        <form action="{{url('cariHobi')}}" method="GET" >
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
              <th>Nama Hobi</th>
             
            </tr>
          </thead>
      <tbody>
        
        @foreach ($hobi as $no => $k)
        <tr>
          <td>{{$no}}</td>
          <td>{{$k->namaHobi}}</td>
          <td>
          
            <form method="POST" action="{{url('/hobi/'.$k->id)}}" onsubmit="return confirm('Yakin hapus data?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
          </form>
           
          </td>
        </tr>
    @endforeach
      </tbody>
       <tfoot>

       </tfoot>
      </table>
      Halaman : {{ $hobi->currentPage() }} <br/>
      Jumlah Data : {{ $hobi->total() }} <br/>
    
      {{ $hobi->links() }}
      
    </div>
 </div>
  <!-- /.card -->
   </section>
   @push('js')
   <script>
   // alert('Selamat Datang')
   </script>
       
   @endpush
   @endsection
 