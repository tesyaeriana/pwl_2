<?php

namespace App\Http\Controllers;

use App\Models\mataKuliahModel;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $matakuliah = mataKuliahModel::all();
        return view('matakuliah.matakuliah')->with('matakuliah',$matakuliah);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('matakuliah.createMataKuliah')
        ->with('url_form',url('/mata_kuliah'));
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
            
            'nama_matkul'=>'required|string|max:50',
            'sks'=>'required|integer',
            'jam'=>'required|integer',
            'semester'=>'required|integer',
            

            
        ]);
        $data = mataKuliahModel::create($request->except(['_token']));

        return redirect('mata_kuliah')
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
    public function edit($id)
    {
        $matakuliah=mataKuliahModel::find($id);
        return view('matakuliah.createMataKuliah')
            ->with('mk', $matakuliah)
            ->with('url_form',url('/matakuliah/'. $id));
           
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_matkul'=>'required|string|max:50',
            'sks'=>'required|integer',
            'jam'=>'required|integer',
            'semester'=>'required|integer',
            

            
        ]);
      
        $data = mataKuliahModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('matakuliah')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
