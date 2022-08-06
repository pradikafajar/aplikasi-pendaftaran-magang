@extends('adminlte::page')

@section('title', 'status')
@section('content_header')

<h1 class="m-0 text-dark">Status Pengajuan</h1>
@stop
@section('content')
<div class="row">
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
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

                    <form action="/upload" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <b>File</b><br />
                            <input type="file" name="file">
                        </div>

                        <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
