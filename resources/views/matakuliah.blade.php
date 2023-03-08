  @extends('layouts.tamplate')

  @section('content')
   <section class="content">
 <!-- Default box -->
 <div class="card">
    <div class="card-header">
      <h3 class="card-title"><h1>Mata Kuliah</h1></h3>
    </div>
    <div class="card-body">
 
      
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode MK</th>
              <th>Nama MK</th>
              <th>Dosen Pengampu</th>
              <th>SKS</th>
              
            </tr>
          </thead>
      <tbody>
        @foreach ($mk as $no => $k)
        <tr>
          <td>{{$no}}</td>
          <td>{{$k->kodemk}}</td>
          <td>{{$k->namaMatkul}}</td>
          <td>{{$k->dosen}}</td>
          <td>{{$k->sks}}</td>
         
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
 