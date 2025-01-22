<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suendri">
    <title>Laman informasi</title>

    <link href="img/favicon.ico" rel="shortcut icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset ('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('public/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('public/css/style.css') }}">

    <script src="{{ asset ('public/js/color-mode.js') }}"></script>
</head>


<body>
    <div class="wrapper">

        <aside id="sidebar" class="js-sidebar bg-dark">
            <div class="h-10">
                <div class="sidebar-logo">
                    <a href="index.html">Kepling Information</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Main Menu
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ url('informasi') }}" class="sidebar-link active">
                            <i class="bi bi-house me-2"></i>
                            Informasi
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ url('jenis') }}" class="sidebar-link ">
                            <i class="bi bi-house me-2"></i>
                            Jenis Bantuan
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ url('warga') }}" class="sidebar-link">
                            <i class="bi bi-house me-2"></i>
                            Nama Warga
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="user.html" class="sidebar-link">
                            <i class="bi bi-people me-2"></i>
                            User
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ url('pages') }}" class="sidebar-link">
                            <i class="bi bi-info-circle me-2"></i>
                            About
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="main">
            <nav class="navbar navbar-expand ps-0 ps-md-2 pe-3 py-0 border-bottom">
                <button class="btn border-0" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" id="bd-theme"
                                aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static"
                                aria-label="Toggle theme (auto)">
                                <i class="bi bi-sun-fill theme-icon-active" data-theme-icon-active="bi-sun-fill"></i>
                                <span class="d-none ms-2" id="bd-theme-text">Toggle theme</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme-text">
                                <button type="button" class="dropdown-item" data-bs-theme-value="light"
                                    aria-pressed="false">
                                    <i class="bi bi-sun-fill opacity-50" data-theme-icon="bi-sun-fill"></i>
                                    Light
                                </button>
                                <button type="button" class="dropdown-item" data-bs-theme-value="dark"
                                    aria-pressed="false">
                                    <i class="bi bi-moon-stars-fill opacity-50"
                                        data-theme-icon="bi-moon-stars-fill"></i> Dark
                                </button>
                                <button type="button" class="dropdown-item" data-bs-theme-value="auto"
                                    aria-pressed="true">
                                    <i class="bi bi-circle-half opacity-50" data-theme-icon="bi-circle-half"></i> Auto
                                </button>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" data-bs-offset="10,20">
                                <img src="img/profile.jpg" class="avatar img-fluid rounded-2 border border-secondary"
                                    alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">General</a>
                                <a href="#" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            {{--panggil kontent--}}

            @yield('content')

            {{-- footer --}}
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted px-3 mt-3">
                        <div class="col text-center text-md-start">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Terms</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Booking</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('js/sidebar.js') }}"></script>
</body>

</html>