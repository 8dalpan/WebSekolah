<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard Sekolah | @yield('title')</title>

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- CUSTOM CSS -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="bg-primary text-white p-3" style="width:230px; min-height:100vh;">


        <div class="d-flex justify-content-center align-items-center  mb-3">

    <span class="fw-bold  fs-5">Selamat Datang</span>
</div>


        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="/" class="nav-link text-white">
                    <i class="fa fa-home"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="/siswa" class="nav-link text-white">
                    <i class="fa fa-user"></i> Data Siswa
                </a>
            </li>

            <li class="nav-item">
                <a href="/guru" class="nav-link text-white">
                    <i class="fa fa-chalkboard"></i> Data Guru
                </a>
            </li>

            <li class="nav-item">
                <a href="/mapel" class="nav-link text-white">
                    <i class="fa fa-book"></i> Mata Pelajaran
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="fa fa-cog"></i> Pengaturan
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="fa fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </div>
    <!-- MAIN -->
    <div class="flex-fill">
        <!-- TOPBAR -->
        <nav class="navbar navbar-light bg-white shadow-sm px-4">
            <span class="navbar-brand mb-0 h5">Dashboard</span>
            <span>Selamat Datang</span>
        </nav>
        @yield('content')
    </div>
</div>



<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
