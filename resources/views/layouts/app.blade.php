<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sharesa Digital | @yield('title', 'Modern Digital Agency')</title>
    
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('images/logoku.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/logoku.png') }}" type="image/x-icon">

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
        <nav class="navbar navbar-expand-lg navbar-sharesa fixed-top">
            <div class="container">

                {{-- LOGO --}}
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <img src="{{ asset('images/logoku.png') }}" alt="Sharesa Logo" height="35">
                    <span class="navbar-logo-text ms-2 fw-bold">Sharesa<span style="color: var(--sharesa-green)">.</span></span>
                </a>

                {{-- TOGGLER --}}
                <button class="navbar-toggler" type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#navbarNav"
                        style="border-color: rgba(255,255,255,0.3);">
                    <i class="bi bi-list text-white fs-2"></i>
                </button>

                {{-- NAVBAR CONTENT --}}
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">

                        {{-- === LANGUAGE SWITCHER (ID | EN) === --}}
                        <li class="nav-item dropdown me-lg-3">
                            <a class="nav-link dropdown-toggle font-monospace d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-globe me-1"></i> {{ strtoupper(App::getLocale()) }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" style="min-width: auto;">
                                <li>
                                    <a class="dropdown-item d-flex justify-content-between align-items-center {{ App::getLocale() == 'id' ? 'active bg-success' : '' }}" href="{{ route('lang.switch', 'id') }}">
                                        <span>Indonesian</span> <span>🇮🇩</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex justify-content-between align-items-center {{ App::getLocale() == 'en' ? 'active bg-success' : '' }}" href="{{ route('lang.switch', 'en') }}">
                                        <span>English</span> <span>🇬🇧</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- === MENU UTAMA AGENCY (Panggil Kamus) === --}}
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">{{ __('messages.home') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">{{ __('messages.services') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/portfolios') }}">{{ __('messages.portfolios') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">{{ __('messages.about') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">{{ __('messages.contact') }}</a></li>

                        <div class="vr mx-3 d-none d-lg-block bg-white opacity-25"></div>

                        {{-- ========== AUTH GUEST ========== --}}
                        @guest
                            <li class="nav-item mb-2 mb-lg-0 me-2 mt-2 mt-lg-0">
                                <a class="btn-sharesa-login" href="{{ route('login') }}">
                                    {{ __('messages.login') }}
                                </a>
                            </li>
                            <li class="nav-item mt-2 mt-lg-0">
                                <a class="btn-sharesa-primary" href="{{ route('register') }}">
                                    {{ __('messages.register') }}
                                </a>
                            </li>
                        @endguest

                        {{-- ========== AUTH USER ========== --}}
                        @auth
                            <li class="nav-item dropdown ms-lg-2">
                                <a class="nav-link dropdown-toggle d-flex align-items-center profile-trigger mt-2 mt-lg-0"
                                   href="#" role="button" data-bs-toggle="dropdown">
                                    {{-- Avatar --}}
                                    <img src="{{ Auth::user()->avatar
                                            ? asset('storage/' . Auth::user()->avatar)
                                            : 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name).'&background=00ff8c&color=1e2a39&bold=true' }}"
                                     class="rounded-circle me-2" width="32" height="32" style="object-fit: cover;">
                                    
                                    {{-- Nama --}}
                                    <span class="fw-bold small">{{ explode(' ', Auth::user()->name)[0] }}</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2 rounded-3">
                                    <li>
                                        <h6 class="dropdown-header fw-bold" style="color: var(--sharesa-dark)">
                                            {{ __('messages.welcome') }}, {{ explode(' ', Auth::user()->name)[0] }}!
                                        </h6>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    
                                    {{-- Menu Admin --}}
                                    @if(in_array(Auth::user()->role, ['superadmin', 'admin', 'police']))
                                        <li>
                                            <a class="dropdown-item fw-bold text-primary" href="{{ url('/admin/dashboard') }}">
                                                <i class="bi bi-grid-fill me-2"></i>{{ __('messages.dashboard') }}
                                            </a>
                                        </li>
                                    @endif

                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile') }}">
                                            <i class="bi bi-person-gear me-2"></i>{{ __('messages.settings') }}
                                        </a>
                                    </li>

                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="bi bi-box-arrow-right me-2"></i>{{ __('messages.logout') }}
                                            </button>
                                        </form>
                                    </li>
                                </ul>
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