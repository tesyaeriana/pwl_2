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
        
        $matakuliah = mataKuliahModel::paginate(5);
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
        ->with('url_form',url('/matakuliah'));
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
            'kodemk'=>'required|string|max:10|unique:mata_kuliah,kodemk',
            'namaMatkul'=>'required|string|max:50',
            'dosen'=>'required|string|max:50',
            'sks'=>'required|smallInteger',
            

            
        ]);
        $data = mataKuliahModel::create($request->except(['_token']));

        return redirect('matakuliah')
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
            'kodemk'=>'required|string|max:10|unique:mata_kuliah,kodemk',
            'namaMatkul'=>'required|string|max:50',
            'dosen'=>'required|string|max:50',
            'sks'=>'required|smallInteger',
            

            
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
