<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nim',
        'nama',
        'foto',
        'kelas_id',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp'
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class,'kelas_id','id');
    }
    public function mahasiswa_matakuliah(){
        return $this->belongsTo(mahasiswa_matakuliah::class);
    }
}
