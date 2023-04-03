  @extends('layouts.tamplate')

  @section('content')
   <section class="content">
 <!-- Default box -->
 
 <div class="card">
    <div class="card-header">
      <h3 class="card-title"><h1>Hallo Selamat Datang</h1></h3>

     
  <!-- /.card -->
   </section>
   @push('js')
   <script>
    alert('Selamat Datang')
   </script>
       
   @endpush
   @endsection
 