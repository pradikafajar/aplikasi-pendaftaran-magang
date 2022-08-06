<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>home</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
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


            <div class="content-header">
                <div class="container-fluid">

                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
            </div>


            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">KOMINFO</span>
                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">DPRD</span>
                                </div>

                            </div>

                        </div>


                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">BPD</span>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">BKD</span>
                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">BPKAD</span>
                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">BAPPEDA</span>
                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">SETDA</span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('admin.create')}}"
                                        class="btn btn-primary mb-2">Tambah</a>
                            <table class="table table-hover table-bordered table-stripped" id="example2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Instansi</th>
                                        <th>Posisi</th>
                                        <th>Kuota</th>
                                        <th>Periode</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($home as $home )
                                    <tr>
                                        <td>{{$home->id}}</td>
                                        <td>{{$home->instansi}}</td>
                                        <td>{{$home->posisi}}</td>
                                        <td>{{$home->kuota}}</td>
                                        <td>{{$home->periode}}</td>
                                        <td>
                                            <a href="{{route('admin.edit', $home -> id)}}"
                                                class="btn btn-primary btn-xs">
                                                Edit
                                            </a>
                                            <a href="{{route('admin.destroy', $home ->id)}}"
                                                onclick="notificationBeforeDelete(event, this)"
                                                class="btn btn-danger btn-xs">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @push('js')
        <form action="" id="delete-form" method="post">
            @method('delete')
            @csrf
        </form>
        <script>
            $('#example2').DataTable({
                "responsive": true,
            });

            function notificationBeforeDelete(event, el) {
                event.preventDefault();
                if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                    $("#delete-form").attr('action', $(el).attr('href'));
                    $("#delete-form").submit();
                }
            }

        </script>



    </div>


    <script src="http://127.0.0.1:8000/vendor/jquery/jquery.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>


    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>





    <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>










    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>










    <script src="//cdn.jsdelivr.net/npm/sweetalert2@8"></script>


    <script src="http://127.0.0.1:8000/vendor/adminlte/dist/js/adminlte.min.js"></script>





</body>

</html>
