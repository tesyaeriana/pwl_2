<?php

namespace App\Http\Controllers;

use App\Models\mataKuliahModel;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index(){
       $data = mataKuliahModel::all();
       return view('matakuliah')
        ->with('mk',$data);
    }
}
