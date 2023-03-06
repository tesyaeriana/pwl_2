  @extends('layouts.tamplate')

  @section('content')
   <section class="content">
 <!-- Default box -->
 <div class="card">
    <div class="card-header">
      <h3 class="card-title"><h1>Daftar Kendaraan</h1></h3>
    </div>
    <div class="card-body">
 
      
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nopol</th>
              <th>Merk</th>
              <th>Jenis</th>
              <th>Tahun</th>
              <th>Warna</th>
            </tr>
          </thead>
      <tbody>
        @foreach ($knd as $no => $k)
        <tr>
          <td>{{$no}}</td>
          <td>{{$k->nopol}}</td>
          <td>{{$k->merk}}</td>
          <td>{{$k->jenis}}</td>
          <td>{{$k->tahun}}</td>
          <td>{{$k->warna}}</td>
        </tr>
    @endforeach
      </tbody>
       <tfoot>

       </tfoot>
      </table>
   
      
    </div>
 </div>
  <!-- /.card -->
   </section>
   @push('js')
   <script>
    alert('Selamat Datang')
   </script>
       
   @endpush
   @endsection
 