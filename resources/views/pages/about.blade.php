@extends('layouts.app')

@section('title', __('messages.about'))

@section('content')
{{-- SECTION 1: HERO ABOUT --}}
   {{-- ========================================== --}}
    {{-- SECTION 1: HERO ABOUT (CLEAN & ICONIC)      --}}
    {{-- ========================================== --}}
   {{-- ========================================== --}}
    {{-- SECTION 1: HERO ABOUT (ULTRA CLEAN)         --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white position-relative overflow-hidden" style="padding-top: 120px !important; padding-bottom: 80px !important;">
        
        {{-- Background Pattern Dihapus untuk kesan Ultra Clean --}}

        <div class="container position-relative z-1">
            <div class="row align-items-center g-5">
                
                {{-- Kiri: Teks Content --}}
                <div class="col-lg-6">
                    <div class="d-inline-flex align-items-center px-3 py-1 rounded-pill bg-light border mb-4 shadow-sm">
                        <i class="bi bi-info-circle-fill me-2 text-success" style="font-size: 0.8rem;"></i>
                        <span class="text-uppercase fw-bold tracking-widest small text-muted" style="letter-spacing: 2px;">
                            {{ __('messages.about_title') }}
                        </span>
                    </div>
                    
                    <h1 class="display-3 fw-bold mb-4 text-dark lh-sm">
                        {{ __('messages.about_hero_title') }}
                    </h1>
                    
                    <p class="lead text-muted mb-5 border-start border-4 border-success ps-4 py-1" style="line-height: 1.8; font-size: 1.15rem;">
                        {{ __('messages.about_hero_desc') }}
                    </p>
                    
                    {{-- Stats Grid Clean --}}
                    <div class="row g-4 pt-2">
                        <div class="col-6 col-sm-auto">
                            <div class="p-3 bg-light rounded-4 border-bottom border-4 border-success shadow-sm text-center" style="min-width: 120px;">
                                <h2 class="fw-bold text-dark mb-0">2024</h2>
                                <small class="text-muted text-uppercase fw-bold tracking-tighter" style="font-size: 0.7rem;">Founded</small>
                            </div>
                        </div>
                        <div class="col-6 col-sm-auto">
                            <div class="p-3 bg-light rounded-4 border-bottom border-4 border-dark shadow-sm text-center" style="min-width: 120px;">
                                <h2 class="fw-bold mb-0" style="color: var(--sharesa-dark);">50+</h2>
                                <small class="text-muted text-uppercase fw-bold tracking-tighter" style="font-size: 0.7rem;">Projects</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Kanan: Visual Ikonik --}}
                <div class="col-lg-6 text-center">
                    <div class="position-relative d-inline-block">
                        
                        {{-- Glow Effect behind Icon (Soft Green) --}}
                        <div class="position-absolute top-50 start-50 translate-middle rounded-circle opacity-20" 
                             style="width: 300px; height: 300px; background: var(--sharesa-green); filter: blur(80px); z-index: 0;">
                        </div>

                        {{-- Ikon Utama --}}
                        <div class="position-relative z-1 animate-float">
                            <div class="bg-white rounded-5 shadow-lg border p-5 d-flex align-items-center justify-content-center mx-auto" 
                                 style="width: 280px; height: 280px; border-width: 1px !important; border-color: rgba(0,0,0,0.05) !important;">
                                <i class="bi bi-cpu-fill display-1" style="color: var(--sharesa-dark); filter: drop-shadow(0 10px 15px rgba(0,0,0,0.05));"></i>
                            </div>
                            
                            {{-- Mini Floating Icons --}}
                            <div class="position-absolute top-0 start-0 translate-middle-x bg-white shadow-sm rounded-4 p-3 border animate-float" style="animation-delay: 1s; border-color: rgba(0,0,0,0.05) !important;">
                                <i class="bi bi-palette-fill text-primary fs-3"></i>
                            </div>
                            <div class="position-absolute bottom-0 end-0 translate-middle-x bg-white shadow-sm rounded-4 p-3 border animate-float" style="animation-delay: 2s; border-color: rgba(0,0,0,0.05) !important;">
                                <i class="bi bi-braces text-success fs-3"></i>
                            </div>
                        </div>

                        {{-- Floating Quote Minimalist --}}
                        <div class="mt-5 bg-dark text-white p-4 rounded-4 shadow-xl border-0 z-2 position-relative" style="max-width: 320px; margin-left: auto; margin-right: auto;">
                            <p class="fst-italic mb-2 small opacity-75">"Innovation distinguishes between a leader and a follower."</p>
                            <div class="d-flex align-items-center gap-2 justify-content-center">
                                <div style="width: 20px; height: 2px; background: var(--sharesa-green);"></div>
                                <span class="small fw-bold tracking-widest text-uppercase" style="font-size: 0.65rem;">Khairan Noor F.</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- SECTION 2: VISION & MISSION --}}
    <section class="py-5 text-white position-relative" style="background-color: var(--sharesa-dark);">
        <div class="container py-5 position-relative z-1">
            <div class="row g-5 align-items-center">
                {{-- Vision --}}
                <div class="col-lg-5 border-end border-secondary border-opacity-25 pe-lg-5">
                    <div class="mb-4">
                        <span class="text-success text-uppercase fw-bold small ls-1">The Goal</span>
                        <h2 class="fw-bold mb-4 display-6">{{ __('messages.vision_title') }}</h2>
                        <p class="text-white-50 fs-5 lh-base fst-italic">
                            "{{ __('messages.vision_desc') }}"
                        </p>
                    </div>
                </div>

                {{-- Mission --}}
                <div class="col-lg-7 ps-lg-5">
                    <span class="text-success text-uppercase fw-bold small ls-1">The Path</span>
                    <h2 class="fw-bold mb-4 display-6">{{ __('messages.mission_title') }}</h2>
                    <div class="d-grid gap-4">
                        <div class="d-flex bg-white bg-opacity-10 p-3 rounded-3 border border-white border-opacity-10 hover-light">
                            <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                            <span class="fs-5">{{ __('messages.mission_1') }}</span>
                        </div>
                        <div class="d-flex bg-white bg-opacity-10 p-3 rounded-3 border border-white border-opacity-10 hover-light">
                            <i class="bi bi-people-fill text-success me-3 fs-4"></i>
                            <span class="fs-5">{{ __('messages.mission_2') }}</span>
                        </div>
                        <div class="d-flex bg-white bg-opacity-10 p-3 rounded-3 border border-white border-opacity-10 hover-light">
                            <i class="bi bi-lightbulb-fill text-success me-3 fs-4"></i>
                            <span class="fs-5">{{ __('messages.mission_3') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 3: CORE VALUES --}}
    <section class="py-5 bg-light">
        <div class="container py-5 text-center">
            <h2 class="fw-bold mb-2" style="color: var(--sharesa-dark);">{{ __('messages.values_title') }}</h2>
            <div style="width: 60px; height: 4px; background-color: var(--sharesa-green); margin: 20px auto 50px;"></div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="bg-white p-5 rounded-4 shadow-sm h-100 border-top border-4 border-warning hover-card">
                        <div class="mb-4 bg-warning bg-opacity-10 rounded-circle d-inline-flex p-3">
                            <i class="bi bi-lightbulb-fill fs-1 text-warning"></i>
                        </div>
                        <h4 class="fw-bold mb-3">{{ __('messages.val_1_title') }}</h4>
                        <p class="text-muted">{{ __('messages.val_1_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white p-5 rounded-4 shadow-sm h-100 border-top border-4 border-primary hover-card">
                        <div class="mb-4 bg-primary bg-opacity-10 rounded-circle d-inline-flex p-3">
                            <i class="bi bi-shield-check fs-1 text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">{{ __('messages.val_2_title') }}</h4>
                        <p class="text-muted">{{ __('messages.val_2_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white p-5 rounded-4 shadow-sm h-100 border-top border-4 border-danger hover-card">
                        <div class="mb-4 bg-danger bg-opacity-10 rounded-circle d-inline-flex p-3">
                            <i class="bi bi-heart-fill fs-1 text-danger"></i>
                        </div>
                        <h4 class="fw-bold mb-3">{{ __('messages.val_3_title') }}</h4>
                        <p class="text-muted">{{ __('messages.val_3_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 4: OUR TEAM (NEW) --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <span class="text-uppercase fw-bold text-success small tracking-widest">THE SQUAD</span>
                <h2 class="fw-bold display-6 mt-2">{{ __('messages.team_title') }}</h2>
                <p class="text-muted">{{ __('messages.team_desc') }}</p>
            </div>

            <div class="row g-4 justify-content-center">
                {{-- Member 1 --}}
                <div class="col-md-4 col-lg-3">
                    <div class="card border-0 rounded-4 overflow-hidden group text-center">
                        <div class="position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1374&auto=format&fit=crop" class="card-img-top hover-scale" alt="CEO">
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 translate-y-100 group-hover-visible transition-all">
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" class="text-white"><i class="bi bi-twitter-x"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-light">
                            <h5 class="fw-bold mb-1">Khairan Noor</h5>
                            <small class="text-muted text-uppercase" style="font-size: 0.75rem;">{{ __('messages.team_1_role') }}</small>
                        </div>
                    </div>
                </div>
                
                {{-- Member 2 --}}
               
    </section>

    {{-- SECTION 5: MILESTONES (NEW) --}}
    <section class="py-5" style="background-color: var(--sharesa-dark);">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-white">{{ __('messages.milestone_title') }}</h2>
            </div>

            <div class="position-relative">
                {{-- Line --}}
                <div class="position-absolute top-50 start-0 w-100 border-top border-secondary opacity-50 d-none d-md-block" style="z-index: 0;"></div>

                <div class="row g-4 text-center position-relative z-1">
                    {{-- 2024 --}}
                    <div class="col-md-4">
                        <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow border border-4 border-dark" style="width: 20px; height: 20px;"></div>
                        <h2 class="display-4 fw-bold text-white opacity-25">{{ __('messages.mile_1_year') }}</h2>
                        <h5 class="fw-bold text-white mt-3">Inception</h5>
                        <p class="text-white-50 small px-4">{{ __('messages.mile_1_desc') }}</p>
                    </div>

                    {{-- 2025 --}}
                    <div class="col-md-4">
                        <div class="bg-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow border border-4 border-white" style="width: 30px; height: 30px;"></div>
                        <h2 class="display-4 fw-bold text-success">{{ __('messages.mile_2_year') }}</h2>
                        <h5 class="fw-bold text-white mt-3">Rapid Growth</h5>
                        <p class="text-white-50 small px-4">{{ __('messages.mile_2_desc') }}</p>
                    </div>

                    {{-- 2026 --}}
                    <div class="col-md-4">
                        <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow border border-4 border-dark" style="width: 20px; height: 20px;"></div>
                        <h2 class="display-4 fw-bold text-white opacity-25">{{ __('messages.mile_3_year') }}</h2>
                        <h5 class="fw-bold text-white mt-3">Global Reach</h5>
                        <p class="text-white-50 small px-4">{{ __('messages.mile_3_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
<style>
    .hover-scale { transition: 0.5s ease; }
    .hover-scale:hover { transform: scale(1.05); }

    .hover-card { transition: 0.3s ease; }
    .hover-card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important; }

    .hover-light { transition: 0.3s; }
    .hover-light:hover { background-color: rgba(255,255,255,0.2) !important; }

    /* Animation Float */
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }
    .animate-float { animation: float 6s ease-in-out infinite; }
</style>
@endsection