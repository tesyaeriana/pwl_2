<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraanModel extends Model
{
    
    use HasFactory;

    protected $table = 'kendaraan';
    protected $primaryKey = 'nopol';
    protected $keyType = 'string';
 
}
