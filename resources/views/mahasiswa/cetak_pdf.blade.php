<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>KHS Mahasiswa</title>
      
    </head>
<body>
    <style type="text/css">
       table{
        margin-top: 7%;
        margin-bottom: 10%;
        border-collapse: collapse;
        width: 100%;
       }
       table tr td, table tr th{
        border: 1px solid black;
        padding: 8px;
        font-size: 9pt;
       }
       .tanggal{
            margin-left: 370px;
        }
        .jab{
            margin-left: 370px;
            margin-top: -20px;
        }
        .ketua{
            margin-left: 370px;
        }
    </style>
     <center>
        <h5>CETAK KHS </h4><br><br>
    </center>
    <div class="container mt-2">
        <div class="row justify-content-center align-items-center">
        <div class="card">
       
        <div class="card-body">
            <div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nim: </b>{{$mahasiswa->nim}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$mahasiswa->nama}}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{$mahasiswa->kelas->nama_kelas}}</li>
                </ul>
            </div>
            <table class="table table-bordered ">
                <thead>
                <tr>
                    <th>MataKuliah</th>
                    <th>SKS</th>
                    <th>Nilai</th>
                </tr>
                </thead>
                <tbody>
                @if($khs->count() > 0)
                    @foreach($khs as $hm)
                        <tr>
                            <td>{{ $hm->mata_kuliah->nama_matkul }}</td>
                            <td>{{ $hm->mata_kuliah->sks }}</td>
                            <td>{{ $hm->nilai}}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center">Data tidak ada</td>
                    </tr>
                @endif
                </tbody>
            </table>
            <p class="tanggal">Malang, 16 Mei 2023</p>
            <p class="jab">Ketua Jurusan</p>
            <br>
            <br>
            <p class="ketua">Dr.Syaifuddin Zuhri, S.Kom., M.Kom</p>
        </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>
