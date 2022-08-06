@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Daftar</div>

                </br>

                {{-- menampilkan error validasi --}}
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card-body">
                    <form method="POST" action="/daftar">
                        @csrf

                        <div class="form-group">
                            <label>Nim</label>
                            <input type="text" class="form-control" name="nim" value="{{ old('nim') }}">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lhr" value="{{ old('tgl_lhr') }}">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_klmn" value="{{ old('jenis_klmn') }}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" cols="30"
                                rows="10">{{ old('alamat') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" name="asl_sklh" value="{{ old('asl_sklh') }}">
                        </div>
                        <div class="form-group">
                            <label>Instansi Magang</label>
                            <input type="text" class="form-control" name="instansi_magang"
                                value="{{ old('instansi_magang') }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input type="date" class="form-control" name="tgl_mulai" value="{{ old('tgl_mulai') }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Berakhir</label>
                            <input type="date" class="form-control" name="tgl_berakhir"
                                value="{{ old('tgl_berakhir') }}">
                        </div>
                        <div class="form-group">
                            <label>No Hp</label>
                            <input type="text" class="form-control" name="no_hp" value="{{ old('no_hp') }}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" >Simpan</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
