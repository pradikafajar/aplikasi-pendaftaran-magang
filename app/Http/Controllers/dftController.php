<?php

namespace App\Http\Controllers;

use App\Models\daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $daftar = DB::table('daftars') -> get();

        return view('daftar(admin).index')->with
        ('daftar', $daftar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar(admin).create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $messages = [
            'required' => 'semua kolom wajib diisi',
            'min' => 'attribute harus diisi minimal :min karakter',
            'max' => 'attribute harus diisi maksimal :max karakter',
        ];

        $this->validate ($request,[
            'nim' => 'required|min:5|max:25',
            'nama' => 'required|min:5|max:25',
            'asl_sklh' =>'required',
            'jenis_klmn' => 'required',
            'instansi_magang' => 'required',
            'no_hp' => 'required',
            'tgl_lhr' => 'required',
            'tgl_mulai' => 'required',
            'tgl_berakhir' => 'required',
            'alamat' => 'required'
            
        ],$messages);

         DB::table('daftars')->insert([
            'nim'  => $request->nim,
            'nama'         => $request->nama,
            'asl_sklh'     => $request->asl_sklh,
            'jenis_klmn'    => $request->jenis_klmn,
            'instansi_magang'  => $request->instansi_magang,
            'no_hp'         => $request->no_hp,
            'tgl_lhr'     => $request->tgl_lhr,
            'tgl_mulai'        => $request->tgl_mulai,
            'tgl_berakhir'     => $request->tgl_berakhir,
            'alamat'        => $request->alamat,
        ]);
 
        return view('daftar(admin).create',['data' => $request]);
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
          $daftar = daftar::find($id);
         if (!$daftar) return redirect()->route('dft.index');
        return view('daftar(admin).edit', [
        'daftar' => $daftar
    ]);
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
             'nim' => 'required|min:5|max:25',
            'nama' => 'required|min:5|max:25',
            'asl_sklh' =>'required',
            'jenis_klmn' => 'required',
            'instansi_magang' => 'required',
            'no_hp' => 'required',
            'tgl_lhr' => 'required',
            'tgl_mulai' => 'required',
            'tgl_berakhir' => 'required',
            'alamat' => 'required'
        ]);    

        $daftar = daftar::find($id);
        $daftar->nim = $request->nim;
        $daftar-> nama  = $request->nama;
        $daftar ->asl_sklh    = $request->asl_sklh;
        $daftar   ->    jenis_klmn   = $request->jenis_klmn;
        $daftar ->   instansi_magang  = $request->instansi_magang;
        $daftar   ->    no_hp       = $request->no_hp;
        $daftar    ->     tgl_lhr    = $request->tgl_lhr;
        $daftar ->   tgl_mulai       = $request->tgl_mulai;
        $daftar ->   tgl_berakhir    = $request->tgl_berakhir;
        $daftar ->      alamat       = $request->alamat;
        $daftar->save();
        return redirect()->route('dft.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $daftar = daftar::find($id);
    if ($daftar) $daftar->delete();
    return redirect()->route('dft.index');
    }
}
