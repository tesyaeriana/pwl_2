<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProduk extends Controller
{
    public function produk(){
        return view('produk');
    }
}
