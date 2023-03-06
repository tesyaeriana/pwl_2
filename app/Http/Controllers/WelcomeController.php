<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function hello()
    {
        return view('hello')
        ->with('nama','Andi')
        ->with('occupation','Astronaut');
    }
}
