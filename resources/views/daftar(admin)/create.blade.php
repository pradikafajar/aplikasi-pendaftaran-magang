<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>upload berkas</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar
    navbar-expand
    navbar-white navbar-light">


            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#">
                        <i class="fas fa-bars"></i>
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                </li>
            </ul>


            <ul class="navbar-nav ml-auto">



                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline" action="#" method="get">
                            @csrf
                            <div class="input-group">
                                <input class="form-control form-control-navbar" type="search" name="adminlteSearch"
                                    placeholder="search" aria-label="search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>



                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="https://picsum.photos/300/300" class="user-image img-circle elevation-2" alt="admin">
                        <span class="d-none d-md-inline">
                            admin
                        </span>
                    </a>


                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li class="user-header bg-primary">
                            <img src="https://picsum.photos/300/300" class="img-circle elevation-2" alt="admin">
                            <p class="">
                                admin<small>That&#039;s a nice guy</small>
                            </p>
                        </li>

                        <li class="user-footer">
                            <a class="btn btn-default btn-flat float-right  btn-block " href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-power-off text-red"></i>
                                Log Out
                            </a>
                            <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>

                </li>


            </ul>

        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">


            <a href="http://127.0.0.1:8000/home" class="brand-link ">


                <img src="http://127.0.0.1:8000/" alt="" class="brand-image" style="opacity:.8">


                <span class="brand-text font-weight-light ">
                    <b>MagangAPP</b>
                </span>

            </a>


            <div class="sidebar">
                <nav class="pt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu">

                        <li class="nav-header ">

                            ADMIN DASHBOARD

                        </li>

                        <li class="nav-item">

                            <a class="nav-link  " href="{{url('dft')}}">

                                <i class="fas fa-fw fa-id-card "></i>

                                <p>
                                    Daftar Magang

                                </p>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link  " href="{{url('statuspengajuan')}}">

                                <i class="fas fa-fw fa-check-circle "></i>

                                <p>
                                    Status Pengajuan

                                </p>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link  " href="{{url('uploadberkas')}}">

                                <i class="fas fa-fw fa-book "></i>

                                <p>
                                    Upload Berkas

                                </p>

                            </a>

                        </li>

                    </ul>
                </nav>
            </div>

        </aside>

        <div class="content-wrapper ">
            <div class="content">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">tambah</div>

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
                                        <form method="POST" action="/dft">
                                            @csrf
                                            <div class="form-group">
                                                <label>Nim</label>
                                                <input type="text" class="form-control" name="nim"
                                                    value="{{ old('nim') }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="nama"
                                                    value="{{ old('nama') }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tgl_lhr"
                                                    value="{{ old('tgl_lhr') }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" class="form-control" name="jenis_klmn"
                                                    value="{{ old('jenis_klmn') }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea name="alamat" class="form-control" cols="30"
                                                    rows="10">{{ old('alamat') }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Asal Sekolah</label>
                                                <input type="text" class="form-control" name="asl_sklh"
                                                    value="{{ old('asl_sklh') }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Instansi Magang</label>
                                                <input type="text" class="form-control" name="instansi_magang"
                                                    value="{{ old('instansi_magang') }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Mulai</label>
                                                <input type="date" class="form-control" name="tgl_mulai"
                                                    value="{{ old('tgl_mulai') }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Berakhir</label>
                                                <input type="date" class="form-control" name="tgl_berakhir"
                                                    value="{{ old('tgl_berakhir') }}">
                                            </div>
                                            <div class="form-group">
                                                <label>No Hp</label>
                                                <input type="text" class="form-control" name="no_hp"
                                                    value="{{ old('no_hp') }}">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary">Simpan</button>
                                                <a href="{{route('dft.index')}}" class="btn btn-default">
                                                    Kembali
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="http://127.0.0.1:8000/vendor/jquery/jquery.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
    </script>


    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>





    <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>










    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>










    <script src="//cdn.jsdelivr.net/npm/sweetalert2@8"></script>


    <script src="http://127.0.0.1:8000/vendor/adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>
