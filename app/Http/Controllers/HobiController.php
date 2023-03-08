<?php

namespace App\Http\Controllers;

use App\Models\hobiModel;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    public function index(){
        $data = hobiModel::all();
        return view('hobi')
        ->with('hb',$data);
    }
}
