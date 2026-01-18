@extends('layouts.app')

@section('title', __('messages.about'))

@section('content')

    {{-- SECTION 1: HERO ABOUT --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="text-uppercase fw-bold tracking-widest mb-2 d-block" style="color: var(--sharesa-green); letter-spacing: 2px;">
                        {{ __('messages.about_title') }}
                    </span>
                    <h1 class="display-4 fw-bold mb-4" style="color: var(--sharesa-dark);">
                        {{ __('messages.about_hero_title') }}
                    </h1>
                    <p class="lead text-muted mb-4">
                        {{ __('messages.about_hero_desc') }}
                    </p>
                    <div class="d-flex align-items-center gap-4">
                        <div>
                            <h2 class="fw-bold mb-0">2025</h2>
                            <small class="text-muted text-uppercase">Founded</small>
                        </div>
                        <div class="vr h-100"></div>
                        <div>
                            <h2 class="fw-bold mb-0">50+</h2>
                            <small class="text-muted text-uppercase">Projects</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        {{-- Gambar Hero --}}
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1470&auto=format&fit=crop" 
                             class="img-fluid rounded-4 shadow-lg" alt="Our Team Working">
                        
                        {{-- Dekorasi Kotak Hijau --}}
                        <div class="position-absolute bottom-0 start-0 bg-white p-4 rounded-3 shadow-lg m-4 border-start border-4 border-success d-none d-md-block">
                            <i class="bi bi-quote fs-1 text-success opacity-50"></i>
                            <p class="fst-italic mb-0 fw-medium">"Innovation distinguishes between a leader and a follower."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 2: VISION & MISSION (Dark Mode) --}}
    <section class="py-5 text-white" style="background-color: var(--sharesa-dark);">
        <div class="container py-4">
            <div class="row g-5">
                {{-- Vision --}}
                <div class="col-md-5 border-end border-secondary border-opacity-25">
                    <div class="d-flex align-items-start">
                        <div class="me-3 text-success">
                            <i class="bi bi-eye-fill fs-1"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-3">{{ __('messages.vision_title') }}</h3>
                            <p class="text-white-50 fs-5">
                                "{{ __('messages.vision_desc') }}"
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Mission --}}
                <div class="col-md-7">
                    <h3 class="fw-bold mb-4 ps-md-4">{{ __('messages.mission_title') }}</h3>
                    <div class="ps-md-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                            <span class="fs-5">{{ __('messages.mission_1') }}</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                            <span class="fs-5">{{ __('messages.mission_2') }}</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                            <span class="fs-5">{{ __('messages.mission_3') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 3: CORE VALUES --}}
    <section class="py-5 bg-light">
        <div class="container py-4 text-center">
            <h2 class="fw-bold mb-5" style="color: var(--sharesa-dark);">Our Core Values</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100 border-bottom border-4 border-success">
                        <i class="bi bi-lightbulb-fill fs-1 text-warning mb-3"></i>
                        <h4 class="fw-bold">Innovation</h4>
                        <p class="text-muted">We never stop learning and exploring new technologies.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100 border-bottom border-4 border-primary">
                        <i class="bi bi-shield-check fs-1 text-primary mb-3"></i>
                        <h4 class="fw-bold">Integrity</h4>
                        <p class="text-muted">Transparency and honesty are the foundation of our work.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100 border-bottom border-4 border-danger">
                        <i class="bi bi-heart-fill fs-1 text-danger mb-3"></i>
                        <h4 class="fw-bold">Passion</h4>
                        <p class="text-muted">We love what we do, and it shows in our results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection