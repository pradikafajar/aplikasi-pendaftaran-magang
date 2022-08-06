<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\file;

class uploadberkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file = DB::table('files') -> get();

        return view('upload(admin).index')->with
        ('file', $file);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload(admin).create');
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
            'doc,docx,pdf' => 'file harus jenis doc,docx,pdf',
            
        ];
       
        $this->validate($request, [
         'file' => 'required|mimes:doc,docx,pdf',
 
        ]);
 
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
 
      	// nama file
	echo 'File Name: '.$file->getClientOriginalName();
	echo '<br>';
 
      	// ekstensi file
	echo 'File Extension: '.$file->getClientOriginalExtension();
	echo '<br>';
 
      	// real path
	echo 'File Real Path: '.$file->getRealPath();
	echo '<br>';
 
      	// ukuran file
	echo 'File Size: '.$file->getSize();
	echo '<br>';
 
      	// tipe mime
	echo 'File Mime Type: '.$file->getMimeType();

    $tujuan_upload = 'data_file';
	$file->move($tujuan_upload,$file->getClientOriginalName());

    DB::table('files')->insert([
            'file'         => $request->file,
	]);
 
     return redirect()->route('uploadberkas.create');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file =file::find($id);
    if ($file) $file->delete();
    return redirect()->route('uploadberkas.index')
        ->with('success_message', 'Berhasil menghapus user');
    }
}
