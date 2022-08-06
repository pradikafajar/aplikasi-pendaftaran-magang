<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = DB::table('homes') -> get();

        return view('admin.adminhome')->with
        ('home', $home); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah');
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
            'required' => ':isi semua kolom',
            'min' => ':attribute harus diisi minimal :min karakter',
            'max' => ':attribute harus diisi maksimal :max karakter',
        ];

        $this->validate ($request,[
            'instansi' => 'required|min:5|max:25',
            'posisi' => 'required',
            'periode' => 'required',
            'kuota' => 'required',
        ],$messages);

        DB::table('homes')->insert([
            'instansi'         => $request->instansi,
            'posisi'     => $request->posisi,
            'kuota'         => $request->kuota,
            'periode'     => $request->periode,
        ],);
 
         return redirect()->route('admin.index')
        ->with('success_message', 'Berhasil menambah user baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home = home::find($id);
         if (!$home) return redirect()->route('admin.index');
        return view('admin.edit', [
        'home' => $home]);
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
            'instansi' => 'required|min:5|max:25',
            'posisi' => 'required',
            'periode' => 'required',
            'kuota' => 'required',
         ]);

        $home = home::find($id);
        $home->instansi         = $request->instansi;
        $home->posisi     = $request->posisi;
        $home->   kuota         = $request->kuota;
        $home->   periode     = $request->periode;
        $home->save();
        return redirect()->route('admin.index')
        ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home = home::find($id);
    if ($home) $home->delete();
    return redirect()->route('admin.index')
        ->with('success_message', 'Berhasil menghapus user');
    }
}
