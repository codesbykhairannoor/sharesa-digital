<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sharesa Digital | @yield('title', 'Modern Digital Agency')</title>
    
    {{-- Favicon --}}
   <link rel="icon" type="image/png" href="{{ asset('images/logoku.png') }}?v=1">
<link rel="shortcut icon" href="{{ asset('images/logoku.png') }}?v=1">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Google Fonts (Plus Jakarta Sans) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* === SHARESA BRAND COLORS === */
        :root {
            --sharesa-dark: #1e2a39;
            --sharesa-green: #00ff8c;
            --sharesa-white: #ffffff;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* === NAVBAR STYLE === */
        .navbar-sharesa {
            background-color: var(--sharesa-dark);
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .navbar-brand span {
            color: var(--sharesa-white);
            letter-spacing: 0.5px;
            font-size: 1.25rem;
        }

        .nav-link {
            color: rgba(255,255,255,0.8) !important;
            font-weight: 500;
            transition: 0.3s;
            font-size: 0.95rem;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--sharesa-green) !important;
        }

        /* === BUTTON STYLES === */
        .btn-sharesa-login {
            color: var(--sharesa-green) !important;
            border: 2px solid var(--sharesa-green);
            border-radius: 50px;
            padding: 6px 24px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
            display: inline-block;
        }

        .btn-sharesa-login:hover {
            background-color: var(--sharesa-green);
            color: var(--sharesa-dark) !important;
            box-shadow: 0 0 15px rgba(0, 255, 140, 0.4);
        }

        .btn-sharesa-primary {
            background-color: var(--sharesa-green);
            color: var(--sharesa-dark) !important;
            border: 2px solid var(--sharesa-green);
            border-radius: 50px;
            padding: 6px 24px;
            font-weight: 700;
            text-decoration: none;
            transition: 0.3s;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(0, 255, 140, 0.2);
        }

        .btn-sharesa-primary:hover {
            background-color: #00cc70; 
            border-color: #00cc70;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 255, 140, 0.4);
        }

        /* === DROPDOWN PROFILE === */
        .profile-trigger {
            border: 1px solid rgba(255,255,255,0.2);
            background-color: rgba(255,255,255,0.05);
            color: #fff !important;
            border-radius: 50px;
            padding: 4px 15px 4px 4px;
            transition: 0.3s;
        }
        .profile-trigger:hover {
            background-color: rgba(255,255,255,0.1);
            border-color: var(--sharesa-green);
        }

        /* === FOOTER === */
        .footer-sharesa {
            background-color: var(--sharesa-dark);
            color: rgba(255,255,255,0.6);
            padding: 40px 0 20px;
            margin-top: auto;
            border-top: 3px solid var(--sharesa-green);
        }
    </style>
</head>

<body>

    {{-- ================= HEADER ================= --}}
   <header>
        <nav class="navbar navbar-expand-lg navbar-sharesa fixed-top py-3" style="background-color: var(--sharesa-dark); transition: all 0.3s;">
            <div class="container">

               {{-- LOGO BRANDING --}}
<a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
    {{-- Container untuk Logo Gambar --}}
    <div class="bg-white rounded-circle p-1 d-flex align-items-center justify-content-center me-2 shadow-sm" 
         style="width: 40px; height: 40px; overflow: hidden;">
        <img src="{{ asset('images/logoku.png') }}" alt="Sharesa Logo" 
             style="width: 100%; height: 100%; object-fit: contain;">
    </div>
    
    {{-- Teks Brand --}}
    <span class="navbar-logo-text fw-bold text-white fs-4" style="letter-spacing: -0.5px;">
        Sharesa<span style="color: var(--sharesa-green)">.</span>
    </span>
</a>

                {{-- TOGGLER (MOBILE) --}}
                <button class="navbar-toggler border-0" type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#navbarNav">
                    <i class="bi bi-list text-white fs-1"></i>
                </button>

                {{-- NAVBAR CONTENT --}}
                <div class="collapse navbar-collapse" id="navbarNav">
                    
                    {{-- MENU UTAMA (Centered / Left Aligned) --}}
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-4">
                        <li class="nav-item">
                            <a class="nav-link text-white-50 fw-medium {{ request()->is('/') ? 'active text-white fw-bold' : '' }}" 
                               href="{{ url('/') }}">{{ __('messages.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white-50 fw-medium {{ request()->is('about*') ? 'active text-white fw-bold' : '' }}" 
                               href="{{ url('/about') }}">{{ __('messages.about') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white-50 fw-medium {{ request()->is('services*') ? 'active text-white fw-bold' : '' }}" 
                               href="{{ url('/services') }}">{{ __('messages.services') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white-50 fw-medium {{ request()->is('portfolios*') ? 'active text-white fw-bold' : '' }}" 
                               href="{{ url('/portfolios') }}">{{ __('messages.portfolios') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white-50 fw-medium {{ request()->is('contact*') ? 'active text-white fw-bold' : '' }}" 
                               href="{{ url('/contact') }}">{{ __('messages.contact') }}</a>
                        </li>
                    </ul>

                    {{-- BAGIAN KANAN (LANG & ADMIN PROFILE) --}}
                    <ul class="navbar-nav align-items-center gap-3">
                        
                        {{-- PEMBATAS VERTICAL (Desktop Only) --}}
                        <li class="d-none d-lg-block">
                            <div class="vr bg-white opacity-25" style="height: 25px;"></div>
                        </li>

                        {{-- LANGUAGE SWITCHER (Simple Icon) --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white d-flex align-items-center gap-1" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-globe"></i> 
                                <span class="small font-monospace text-uppercase">{{ App::getLocale() }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2" style="min-width: 120px;">
                                <li>
                                    <a class="dropdown-item d-flex justify-content-between {{ App::getLocale() == 'id' ? 'active bg-success' : '' }}" href="{{ route('lang.switch', 'id') }}">
                                        <span>Indonesian</span> <span>🇮🇩</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex justify-content-between {{ App::getLocale() == 'en' ? 'active bg-success' : '' }}" href="{{ route('lang.switch', 'en') }}">
                                        <span>English</span> <span>🇬🇧</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- ADMIN PROFILE (HANYA MUNCUL KALAU LOGIN) --}}
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center gap-2 p-1 pe-3 rounded-pill bg-white bg-opacity-10 border border-white border-opacity-10" 
                                   href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name).'&background=00ff8c&color=1e2a39&bold=true' }}"
                                         class="rounded-circle" width="30" height="30" style="object-fit: cover;">
                                    <span class="text-white small fw-bold">{{ explode(' ', Auth::user()->name)[0] }}</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 mt-3 rounded-3 p-2" style="width: 200px;">
                                    <li><h6 class="dropdown-header text-uppercase small fw-bold text-muted">Admin Access</h6></li>
                                    <li>
                                        <a class="dropdown-item rounded-2 mb-1" href="{{ route('admin.dashboard') }}">
                                            <i class="bi bi-speedometer2 me-2 text-primary"></i>Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item rounded-2 mb-1" href="{{ route('admin.portfolios.create') }}">
                                            <i class="bi bi-plus-lg me-2 text-success"></i>New Project
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider my-2"></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item rounded-2 text-danger fw-bold">
                                                <i class="bi bi-box-arrow-right me-2"></i>Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            {{-- KALAU BELUM LOGIN (Tombol "Hire Us" Biasa) --}}
                            <li class="nav-item d-none d-lg-block ms-2">
                                <a href="{{ url('/contact') }}" class="btn btn-sm text-dark fw-bold rounded-pill px-4 hover-scale" 
                                   style="background-color: var(--sharesa-green);">
                                    {{ __('messages.hubungi_kami') }}
                                </a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{-- ================= CONTENT ================= --}}
    {{-- Padding top agar tidak ketutup navbar fixed --}}
    <main class="flex-shrink-0" style="padding-top: 85px;">
        @yield('content')
    </main>

    {{-- ================= FOOTER ================= --}}
    <footer class="footer-sharesa text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h5 class="text-white fw-bold mb-3">Sharesa<span style="color: var(--sharesa-green)">.</span></h5>
                    <p class="small mb-3 text-white-50">
                        {{ __('messages.footer_text') }}
                    </p>
                    <p class="small mb-0 opacity-50">
                        &copy; {{ date('Y') }} Sharesa Digital Agency. {{ __('messages.rights') }}
                    </p>
                </div>
            </div>
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>