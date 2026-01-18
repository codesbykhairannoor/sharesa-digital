@extends('layouts.app')

@section('title', __('messages.about'))

@section('content')

    {{-- SECTION 1: HERO ABOUT --}}
    <section class="py-5 bg-white position-relative overflow-hidden">
        {{-- Background blobs --}}
        <div class="position-absolute top-0 end-0 p-5 opacity-10">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="400" height="400">
                <path fill="#00FF8C" d="M44.7,-76.4C58.9,-69.2,71.8,-59.1,81.6,-46.6C91.4,-34.1,98.1,-19.2,95.8,-5.3C93.5,8.6,82.2,21.5,70.9,32.3C59.6,43.1,48.3,51.8,36.5,58.8C24.7,65.8,12.4,71.1,-1.2,73.2C-14.8,75.3,-29.6,74.2,-42.6,67.6C-55.6,61,-66.8,48.9,-74.6,35.4C-82.4,21.9,-86.8,7,-84.6,-6.9C-82.4,-20.8,-73.6,-33.7,-63.1,-43.3C-52.6,-52.9,-40.4,-59.2,-28,-67.2C-15.6,-75.2,-3,-84.9,10.2,-86.6C23.4,-88.3,30.5,-103.5,44.7,-76.4Z" transform="translate(100 100)" />
            </svg>
        </div>

        <div class="container py-5 position-relative z-1">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="badge bg-light text-dark border px-3 py-2 mb-3 fw-bold tracking-widest text-uppercase">
                        {{ __('messages.about_title') }}
                    </span>
                    <h1 class="display-4 fw-bold mb-4" style="color: var(--sharesa-dark);">
                        {{ __('messages.about_hero_title') }}
                    </h1>
                    <p class="lead text-muted mb-5" style="line-height: 1.8;">
                        {{ __('messages.about_hero_desc') }}
                    </p>
                    
                    {{-- Stats Grid --}}
                    <div class="row g-4">
                        <div class="col-auto">
                            <div class="d-flex align-items-center">
                                <div class="display-5 fw-bold text-dark me-2">2024</div>
                                <div class="text-muted small text-uppercase lh-1">Founded<br>Year</div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="vr h-100 mx-3 opacity-25"></div>
                        </div>
                        <div class="col-auto">
                            <div class="d-flex align-items-center">
                                <div class="display-5 fw-bold text-dark me-2" style="color: var(--sharesa-green);">50+</div>
                                <div class="text-muted small text-uppercase lh-1">Projects<br>Done</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Hero Image --}}
                <div class="col-lg-6">
                    <div class="position-relative ps-lg-5">
                        <div class="position-absolute top-0 start-0 bg-success rounded-circle mt-n4 ms-4" style="width: 100px; height: 100px; opacity: 0.1;"></div>
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1470&auto=format&fit=crop" 
                             class="img-fluid rounded-4 shadow-lg position-relative z-1 hover-scale" alt="Our Team">
                        
                        {{-- Floating Card --}}
                        <div class="position-absolute bottom-0 start-0 bg-white p-4 rounded-4 shadow-lg m-4 border-start border-4 border-success d-none d-md-block z-2 animate-float" style="max-width: 300px;">
                            <i class="bi bi-quote fs-1 text-success opacity-50 position-absolute top-0 end-0 me-3"></i>
                            <p class="fst-italic mb-0 fw-medium small text-dark">"Innovation distinguishes between a leader and a follower."</p>
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