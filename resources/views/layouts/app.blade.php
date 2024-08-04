<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-nav {
            flex-direction: row;
        }
        .navbar-nav .nav-item {
            margin-right: 15px; /* Menambahkan jarak antar item navbar */
        }
        .navbar-nav .nav-link.active {
            font-weight: bold;
        }
        .navbar-nav .dropdown {
            margin-left: auto; /* Menempatkan dropdown di pojok kanan */
        }
        .navbar-nav .nav-link {
            transition: background-color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .dropdown-menu {
            min-width: 200px; /* Lebar dropdown menu */
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            height: 50px;
            width: 100%;
            background-color: #1E1E1E;
            color: white;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px; /* Memberi jarak dari konten utama */
        }
        body {
            padding-bottom: 70px; /* Memberi ruang untuk footer */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('barang.index') ? 'active' : '' }}" href="{{ route('barang.index') }}">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('supplier.index') ? 'active' : '' }}" href="{{ route('supplier.index') }}">Supplier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('customer.index') ? 'active' : '' }}" href="{{ route('customer.index') }}">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('keluhan.index') ? 'active' : '' }}" href="{{ route('keluhan.index') }}">Keluhan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pegawai.index') ? 'active' : '' }}" href="{{ route('pegawai.index') }}">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kendaraan.index') ? 'active' : '' }}" href="{{ route('kendaraan.index') }}">Kendaraan</a>
                </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <a class="nav-link text-white" href="{{ route('logout') }}" 
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </a>
                        </form>
                    </li>
                </ul>



        </div>
    </div>
</nav>

<main class="py-4">
    <div class="container">
        @yield('content')
    </div>
</main>

<footer class="footer">
    © 2024 Pemesanan Bengkel, Syahrul Annizam
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
