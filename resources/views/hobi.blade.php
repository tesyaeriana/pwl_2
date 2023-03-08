  @extends('layouts.tamplate')

  @section('content')
   <section class="content">
 <!-- Default box -->
 <div class="card">
    <div class="card-header">
      <h3 class="card-title"><h1>Daftar Hobi</h1></h3>
    </div>
    <div class="card-body">
 
      
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Hobi</th>
             
            </tr>
          </thead>
      <tbody>
        @foreach ($hb as $no => $k)
        <tr>
          <td>{{$no}}</td>
          <td>{{$k->namaHobi}}</td>
          
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
   // alert('Selamat Datang')
   </script>
       
   @endpush
   @endsection
 