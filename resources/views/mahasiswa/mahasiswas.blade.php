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
           
            <button class="btn btn-sm btn-success my-2" data-toggle="modal" data-target="#modal_mahasiswa">Tambah Data</button>
                <form action="{{url('cari')}}" method="GET" >
                    <div class="form-group w-100 mb-3">
                        <input type="text" name="cari" placeholder="Masukkan nim" id="cari" >
                        <button type="submit">cari</button>
                    </div>
                </form>
            </div>
            <table class="table table-striped table-bordered" id="data_mahasiswa">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Jenis Kelamin</th>
                        <th>No. HP</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php /*
                    @if($mahasiswa->count() > 0)
                        @foreach($mahasiswa as $i=>$m)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$m->nim}}</td>
                                <td>{{$m->nama}}</td>
                                <td><img src="{{asset('storage/'.$m->foto )}}" width="200px" ></td>
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
                    */
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
        <form method="post" action="{{ url('mahasiswas') }}" role="form" class="form-horizontal" id="form_mahasiswa">
        @csrf
        <div class="modal-dialog modal-">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row form-message"></div>
                    <div class="form-group required row mb-2">
                        <label class="col-sm-2 control-label col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="nim" name="nim" value="" />
                        </div>
                    </div>
                    <div class="form-group required row mb-2">
                        <label class="col-sm-2 control-label col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="" />
                        </div>
                    </div>
                   
                    <div class="form-group required row mb-2">
                        <label class="col-sm-2 control-label col-form-label">Hp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="hp" name="hp" value="" />
                        </div>
                    </div>
                   
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</section>
@endsection
@push('js')
<script>
    $(document).ready(function (){
        var dataMahasiswa = $('#data_mahasiswa').DataTable({
            processing:true,
            serverside:true,
            ajax:{
                'url': '{{  url('mahasiswas/data') }}',
                'dataType': 'json',
                'type': 'POST',
            },
            columns:[
                {data:'no',searchable:false,sortable:false},
                {data:'nim',name:'nim',searchable:true,sortable:false},
                {data:'nama',name:'nama',searchable:true,sortable:true},
                {data: 'foto',foto:'foto',searchable:false,sortable:false},
                {data: 'jk',jk:'jk',searchable:false,sortable:false},
                {data:'hp',name:'hp',searchable:true,sortable:false},
                {data:'id',name:'id',searchable:false,sortable:false,
                    render: function(data, row){
                        var btn = `<a href="{{ url('/mahasiswas/')}}+data+/edit" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> </a> 
                                  <a href="{{ url('/mahasiswas/') }} " class="btn btn-xs btn-info"><i class="fa fa-list"></i></a> 
                                  <form method="POST" action="{{ url('/mahasiswas/') }}+data+">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                    </form>`;
                        return btn;
                    }
                }
            ]
        });
    });
    $('#form_mahasiswa').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: "{{ url('mahasiswas') }}",
                method: "POST",
                data: $(this).serialize(),
                dataType: 'json',
                success:function(data){
                    $('.form-message').html('');
                    //$('#modal_mahasiswa').modal('hide');
                    if(data.status){
                        $('.form-message').html('<span class="alert alert-success" style="width: 100%">' + data.message + '</span>');
                        $('#form_mahasiswa')[0].reset();
                        dataMahasiswa.ajax.reload();
                    }else{
                        $('.form-message').html('<span class="alert alert-danger" style="width: 100%">' + data.message + '</span>');
                        alert('error');
                    }

                }
            });
        });
</script>  
@endpush