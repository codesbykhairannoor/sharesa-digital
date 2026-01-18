@extends('layouts.app')

@section('title', __('messages.home'))

@section('content')

    {{-- ========================================== --}}
    {{-- SECTION 1: HERO SECTION (DARK THEME)       --}}
    {{-- ========================================== --}}
    <section class="position-relative overflow-hidden py-5" style="background-color: var(--sharesa-dark); min-height: 85vh; display: flex; align-items: center;">
        
        {{-- Background Abstract Elements --}}
        <div class="position-absolute top-0 end-0 opacity-10">
            <i class="bi bi-code-slash text-white" style="font-size: 20rem; transform: rotate(-20deg);"></i>
        </div>

        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-7 text-white">
                    <span class="badge rounded-pill px-3 py-2 mb-3 fw-bold" style="background-color: rgba(0, 255, 140, 0.1); color: var(--sharesa-green); border: 1px solid var(--sharesa-green);">
                        {{ __('messages.hero_badge') }}
                    </span>
                    <h1 class="display-3 fw-bold mb-4 leading-tight">
                        {{ __('messages.hero_title') }}
                    </h1>
                    <p class="lead mb-5 text-white-50" style="max-width: 600px;">
                        {{ __('messages.hero_desc') }}
                    </p>
                    <div class="d-flex gap-3 flex-column flex-sm-row">
                        <a href="{{ url('/contact') }}" class="btn btn-sharesa-primary btn-lg px-5 py-3">
                            {{ __('messages.hero_cta') }} <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        <a href="{{ url('/portfolios') }}" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill">
                            {{ __('messages.hero_secondary') }}
                        </a>
                    </div>
                </div>
                
                {{-- Hero Image / Illustration --}}
                <div class="col-lg-5 d-none d-lg-block text-center">
                    <img src="https://cdn.dribbble.com/users/5031392/screenshots/15467520/media/c3664d4370f14ba49f783d73510e10a2.png?resize=800x600&vertical=center" 
                         alt="Digital Agency" class="img-fluid rounded-4 shadow-lg border border-secondary" style="transform: rotate(2deg);">
                </div>
            </div>

            {{-- Stats Counter --}}
            <div class="row mt-5 pt-5 g-4 border-top border-secondary border-opacity-25">
                <div class="col-4 col-md-3">
                    <h2 class="fw-bold text-white display-5">50+</h2>
                    <small class="text-white-50">{{ __('messages.stats_projects') }}</small>
                </div>
                <div class="col-4 col-md-3">
                    <h2 class="fw-bold" style="color: var(--sharesa-green);">30+</h2>
                    <small class="text-white-50">{{ __('messages.stats_clients') }}</small>
                </div>
                <div class="col-4 col-md-3">
                    <h2 class="fw-bold text-white display-5">4+</h2>
                    <small class="text-white-50">{{ __('messages.stats_exp') }}</small>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 2: WHY CHOOSE US (GRID)            --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-6" style="color: var(--sharesa-dark);">{{ __('messages.why_title') }}</h2>
                <p class="text-muted">{{ __('messages.why_subtitle') }}</p>
                <div style="width: 80px; height: 4px; background-color: var(--sharesa-green); margin: 0 auto;"></div>
            </div>

            <div class="row g-4">
                {{-- Feature 1 --}}
                <div class="col-md-4">
                    <div class="p-4 h-100 border rounded-4 bg-light position-relative overflow-hidden group-hover">
                        <div class="mb-3">
                            <i class="bi bi-vector-pen display-4" style="color: var(--sharesa-dark);"></i>
                        </div>
                        <h4 class="fw-bold mb-3">{{ __('messages.why_1_title') }}</h4>
                        <p class="text-muted">{{ __('messages.why_1_desc') }}</p>
                    </div>
                </div>

                {{-- Feature 2 --}}
                <div class="col-md-4">
                    <div class="p-4 h-100 rounded-4 text-white position-relative shadow" style="background-color: var(--sharesa-dark);">
                        <div class="mb-3">
                            <i class="bi bi-terminal display-4" style="color: var(--sharesa-green);"></i>
                        </div>
                        <h4 class="fw-bold mb-3">{{ __('messages.why_2_title') }}</h4>
                        <p class="text-white-50">{{ __('messages.why_2_desc') }}</p>
                    </div>
                </div>

                {{-- Feature 3 --}}
                <div class="col-md-4">
                    <div class="p-4 h-100 border rounded-4 bg-light">
                        <div class="mb-3">
                            <i class="bi bi-lightning-charge display-4" style="color: var(--sharesa-dark);"></i>
                        </div>
                        <h4 class="fw-bold mb-3">{{ __('messages.why_3_title') }}</h4>
                        <p class="text-muted">{{ __('messages.why_3_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 3: CTA (Call to Action)            --}}
    {{-- ========================================== --}}
    <section class="py-5">
        <div class="container">
            <div class="rounded-5 p-5 text-center text-white position-relative overflow-hidden" 
                 style="background: linear-gradient(45deg, var(--sharesa-dark), #2c3e50);">
                
                {{-- Decoration --}}
                <div class="position-absolute top-0 start-0 opacity-25 p-3">
                    <i class="bi bi-braces display-1"></i>
                </div>

                <div class="position-relative z-1">
                    <h2 class="fw-bold display-5 mb-3">{{ __('messages.cta_title') }}</h2>
                    <p class="lead mb-4 text-white-50">{{ __('messages.cta_desc') }}</p>
                    <a href="{{ url('/contact') }}" class="btn btn-sharesa-primary btn-lg rounded-pill px-5 shadow-lg">
                        {{ __('messages.cta_btn') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection