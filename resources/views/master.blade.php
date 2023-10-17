<!DOCTYPE html>
<html>
    <head>
        <title>Templating</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="{{asset ('/assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset ('/assets/css/style.css')}}">

    </head>
    <body>
    <div class="container-fluid bg-dark">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-primary mb-0 display-5">Blog<span class="text-white">TEDC</span><i class="fa fa-spider text-primary ms-2"></i></h1>
                    </a>
                    <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-dark"></span>
                    </button>
                    <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="/blog" class="nav-item nav-link">Home</a>
                            <a href="/blog/tentang" class="nav-item nav-link">Tentang</a>
                            <a href="/blog/kontak" class="nav-item nav-link">Kontak</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        

        <h3>@yield('judul_halaman')</h3>

        @yield('konten')

        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    
                    <div class="possition-relative text-center text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Bootstrap</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>