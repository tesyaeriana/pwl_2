<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mataKuliahModel extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    protected $fillable = [
        'nama_matkul','sks','jam','semester'
    ];
    public function mahasiswa_matakuliah(){
        return $this->hasMany(mahasiswa_matakuliah::class);
    }
}
