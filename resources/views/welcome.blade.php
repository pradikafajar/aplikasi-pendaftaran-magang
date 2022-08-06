<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>MagangAPP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendor/adminlte/dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="vendor/adminlte/fontawesome/css/all.min.css" type="text/css" /> 
    <link rel="stylesheet" href="vendor/adminlte/dist/css/slick.css" type="text/css" />   
    <link rel="stylesheet" href="vendor/adminlte/dist/css/tooplate-simply-amazed.css" type="text/css" />
<!--

Tooplate 2123 Simply Amazed

https://www.tooplate.com/view/2123-simply-amazed

-->
</head>

<body>
    <div id="outer">
        <header class="header order-last" id="tm-header">
            <nav class="navbar">
                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                    <ul class="navbar-nav">
                    @if (Route::has('login'))
                    <li class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                 </li>
                 @endif
                        <li class="nav-item">
                            <a class="nav-link" href="#section-1"><span class="icn"><i class="fas fa-2x fa-air-freshener"></i></span> Welcome</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-2"><span class="icn"><i class="fab fa-2x fa-battle-net"></i></span> Visi & Misi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-3"><span class="icn"><i class="far fa-2x fa-images"></i></span> Dokumentasi</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    
        
        <button class="navbar-button collapsed" type="button">
            <span class="menu_icon">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </span>
        </button>
        
        <main id="content-box" class="order-first">
            <div class="banner-section section parallax-window" data-parallax="scroll" data-image-src="vendor/adminlte/dist/img/pemda1.jpg" id="section-1">
                <div class="container">
                    <div class="item">
                        <div class="bg-blue-transparent logo-fa"><span><i class="fas fa-2x fa-atom"></i></span> MagangAPP</div>
                        <div class="bg-blue-transparent simple"><p>Selamat datang diwebsite MagangAPP silahkan login untuk mendaftar, jika belum mempunyai akun silahkan register terlebih dahulu.
                        </p></div>
                    </div>
                </div>
            </div>

            <section class="work-section section" id="section-2">
                <div class="container">
                    <div class="row">
                        <div class="item col-md-4">
                            <div class="tm-work-item-inner">
                                <h3>Visi</h3>
                                <p>1.Terwujudnya masyarakat Kab.Tegal yang Mandiri,Unggul,Berbudaya,Religius dan Sejahtera</p>
                                <p>2.Cinta Desa, Cinta Rakyat, Cinta Produk Tegal, Cinta Budaya Tegal</p>
                            </div>                        
                        </div>
                        <div class="item col-md-4 one">
                            <div class="tm-work-item-inner">
                                <h3>Misi</h3>
                                <p>1.Mewujudkan Birokrasi Yang Bersih Dan Responsif Terhadap Pemenuhan Hak Dasar Rakyat.</p>
                                <p>2.Mewujudkan Kesejahteraan Rakyat Melalui Pembangunan Ekonomi Kerakyatan Yang Difokuskan Pada Sektor Perdagangan, Industri Dan Pertanian.</p>
                                <p>3.Mewujudkan Kehidupan Paseduluran Dengan Menjunjung Tinggi Nilai-Nilai Agama.</p> <p>4.Mengembangkan Seni Budaya Dan Pengetahuan Tradisional.</p>
                                <p>5.Meningkatkan Kesejahteraan Masyarakat Desa Melalui Penguatan Kelembagaan Dan Pemberdayaan Masyarakat.</p>
                            </div>  
                        </div>
                        <div class="item col-md-4 two">
                            <div class="tm-work-item-inner">
                                <h3>Tujuan</h3>
                                <p>1.Mewujudkan Aparatur Yang Kompeten Yaitu Memiliki Pengetahuan, Keterampilan, Sikap Terpuji, Dan Diakui Secara Formal,</p>
                                <p>2.Memenuhi Hak-Hak Dasar Masyarakat Sesuai Standar Pelayanan Minimal</p>
                            </div> 
                    </div>
                    <div class="title">
                        <h2>Visi Dan Misi</h2>
                    </div>
                </div>
            </section>

            <section class="gallery-section section parallax-window" data-parallax="scroll" data-image-src="vendor/adminlte/dist/img/pemda2.jpg" id="section-3">
                <div class="container">
                    <div class="title text-right">
                        <h2><font color="white">Dokumentasi </font></h2>
                    </div>
                    <div class="mx-auto gallery-slider">
                        <figure class="effect-julia item">
                            <img src="vendor/adminlte/dist/img/pemda3.jpg" alt="Image">
                            <br>
                            <img src="vendor/adminlte/dist/img/pemda7.jpg" alt="Image">
                        </figure>

                        <figure class="effect-julia item">
                            <img src="vendor/adminlte/dist/img/pemda4.jpg" alt="Image">
                            <br>
                            <img src="vendor/adminlte/dist/img/pemda8.jpg" alt="Image">
                        </figure>

                        <figure class="effect-julia item">
                            <img src="vendor/adminlte/dist/img/pemda5.jpg" alt="Image">
                            <br>
                            <img src="vendor/adminlte/dist/img/pemda9.jpg" alt="Image"> 
                        </figure>

                        <figure class="effect-julia item">
                            <img src="vendor/adminlte/dist/img/pemda6.png" alt="Image">
                            <br>
                            <img src="vendor/adminlte/dist/img/pemda10.jpg" alt="Image">
                        </figure>

                        
                        <figure class="effect-julia item">
                            <img src="vendor/adminlte/dist/img/pemda2.jpg" alt="Image">
                            <br>
                            <img src="vendor/adminlte/dist/img/pemda11.jpg" alt="Image">
                        </figure>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="vendor/adminlte/dist/js/jquery-3.3.1.min.js"></script>
    <script src="vendor/adminlte/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/adminlte/dist/js/jquery.singlePageNav.min.js"></script>
    <script src="vendor/adminlte/dist/js/slick.js"></script>
    <script src="vendor/adminlte/dist/js/parallax.min.js"></script>
    <script src="vendor/adminlte/dist/js/templatemo-script.js"></script>
</body>
</html>