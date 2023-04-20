<?php

namespace App\Http\Controllers;

use App\Models\hobiModel;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $hobi = hobiModel::paginate(5);
        return view('hobi')->with('hobi',$hobi);
    }
    public function cari(Request $request){
        $keyword = $request->cari;
        $hobi = hobiModel::where('namaHobi','like',"%".$keyword."%")->paginate(5);
        return view('hobi',compact('hobi'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('createHobi')
        ->with('url_form',url('/hobi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'namaHobi'=>'required|string|max:30'
            
            
        ]);
        $data = hobiModel::create($request->except(['_token']));

        return redirect('/hobi')
            ->with('success','Mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        hobiModel::where('id','=',$id)->delete();
        return redirect('hobi')
        ->with('success','Mahasiswa Berhasil Dihapus');
    }
}
