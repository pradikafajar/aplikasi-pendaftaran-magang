<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\status_pengajuan;

class statuspengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status_pengajuan = DB::table('status_pengajuans') -> get();

        return view('status(admin).index')->with
        ('status_pengajuan', $status_pengajuan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('status(admin).tambah');
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
            'nama' => 'required|min:5|max:25',
            'status_pengajuan' => 'required',
        ],$messages);

        DB::table('status_pengajuans')->insert([
            'nama'         => $request->nama,
            'status_pengajuan'     => $request->status_pengajuan,
        ],);
 
         return redirect()->route('statuspengajuan.index')
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
        $status = status_pengajuan::find($id);
         if (!$status) return redirect()->route('statuspengajuan.index');
        return view('status(admin).edit', [
        'status' => $status
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
        'nama' => 'required',
        'status_pengajuan' => 'required',
        
    ]);
        $status = status_pengajuan::find($id);
        $status->nama = $request->nama;
        $status->status_pengajuan = $request->status_pengajuan;
        $status->save();
        return redirect()->route('statuspengajuan.index')
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
        $status = status_pengajuan::find($id);
    if ($status) $status->delete();
    return redirect()->route('statuspengajuan.index')
        ->with('success_message', 'Berhasil menghapus user');
    }
}
