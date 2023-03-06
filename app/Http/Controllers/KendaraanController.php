<?php

namespace App\Http\Controllers;

use App\Models\kendaraanModel;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index(){
        $data = kendaraanModel::all();
        return view('kendaraan')
            -> with('knd', $data);
    }
}
