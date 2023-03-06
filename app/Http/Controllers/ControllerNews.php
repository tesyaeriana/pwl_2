<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerNews extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
       
        return view('news')
        ->with('nama','Tesya Eriana');
    }
}
