<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\MahasiswaModel;
use Database\Seeders\MahasiswaSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = MahasiswaModel::with('kelas')->get();
        return view('mahasiswa.mahasiswas')->with('mahasiswa',$mahasiswa);
       
    }
    public function cari(Request $request){
        $keyword = $request->cari;
        $mahasiswa = MahasiswaModel::where('nim','like',"%".$keyword."%")->paginate(5);
        return view('mahasiswa.mahasiswas',compact('mahasiswas'))->with('i',(request()->input('page',1)-1)*5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    $kelas = Kelas::all();
      return view('mahasiswa.createMahasiswa',['kelas'=>$kelas]) ->with('url_form',url('/mahasiswas'));
 
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
            'nim'=>'required|string|max:10|unique:mahasiswas,nim',
            'nama'=>'required|string|max:50',
            'kelas_id'=>'required',
            'jk'=>'required|in:l,p',
            'tempat_lahir'=>'required|string|max:50',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required|string|max:255',
            'hp'=>'required|digits_between:6,15'
        ]);

        MahasiswaModel::insert($request->except(['_token']));

        //$data = MahasiswaModel::create($request->except(['_token']));

        return redirect('mahasiswas')
            ->with('success','Mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = MahasiswaModel::where('id',$id)->get();
        return view('mahasiswa.show', ['Mahasiswa' => $mahasiswa[0]]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /** 
         *  $mahasiswa=MahasiswaModel::find($id);
        * return view('mahasiswa.createMahasiswa')
          *   ->with('mhs', $mahasiswa)
           *  ->with('url_form',url('/mahasiswas/'. $id));
           
        */
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();
        $kelas = Kelas::all();
        return view('mahasiswa.createMahasiswa')
        ->with('mhs',$mahasiswa)
        ->with('kelas',$kelas)
        ->with('url_form',url('/mahasiswas/'.$id));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswas,nim,'.$id,
            'nama' =>'required|string|max:50',
            'jk' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'hp' => 'required|digits_between:6,15',
        ]);

        $data = MahasiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('mahasiswas')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id','=',$id)->delete();
        return redirect('mahasiswas')
        ->with('success','Mahasiswa Berhasil Dihapus');
    }
}
