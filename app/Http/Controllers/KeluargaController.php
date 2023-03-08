<?php

namespace App\Http\Controllers;

use App\Models\keluargaModel;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function index(){
        $data = keluargaModel::all();
        return view('keluarga')
        -> with('klrg',$data);
    }
}
