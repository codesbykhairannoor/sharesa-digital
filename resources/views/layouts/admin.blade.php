<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | @yield('title')</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* === SHARESA ADMIN THEME === */
        :root {
            --sharesa-dark: #1e2a39;
            --sharesa-green: #00ff8c;
            --sharesa-light: #f8f9fa;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f3f4f6;
        }

        /* Navbar Style */
        .navbar-admin {
            background-color: var(--sharesa-dark);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: white !important;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.7) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            border-radius: 50px;
            transition: all 0.3s;
        }

        .nav-link:hover {
            color: white !important;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .nav-link.active {
            color: var(--sharesa-dark) !important;
            background-color: var(--sharesa-green) !important;
            font-weight: 600;
        }

        /* Buttons */
        .btn-view-site {
            border: 1px solid rgba(255,255,255,0.3);
            color: white;
            transition: 0.3s;
        }
        .btn-view-site:hover {
            background-color: white;
            color: var(--sharesa-dark);
        }
    </style>
</head>

<body>

    {{-- ================= NAVBAR START ================= --}}
    <nav class="navbar navbar-expand-lg navbar-admin sticky-top mb-4 py-3">
        <div class="container">

            {{-- LOGO BRANDING --}}
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('admin.dashboard') }}">
                <div class="bg-white rounded-circle p-1 d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                    <i class="bi bi-code-slash text-dark"></i>
                </div>
                <span>Sharesa<span style="color: var(--sharesa-green)">.</span> Admin</span>
            </a>

            {{-- TOGGLER (MOBILE) --}}
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
                <i class="bi bi-list text-white fs-2"></i>
            </button>

            {{-- MENU ITEMS --}}
            <div class="collapse navbar-collapse" id="adminNavbar">
                <ul class="navbar-nav ms-auto align-items-center gap-2">

                    @auth
                        {{-- === BAGIAN 1: MENU UTAMA === --}}
                        
                        {{-- 1. Dashboard --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" 
                               href="{{ route('admin.dashboard') }}">
                               <i class="bi bi-speedometer2 me-1"></i> Dashboard
                            </a>
                        </li>

                        {{-- 2. Kelola Portfolio (Dulu Produk) --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.portfolios.*') ? 'active' : '' }}" 
                               href="{{ route('admin.portfolios.index') }}">
                               <i class="bi bi-briefcase me-1"></i> Portfolios
                            </a>
                        </li>

                        {{-- 3. Kelola Admin Team (Dulu User) --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.manage.users') ? 'active' : '' }}" 
                               href="{{ route('admin.manage.users') }}">
                               <i class="bi bi-people me-1"></i> Team
                            </a>
                        </li>

                        {{-- PEMBATAS VERTICAL --}}
                        <li class="nav-item d-none d-lg-block mx-2">
                            <div class="vr h-100 bg-white opacity-25"></div>
                        </li>

                        {{-- === BAGIAN 2: TOMBOL AKSI === --}}

                        {{-- Lihat Website --}}
                        <li class="nav-item">
                            <a class="btn btn-sm btn-view-site rounded-pill px-3 fw-bold" 
                               href="{{ url('/') }}" target="_blank" title="Lihat Website">
                                <i class="bi bi-box-arrow-up-right me-1"></i> View Site
                            </a>
                        </li>

                        {{-- Logout --}}
                        <li class="nav-item">
                            <a class="btn btn-sm btn-danger rounded-pill px-3 fw-bold shadow-sm" href="#"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-power"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    @endauth

                </ul>
            </div>
        </div>
    </nav>
    {{-- ================= NAVBAR END ================= --}}

    {{-- KONTEN UTAMA --}}
    <main class="container my-5 pb-5" style="min-height: 80vh;">
        
        {{-- Flash Message Global --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4" role="alert">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill fs-4 me-3 text-success"></i>
                    <div>
                        <strong>Berhasil!</strong> {{ session('success') }}
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4" role="alert">
                <div class="d-flex align-items-center">
                    <i class="bi bi-exclamation-triangle-fill fs-4 me-3 text-danger"></i>
                    <div>
                        <strong>Gagal!</strong> {{ session('error') }}
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </main>

    {{-- Footer Simple --}}
    <footer class="text-center py-4 text-muted small border-top bg-white mt-auto">
        &copy; {{ date('Y') }} <strong>Sharesa Agency</strong>. Admin Panel v2.0
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    {{-- Custom Scripts --}}
    @yield('scripts')
</body>

</html>