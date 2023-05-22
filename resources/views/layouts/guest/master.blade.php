<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Diagtorsi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('guest/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('guest/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('guest/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('guest/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top shadow-sm mb-5" style="background-color:#354F8E;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0" >
                <a href="{{ route('guest.index') }}" class="navbar-brand">
                    <h2 class="" style="color:white;">DIAGTORSI</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('guest.index') }}" class="nav-item nav-link" style="color:white;">
                            Halaman Utama
                        </a>
                        <a href="{{ route('guest.diagnoses') }}" class="nav-item nav-link" style="color:white;">
                            Diagnosa
                        </a>
                        <a href="{{ route('guest.sparepart') }}" class="nav-item nav-link" style="color:white;">
                            Spart Parts
                        </a>
                        <a href="{{ route('guest.article') }}" class="nav-item nav-link" style="color:white;">
                            Berita / Informasi
                        </a>
                        <a href="{{ route('login') }}" class="nav-item nav-link" style="color:white;">
                            Login
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    @yield('content')

    @include('sweetalert::alert')

    <!-- Footer Start -->
    <div class="container-fluid text-light mt-5 py-5" style="background-color:#EFF5F9;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <h4 class="d-inline-block text-uppercase border-bottom border-5 border-secondary mb-4">Informasi Tambahan</h4>
                    <p class="mb-2" style="color:#1D2A4D;"><i class="fa fa-map-marker-alt me-3" style="color:#1D2A4D;"></i>Pakis, Kabupaten Malang, Jawa Timur</p>
                    <p class="mb-2" style="color:#1D2A4D;"><i class="fa fa-envelope me-3" style="color:#1D2A4D;"></i>1941720114@student.polinema.ac.id</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light border-top border-secondary py-4" style="background-color:#354F8E;">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; Diagtorsi 1941720114.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('guest/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('guest/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('guest/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('guest/assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('guest/assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('guest/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('guest/assets/js/main.js') }}"></script>
</body>

</html>