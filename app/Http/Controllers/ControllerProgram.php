<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProgram extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function program()
    {
        return view('program');
    }
}
