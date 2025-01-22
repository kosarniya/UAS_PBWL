<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suendri">
    <title>Laman Jenis Bantuan</title>

    <link href="img/favicon.ico" rel="shortcut icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset ('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('public/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('public/css/style.css') }}">

    <script src="{{ asset ('public/js/color-mode.js') }}"></script>
    <script src="{{ asset ('public/js/modal.js') }}"></script>
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
                    <li class="sidebar-item">
                        <a href="{{ url('jenis') }}" class="sidebar-link ">
                            <i class="bi bi-house me-2"></i>
                            Jenis Bantuan
                        </a>
                    <li class="sidebar-item">
                        <a href="{{ url('warga') }}" class="sidebar-link ">
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

            <main class="content py-2 ps-0 ps-md-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h2 class="fw-bold">Jenis Bantuan</h2>
                    </div>

<div class="mt-3">

    @if ($errors->any())
    <div class="my-3">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    </div>
    @endif

    @if (session('succes'))
    <div class="my-3">
    <div class="alert alert-success">
        {{ session('succes') }}
    </div>
    </div>
    @endif

<!-- Batas Modal Create -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  tambah jenis bantuan
</button>

<!-- Modal Create -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Jenis Bantuan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="{{ url('jenis')}}" method="post">
            @csrf

        <div class="mb-3">
            <label for="jenis">Nama Jenis Bantuan</label>
            <input type="text" name="jenis" id="jenis" class="form-control @error('jenis') is-invalid @enderror" value="{{old('jenis')}}">
            <label for="tanggal">Tanggal Pengambilan</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{old('tanggal')}}">
            <label for="banyak">Banyak Bantuan</label>
            <input type="text" name="banyak" id="banyak" class="form-control @error('banyak') is-invalid @enderror" value="{{old('banyak')}}">

            @error('jenis', 'banyak')
              <div class="invalid-feedback">
                 {{ $message }}
                </div>
            @enderror

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">simpan</button>
      </div>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- Batas Modal Create -->

    <table class="table table-stripped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis bantuan</th>
                <th>Tanggal pengambilan</th>
                <th>Banyak bantuan</th>
                <th>Created At</th>
                <th>Fungsi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($jenis as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->jenis }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->banyak }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <div class="text-center">
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticUpdate{{ $item->id }}">edit</button>
                       
                       
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticDelete{{ $item->id }}">hapus</button>
                    </div>
                </td>
                  <!-- Modal Update -->
<div class="modal fade" id="staticUpdate{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Jenis Bantuan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  
        <div class="modal-body">
          <form action="{{ url('jenis/'.$item->id) }}" method="post">
            @method('PUT')   
            @csrf 
  
          <div class="mb-3">
              <label for="jenis">Nama Jenis Bantuan</label>
              <input type="text" name="jenis" id="jenis" class="form-control @error('jenis') is-invalid @enderror" value="{{old('jenis', $item->jenis)}}">
              <label for="tanggal">Tanggal Pengambilan</label>
              <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{old('tanggal',  $item->tanggal)}}">
              <label for="banyak">Banyak Bantuan</label>
              <input type="text" name="banyak" id="banyak" class="form-control @error('banyak') is-invalid @enderror" value="{{old('banyak',  $item->banyak)}}">
  
              @error('jenis', 'banyak')
                <div class="invalid-feedback">
                   {{ $message }}
                  </div>
              @enderror
  
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">simpan</button>
        </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- Batas Modal Update -->

<!-- Modal Delete -->
<div class="modal fade" id="staticDelete{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Jenis Bantuan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  
        <div class="modal-body">
          <form action="{{ url('jenis/'.$item->id) }}" method="post">
            @method('Delete')   
            @csrf 
  
          <div class="mb-3">
                <p>Apakah kamu ingin menghapus <u> {{ $item->jenis }} </u></p>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">delete</button>
        </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- Batas Modal Delete -->
            </tr>
            
            @endforeach


        </tbody>
        
    </table>
</div>
                </div>
            </main>

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

    <script src="{{ asset ('public/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('public/js/sidebar.js') }}"></script>

</body>

</html>