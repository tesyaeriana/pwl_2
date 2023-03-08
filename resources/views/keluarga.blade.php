  @extends('layouts.tamplate')

  @section('content')
   <section class="content">
 <!-- Default box -->
 <div class="card">
    <div class="card-header">
      <h3 class="card-title"><h1>Daftar Keluarga</h1></h3>
    </div>
    <div class="card-body">
 
      
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Hubungan Keluarga</th>
              <th>Jenis Kelamin</th>
              <th>Pend Terakhir</th>
              <th>Alamat</th>
              <th>TTL</th>
            </tr>
          </thead>
      <tbody>
        @foreach ($klrg as $no => $k)
        <tr>
          <td>{{$no}}</td>
          <td>{{$k->nama}}</td>
          <td>{{$k->hubKeluarga}}</td>
          <td>{{$k->jk}}</td>
          <td>{{$k->pendAkhir}}</td>
          <td>{{$k->alamat}}</td>
          <td>{{$k->ttl}}</td>
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
   <!--<script>
    alert('Selamat Datang')
   </script>
       
   @endpush
   @endsection
 