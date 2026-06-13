<!DOCTYPE html>
<html lang="en">

<head>
    <title>5026241106 Ramdhan Zulfikri</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h3>5026241106 Ramdhan Zulfikri</h3>
            <p>@yield('judul_halaman')</p>
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('pegawai*') ? 'active' : '' }}" href="/pegawai">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('pensil*') ? 'active' : '' }}" href="/pensil">Pensil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('siswa*') ? 'active' : '' }}" href="/siswa">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('keranjangbelanja*') ? 'active' : '' }}" href="/keranjangbelanja">Latihan Laki</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('nilaikuliah*') ? 'active' : '' }}" href="/nilaikuliah">Latihan Perempuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">EAS</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container mt-3">
        @yield('konten')
    </div>

</body>

</html>
