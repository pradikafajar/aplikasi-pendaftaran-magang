@extends('adminlte::page')

@section('title', 'status')
@section('content_header')

    <h1 class="m-0 text-dark">Status Pengajuan</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Status pengajuan</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($status_pengajuan as $status )
                            <tr>
                                <td>{{$status->id}}</td>
                                <td>{{$status->nama}}</td>
                                <td>{{$status->status_pengajuan}}</td>
                            </tr>
                             @endforeach
                    
                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
@stop
