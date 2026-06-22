<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sharesa Space | @yield('title', 'Modern Digital Agency')</title>

    {{-- SEO & Global Meta --}}
    <meta name="description" content="Sharesa Space - Jasa Pembuatan Website Terbaik untuk UMKM dan Bisnis. Solusi Desain UI/UX Profesional, Web Development, dan Digital Branding Terpercaya.">
    <meta name="keywords" content="jasa pembuatan website, buat website umkm, digital agency jakarta, digital agency banjarmasin, website developer indonesia, ui/ux design, branding bisnis">
    <meta name="author" content="Khairan Noor - Sharesa Space">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Geo-Targeting (Jakarta/Indonesia) --}}
    <meta name="geo.region" content="ID-JK">
    <meta name="geo.placename" content="South Jakarta">
    <meta name="geo.position" content="-6.2088;106.8456">
    <meta name="ICBM" content="-6.2088, 106.8456">

    {{-- JSON-LD Global Schema (Organization & WebSite) --}}
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Sharesa Space",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/logoku.png') }}",
      "sameAs": [
        "https://www.linkedin.com/in/khairannoorfadhlillah/",
        "https://github.com/codesbykhairannoor"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "0823-9512-3470",
        "contactType": "customer service",
        "areaServed": "ID",
        "availableLanguage": ["id", "en"]
      }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Sharesa Space",
      "url": "{{ url('/') }}",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "{{ url('/') }}/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/logoku.png') }}?v=1">
    <link rel="shortcut icon" href="{{ asset('images/logoku.png') }}?v=1">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- AOS — Animate On Scroll (lightweight, CDN) --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">

    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ env('META_PIXEL_ID') }}');
        fbq('set', 'autoConfig', false, '{{ env('META_PIXEL_ID') }}');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id={{ env('META_PIXEL_ID') }}&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <script>
        window.SHARESASPACE = {
            meta: {
                pixelId: '{{ env('META_PIXEL_ID') }}',
                externalId: '{{ request()->cookie("sharesa_external_id") }}',
                fbp: document.cookie.split('; ').find(row => row.startsWith('_fbp='))?.split('=')[1] || null,
                fbc: document.cookie.split('; ').find(row => row.startsWith('_fbc='))?.split('=')[1] || null,
                trackUrl: '{{ route("track.meta") }}',
                csrf: '{{ csrf_token() }}'
            }
        };
    </script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        /* ============================================
           SHARESA DESIGN SYSTEM — GLOBAL TOKENS
        ============================================ */
        :root {
            --sharesa-dark: #1e2a39;
            --sharesa-green: #00ff8c;
            --sharesa-green-dim: #00cc70;
            --sharesa-white: #ffffff;
        }

        /* === CUSTOM SCROLLBAR === */
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #0d1520; }
        ::-webkit-scrollbar-thumb { background: var(--sharesa-green); border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--sharesa-green-dim); }
        * { scrollbar-width: thin; scrollbar-color: var(--sharesa-green) #0d1520; }

        /* === BASE === */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* === TYPOGRAPHY UTILITIES === */
        .text-gradient-green {
            background: linear-gradient(135deg, #00ff8c 0%, #00e57a 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-label {
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 2px;
            color: var(--sharesa-green-dim);
        }

        /* ============================================
           NAVBAR
        ============================================ */
        .navbar-sharesa {
            background-color: var(--sharesa-dark);
            padding: 15px 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1050;
        }

        /* Mobile Menu Tweak (Glassmorphism) */
        @media (max-width: 991.98px) {
            .navbar-sharesa .navbar-collapse {
                background: rgba(30, 42, 57, 0.95);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                position: fixed;
                top: 85px; /* Navbar height approx */
                left: 0;
                right: 0;
                height: calc(100vh - 85px);
                padding: 40px 30px;
                border-top: 1px solid rgba(255, 255, 255, 0.05);
                transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
                overflow-y: auto;
            }

            .navbar-sharesa .nav-link {
                font-size: 1.5rem !important;
                padding: 15px 0 !important;
                border-bottom: 1px solid rgba(255, 255, 255, 0.05);
                width: 100%;
                opacity: 0.8;
            }
            .navbar-sharesa .nav-link.active {
                opacity: 1;
                color: var(--sharesa-green) !important;
            }
            .navbar-sharesa .nav-link.active::after {
                display: none; /* Hide horizontal line in mobile */
            }

            .navbar-sharesa .navbar-nav {
                margin-bottom: 40px !important;
            }

            /* Dropdown and Buttons in Mobile View */
            .navbar-sharesa .dropdown-menu {
                background: rgba(255, 255, 255, 0.05) !important;
                border: 1px solid rgba(255, 255, 255, 0.1) !important;
                box-shadow: none !important;
                margin-top: 10px !important;
                border-radius: 12px;
            }
            .navbar-sharesa .dropdown-item {
                color: rgba(255, 255, 255, 0.7) !important;
                padding: 12px 20px !important;
            }
            .navbar-sharesa .dropdown-item:hover, .navbar-sharesa .dropdown-item.active {
                background: rgba(0, 255, 140, 0.1) !important;
                color: var(--sharesa-green) !important;
            }
        }

        /* Scroll state — glass blur */
        .navbar-scrolled {
            backdrop-filter: blur(14px) !important;
            -webkit-backdrop-filter: blur(14px) !important;
            background-color: rgba(30, 42, 57, 0.88) !important;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.25) !important;
            padding: 10px 0 !important;
        }

        .navbar-brand span {
            color: var(--sharesa-white);
            letter-spacing: 0.5px;
            font-size: 1.25rem;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.75) !important;
            font-weight: 500;
            transition: 0.25s ease;
            font-size: 0.95rem;
            position: relative;
            padding-bottom: 4px !important;
        }

        .nav-link:hover {
            color: var(--sharesa-white) !important;
        }

        .nav-link.active {
            color: var(--sharesa-green) !important;
            font-weight: 600;
        }

        /* Active underline indicator */
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 24px;
            height: 2px;
            background: var(--sharesa-green);
            border-radius: 2px;
        }

        /* === BUTTONS === */
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

        /* Tabs styling */
        .pricing-tabs .nav-link { color: var(--sharesa-dark) !important; opacity: 0.6; transition: 0.3s; border: 1px solid transparent; }
        .pricing-tabs .nav-link:hover:not(.active) { opacity: 1; background: #f1f5f9; }
        .pricing-tabs .nav-link.active { 
            background-color: var(--sharesa-dark) !important; 
            color: var(--sharesa-green) !important; 
            opacity: 1 !important;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
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
            box-shadow: 0 4px 15px rgba(0, 255, 140, 0.25);
        }

        .btn-sharesa-primary:hover {
            background-color: var(--sharesa-green-dim);
            border-color: var(--sharesa-green-dim);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 255, 140, 0.4);
        }

        /* === DROPDOWN PROFILE === */
        .profile-trigger {
            border: 1px solid rgba(255, 255, 255, 0.2);
            background-color: rgba(255, 255, 255, 0.05);
            color: #fff !important;
            border-radius: 50px;
            padding: 4px 15px 4px 4px;
            transition: 0.3s;
        }

        .profile-trigger:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: var(--sharesa-green);
        }

        /* ============================================
           FOOTER
        ============================================ */
        .footer-sharesa {
            background-color: var(--sharesa-dark);
            color: rgba(255, 255, 255, 0.6);
            padding: 60px 0 0;
            margin-top: auto;
            position: relative;
        }

        /* Animated gradient top border */
        .footer-sharesa::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent 0%, var(--sharesa-green) 50%, transparent 100%);
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            display: inline-block;
        }

        .footer-link:hover {
            color: var(--sharesa-green);
            transform: translateX(4px);
        }

        .footer-social-icon {
            width: 38px;
            height: 38px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.6) !important;
            text-decoration: none !important;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .footer-social-icon:hover {
            background: var(--sharesa-green);
            border-color: var(--sharesa-green);
            color: var(--sharesa-dark) !important;
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 255, 140, 0.25);
        }

        /* === WA FLOAT === */
        .wa-float-widget:hover {
            transform: scale(1.1) rotate(5deg);
            background-color: #128c7e !important;
        }

        @media (max-width: 768px) {
            .wa-float-widget {
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
            }
        }
    </style>

    {{-- Page-level styles hook --}}
    @yield('styles')
</head>

<body>

    {{-- ================= HEADER ================= --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-sharesa fixed-top py-3"
            style="background-color: var(--sharesa-dark);">
            <div class="container">

                {{-- LOGO BRANDING --}}
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="bg-white rounded-circle d-flex align-items-center justify-content-center shadow-sm"
                        style="width: 42px; height: 42px; overflow: hidden;">
                        <img src="{{ asset('images/logoku.png') }}" alt="Sharesa Logo"
                            style="width: 85%; height: 85%; object-fit: contain;">
                    </div>
                </a>

                <div class="d-flex align-items-center gap-3">
                    {{-- HUBUNGI KAMI BUTTON (MOBILE ONLY) --}}
                    <a href="{{ url('/contact') }}" class="btn btn-sharesa-primary btn-sm rounded-pill px-3 d-lg-none" 
                       style="font-size: 0.8rem; padding-top: 6px; padding-bottom: 6px;">
                        Hubungi
                    </a>

                    {{-- TOGGLER (MOBILE) --}}
                    <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav">
                        <i class="bi bi-list text-white" style="font-size: 2.2rem;"></i>
                    </button>
                </div>

                {{-- NAVBAR CONTENT --}}
                <div class="collapse navbar-collapse" id="navbarNav">

                    {{-- MENU UTAMA --}}
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-4">
                        <li class="nav-item">
                            <a class="nav-link fw-medium {{ request()->is('/') ? 'active' : '' }}"
                                href="{{ url('/') }}">{{ __('messages.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium {{ request()->is('about*') ? 'active' : '' }}"
                                href="{{ url('/about') }}">{{ __('messages.about') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium {{ request()->is('services*') ? 'active' : '' }}"
                                href="{{ url('/services') }}">{{ __('messages.services') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium {{ request()->is('portfolios*') ? 'active' : '' }}"
                                href="{{ url('/portfolios') }}">{{ __('messages.portfolios') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium {{ request()->is('contact*') ? 'active' : '' }}"
                                href="{{ url('/contact') }}">{{ __('messages.contact') }}</a>
                        </li>
                    </ul>

                    {{-- BAGIAN KANAN --}}
                    <ul class="navbar-nav align-items-center gap-3">

                        <li class="d-none d-lg-block">
                            <div class="vr bg-white opacity-25" style="height: 25px;"></div>
                        </li>

                        {{-- LANGUAGE SWITCHER --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white d-flex align-items-center gap-1" href="#"
                                role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-globe"></i>
                                <span class="small font-monospace">{{ App::getLocale() }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2"
                                style="min-width: 120px;">
                                <li>
                                    <a class="dropdown-item d-flex justify-content-between {{ App::getLocale() == 'id' ? 'active bg-success' : '' }}"
                                        href="{{ route('lang.switch', 'id') }}">
                                        <span>Indonesian</span> <span>🇮🇩</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex justify-content-between {{ App::getLocale() == 'en' ? 'active bg-success' : '' }}"
                                        href="{{ route('lang.switch', 'en') }}">
                                        <span>English</span> <span>🇬🇧</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center gap-2 p-1 pe-3 rounded-pill bg-white bg-opacity-10 border border-white border-opacity-10"
                                    href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) . '&background=00ff8c&color=1e2a39&bold=true' }}"
                                        class="rounded-circle" width="30" height="30" style="object-fit: cover;">
                                    <span class="text-white small fw-bold">{{ explode(' ', Auth::user()->name)[0] }}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 mt-3 rounded-3 p-2"
                                    style="width: 200px;">
                                    <li>
                                        <h6 class="dropdown-header small fw-bold text-muted">Admin Access</h6>
                                    </li>
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
                                    <li>
                                        <hr class="dropdown-divider my-2">
                                    </li>
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
                            <li class="nav-item ms-lg-2 mt-3 mt-lg-0">
                                <a href="{{ url('/contact') }}"
                                    class="btn btn-sharesa-primary w-100 w-lg-auto rounded-pill px-4 shadow-lg py-2 py-lg-1"
                                    style="font-size: 0.9rem;">
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
    <main class="flex-shrink-0" style="padding-top: 85px;">
        @yield('content')
    </main>

    {{-- ================= FOOTER ================= --}}
    <footer class="footer-sharesa">
        <div class="container">
            <div class="row g-5">

                {{-- Column 1: Brand --}}
                <div class="col-lg-4 col-md-12">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-white rounded-circle p-1 d-flex align-items-center justify-content-center me-2 shadow-sm"
                            style="width: 36px; height: 36px; overflow: hidden;">
                            <img src="{{ asset('images/logoku.png') }}" alt="Sharesa"
                                style="width: 100%; height: 100%; object-fit: contain;">
                        </div>
                        <h5 class="text-white fw-bold mb-0 fs-4">Sharesa<span
                                style="color: var(--sharesa-green)">.</span></h5>
                    </div>
                    <p class="small text-white-50 mb-4" style="line-height: 1.8; max-width: 280px;">
                        {{ __('messages.footer_text') }}
                    </p>
                    <div class="d-flex gap-2">
                        <a href="#" class="footer-social-icon" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/khairannoorfadhlillah/" target="_blank"
                            class="footer-social-icon" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://wa.me/6282395123470" target="_blank" class="footer-social-icon"
                            style="color: #25d366 !important;" aria-label="WhatsApp">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="https://github.com/codesbykhairannoor" target="_blank" class="footer-social-icon"
                            aria-label="GitHub">
                            <i class="bi bi-github"></i>
                        </a>
                    </div>
                </div>

                {{-- Column 2: Quick Links --}}
                <div class="col-lg-4 col-md-6">
                    <h6 class="text-white fw-bold mb-4" style="letter-spacing: 1px; font-size: 0.85rem;">
                        Quick Links
                    </h6>
                    <ul class="list-unstyled d-grid gap-2">
                        <li>
                            <a href="{{ url('/') }}" class="footer-link">
                                <i class="bi bi-arrow-right-short"></i>{{ __('messages.home') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/about') }}" class="footer-link">
                                <i class="bi bi-arrow-right-short"></i>{{ __('messages.about') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/services') }}" class="footer-link">
                                <i class="bi bi-arrow-right-short"></i>{{ __('messages.services') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/portfolios') }}" class="footer-link">
                                <i class="bi bi-arrow-right-short"></i>{{ __('messages.portfolios') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}" class="footer-link">
                                <i class="bi bi-arrow-right-short"></i>{{ __('messages.contact') }}
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Column 3: Contact --}}
                <div class="col-lg-4 col-md-6">
                    <h6 class="text-white fw-bold mb-4" style="letter-spacing: 1px; font-size: 0.85rem;">
                        {{ __('messages.contact') }}
                    </h6>
                    <div class="d-grid gap-3">
                        <a href="mailto:hello@sharesa.id" class="footer-link d-flex align-items-center gap-2">
                            <i class="bi bi-envelope-fill text-success flex-shrink-0"></i>
                            <span>hello@sharesa.id</span>
                        </a>
                        <a href="https://wa.me/6282395123470" target="_blank"
                            class="footer-link d-flex align-items-center gap-2">
                            <i class="bi bi-whatsapp text-success flex-shrink-0"></i>
                            <span>0823-9512-3470</span>
                        </a>
                        <div class="d-flex align-items-center gap-2 text-white-50 small">
                            <i class="bi bi-geo-alt-fill text-success flex-shrink-0"></i>
                            <span>Jakarta Selatan, Indonesia</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 text-white-50 small">
                            <i class="bi bi-clock-fill text-success flex-shrink-0"></i>
                            <span>Mon – Fri, 09:00 – 18:00 WIB</span>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Bottom Bar --}}
            <div class="mt-5 pt-4 pb-4 d-flex flex-column flex-md-row justify-content-between align-items-center gap-2"
                style="border-top: 1px solid rgba(255,255,255,0.07);">
                <p class="small mb-0 opacity-50">&copy; {{ date('Y') }} Sharesa Digital Agency.
                    {{ __('messages.rights') }}</p>
                <div class="d-flex gap-3 align-items-center">
                    <a href="#" class="footer-link small opacity-50">Privacy Policy</a>
                    <span class="opacity-20 text-white">|</span>
                    <a href="#" class="footer-link small opacity-50">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- Floating WhatsApp Widget --}}
    <div class="wa-float-widget shadow-lg rounded-circle d-flex align-items-center justify-content-center wa-track"
        data-msg="Halo Sharesa, saya ingin konsultasi mengenai layanan Digital Agency Anda."
        style="position: fixed; bottom: 30px; right: 30px; width: 60px; height: 60px; background-color: #25d366; color: white; cursor: pointer; z-index: 9999; transition: all 0.3s ease;">
        <i class="bi bi-whatsapp fs-2"></i>
        <span
            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger border border-light"
            style="font-size: 0.6rem;">1</span>
    </div>

    {{-- Bootstrap JS & page scripts --}}
    @stack('scripts')

    {{-- AOS Script --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/tracking.js') }}"></script>

    <script>
        // ============================================
        // AOS INIT
        // ============================================
        AOS.init({
            duration: 700,
            once: true,
            easing: 'ease-out-cubic',
            offset: 60
        });

        // ============================================
        // NAVBAR SCROLL EFFECT
        // ============================================
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar-sharesa');
            if (window.scrollY > 60) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

        // ============================================
        // FLOATING WA WIDGET
        // ============================================
        document.querySelectorAll('.wa-track').forEach(btn => {
            if (btn.classList.contains('wa-processed')) return;
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                const msg = this.getAttribute('data-msg');
                const url = `https://wa.me/6282395123470?text=${encodeURIComponent(msg)}`;

                if (window.trackingService) {
                    window.trackingService.track('Contact', {
                        value: 900000.00,
                        currency: 'IDR',
                        content_name: 'Floating WA Widget',
                        content_category: 'Direct Message'
                    });
                }

                setTimeout(() => { window.open(url, '_blank'); }, 300);
            });
            btn.classList.add('wa-processed');
        });
    </script>
</body>

</html>