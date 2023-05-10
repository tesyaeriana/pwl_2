<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa_matakuliah extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_matakuliah';

    public function mahasiswas(){
        return $this->belongsTo(MahasiswaModel::class);

    }
    public function mata_kuliah(){
        return $this->belongsTo(mataKuliahModel::class, 'matkul_id','id');
    }
}
