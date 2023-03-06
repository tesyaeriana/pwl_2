<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('profile')
        ->with('nama','Tesya Eriana')
        ->with('kelas','TI-2B')
        ->with('nim','2141720024')
        ->with('jurusan','Teknologi Informasi')
        ->with('prodi','D-IV Informatika')
        ->with('asal','Politeknik Negeri Malang')
        ->with('angkatan','2021');
    }
}
