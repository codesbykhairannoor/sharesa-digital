@extends('layouts.app')

@section('title', __('messages.home'))

@section('content')

    {{-- ========================================== --}}
    {{-- SECTION 1: HERO SECTION (Modern & Clean)   --}}
    {{-- ========================================== --}}
    {{-- Margin negatif di top untuk kompensasi navbar fixed padding --}}
    {{-- ========================================== --}}
    {{-- SECTION 1: HERO SECTION (Modern & Clean)   --}}
    {{-- ========================================== --}}
    <section class="position-relative overflow-hidden" style="background-color: var(--sharesa-dark); padding-top: 150px; padding-bottom: 100px; margin-top: -85px;">
        
        {{-- Glassmorphism Glow Decoration --}}
        <div class="position-absolute top-0 end-0 translate-middle opacity-25 pe-none" 
             style="width: 500px; height: 500px; background: radial-gradient(circle, var(--sharesa-green) 0%, transparent 70%); filter: blur(80px); z-index: 0;">
        </div>

        <div class="container position-relative z-1">
            <div class="row align-items-center">
                <div class="col-lg-7 text-white">
                   <div class="d-inline-flex align-items-center rounded-pill px-3 py-1 mb-4 border border-white border-opacity-25 bg-white bg-opacity-10 shadow-sm">
    <span class="badge rounded-pill me-2 fw-bolder" style="background-color: var(--sharesa-green); color: var(--sharesa-dark);">NEW</span>
    {{-- Tambahkan class text-white atau style color eksplisit --}}
    <small class="fw-bold tracking-wide text-white">{{ __('messages.hero_badge') }}</small>
</div>
                    <h1 class="display-3 fw-bold mb-4 leading-tight">
                        {{ __('messages.hero_title') }}
                    </h1>
                    <p class="lead mb-5 text-white-50 col-lg-10" style="font-size: 1.25rem; line-height: 1.8;">
                        {{ __('messages.hero_desc') }}
                    </p>
                    <div class="d-flex gap-3 flex-column flex-sm-row">
                        <a href="{{ url('/contact') }}" class="btn btn-sharesa-primary btn-lg px-5 py-3 shadow-lg hover-up fw-bold">
                            {{ __('messages.hero_cta') }}
                        </a>
                        <a href="{{ url('/portfolios') }}" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill hover-up">
                            {{ __('messages.hero_secondary') }}
                        </a>
                    </div>
                    
                    {{-- Stats Mini --}}
                    <div class="row mt-5 pt-4 border-top border-white border-opacity-10 g-4">
                        <div class="col-auto me-4">
                            <h3 class="fw-bold text-white mb-0">50+</h3>
                            <small class="text-white-50 text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">Projects</small>
                        </div>
                        <div class="col-auto me-4">
                            <h3 class="fw-bold mb-0" style="color: var(--sharesa-green);">30+</h3>
                            <small class="text-white-50 text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">Clients</small>
                        </div>
                        <div class="col-auto">
                            <h3 class="fw-bold text-white mb-0">4.9</h3>
                            <small class="text-white-50 text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">Rating</small>
                        </div>
                    </div>
                </div>
                
                {{-- Hero Illustration (Right) --}}
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="position-relative">
                        {{-- Background Glow for Image --}}
                        <div class="position-absolute top-50 start-50 translate-middle w-100 h-100 opacity-20" 
                             style="background: var(--sharesa-green); filter: blur(100px); border-radius: 50%;"></div>
                        
                        {{-- Main Image dengan Frame Mewah --}}
                        <div class="p-2 rounded-4 bg-white bg-opacity-10 border border-white border-opacity-10 shadow-2xl overflow-hidden shadow-lg" style="transform: perspective(1000px) rotateY(-5deg) rotateX(5deg);">
                             <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop" 
                                  alt="Digital Experience" 
                                  class="img-fluid rounded-3 shadow-sm">
                        </div>
                        
                        {{-- Floating Activity Badge --}}
                        <div class="position-absolute top-0 start-0 bg-white p-3 rounded-4 shadow-xl m-n3 animate-float d-flex align-items-center gap-3" style="max-width: 220px; z-index: 2;">
                            <div class="bg-success bg-opacity-10 p-2 rounded-circle">
                                <i class="bi bi- lightning-charge-fill text-success"></i>
                            </div>
                            <div>
                                <h6 class="text-dark fw-bold mb-0 small">High Performance</h6>
                                <small class="text-muted" style="font-size: 0.65rem;">Optimized for speed</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 2: WHY CHOOSE US (Features)        --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-6 mb-3" style="color: var(--sharesa-dark);">{{ __('messages.why_title') }}</h2>
                <p class="text-muted col-lg-6 mx-auto">{{ __('messages.why_subtitle') }}</p>
                <div class="mt-4 mx-auto bg-success rounded-pill" style="width: 60px; height: 4px;"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 border border-light bg-light rounded-4 h-100 text-center hover-card">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mb-4" style="width: 80px; height: 80px;">
                            <i class="bi bi-bezier2 fs-2 text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">{{ __('messages.why_1_title') }}</h4>
                        <p class="text-muted small">{{ __('messages.why_1_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border border-light bg-white shadow-lg rounded-4 h-100 text-center hover-card transform-scale">
                        <div class="d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 rounded-circle mb-4" style="width: 80px; height: 80px;">
                            <i class="bi bi-code-slash fs-2 text-success"></i>
                        </div>
                        <h4 class="fw-bold mb-3">{{ __('messages.why_2_title') }}</h4>
                        <p class="text-muted small">{{ __('messages.why_2_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border border-light bg-light rounded-4 h-100 text-center hover-card">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mb-4" style="width: 80px; height: 80px;">
                            <i class="bi bi-rocket-takeoff fs-2 text-danger"></i>
                        </div>
                        <h4 class="fw-bold mb-3">{{ __('messages.why_3_title') }}</h4>
                        <p class="text-muted small">{{ __('messages.why_3_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 3: FEATURED WORKS (Dynamic DB)     --}}
    {{-- ========================================== --}}
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container py-5">
            {{-- Header Section --}}
            <div class="d-flex justify-content-between align-items-end mb-5">
                <div>
                    <span class="text-uppercase fw-bold text-success small tracking-widest">PORTFOLIO</span>
                    <h2 class="fw-bold display-6 mb-0 mt-2" style="color: var(--sharesa-dark);">{{ __('messages.featured_title') }}</h2>
                </div>
                <div class="d-none d-md-block">
                    <a href="{{ url('/portfolios') }}" class="btn btn-outline-dark rounded-pill px-4 fw-bold hover-scale">
                        View All Works <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <div class="row g-4">
                {{-- LOOPING DATA DARI DATABASE (CUMA 2 ITEM) --}}
                @forelse($featured_portfolios as $project)
                    <div class="col-md-6">
                        <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 group hover-card">
                            
                            {{-- Wrapper Gambar --}}
                            <div class="position-relative overflow-hidden">
                                {{-- Cek Gambar --}}
                                <img src="{{ $project->image ? asset('storage/' . $project->image) : 'https://placehold.co/800x600/1e2a39/00ff8c?text=Sharesa+Project' }}" 
                                     class="card-img-top transition-transform duration-500" 
                                     alt="{{ $project->title }}" 
                                     style="height: 350px; object-fit: cover;">
                                
                                {{-- Badge Kategori --}}
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge bg-white text-dark shadow-sm border px-3 py-2 rounded-pill fw-bold">
                                        {{ $project->category }}
                                    </span>
                                </div>
                            </div>

                            <div class="card-body p-4 bg-white d-flex flex-column">
                                <h4 class="fw-bold mb-1 text-dark">{{ $project->title }}</h4>
                                
                                {{-- Client Name (Jika ada) --}}
                                @if($project->client_name)
                                    <small class="text-muted mb-2 d-block">
                                        <i class="bi bi-briefcase me-1 text-success"></i> {{ $project->client_name }}
                                    </small>
                                @endif

                                {{-- Deskripsi Singkat --}}
                                <p class="text-secondary small mb-4 mt-2" style="line-height: 1.5;">
                                    {{ Str::limit($project->description, 100) }}
                                </p>

                                {{-- Tombol View Project (Fake Link) --}}
                                <div class="mt-auto pt-3 border-top">
                                    <a href="#" class="text-decoration-none fw-bold text-dark d-flex align-items-center">
                                        View Case Study <i class="bi bi-arrow-right ms-2 text-success"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    {{-- STATE: BELUM ADA DATA SAMA SEKALI --}}
                    <div class="col-12 text-center py-5">
                        <div class="bg-white p-5 rounded-4 border border-dashed shadow-sm">
                            <i class="bi bi-cone-striped display-4 text-warning mb-3 d-block"></i>
                            <h5 class="fw-bold text-muted">Projects Coming Soon!</h5>
                            <p class="text-secondary">We are preparing our best case studies for you.</p>
                        </div>
                    </div>
                @endforelse
            </div>
            
            {{-- Tombol Mobile Only --}}
            <div class="text-center mt-4 d-md-none">
                <a href="{{ url('/portfolios') }}" class="btn btn-outline-dark rounded-pill px-4 fw-bold w-100">View All Works</a>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 4: TESTIMONIALS (Trust)            --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-6 mb-2">{{ __('messages.testi_title') }}</h2>
                <p class="text-muted">{{ __('messages.testi_desc') }}</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-4 bg-light rounded-4 h-100 position-relative">
                                <i class="bi bi-quote fs-1 text-success opacity-25 position-absolute top-0 end-0 m-3"></i>
                                <p class="fst-italic mb-4 text-muted">"{{ __('messages.testi_1_quote') }}"</p>
                                <div class="d-flex align-items-center">
                                    <div class="bg-dark rounded-circle me-3" style="width: 40px; height: 40px;"></div>
                                    <div>
                                        <h6 class="fw-bold mb-0 small">{{ __('messages.testi_1_author') }}</h6>
                                        <div class="text-warning small">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 bg-light rounded-4 h-100 position-relative">
                                <i class="bi bi-quote fs-1 text-success opacity-25 position-absolute top-0 end-0 m-3"></i>
                                <p class="fst-italic mb-4 text-muted">"{{ __('messages.testi_2_quote') }}"</p>
                                <div class="d-flex align-items-center">
                                    <div class="bg-dark rounded-circle me-3" style="width: 40px; height: 40px;"></div>
                                    <div>
                                        <h6 class="fw-bold mb-0 small">{{ __('messages.testi_2_author') }}</h6>
                                        <div class="text-warning small">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 5: CTA (Ready to Start?)           --}}
    {{-- ========================================== --}}
    <section class="py-5" style="background-color: #1e2a39;">
        <div class="container py-4">
            <div class="rounded-5 p-5 text-center text-white position-relative overflow-hidden border border-white border-opacity-10" 
                 style="background: radial-gradient(circle at center, #2c3e50 0%, #1e2a39 100%);">
                
                {{-- Decoration --}}
                <div class="position-absolute top-50 start-0 translate-middle-y opacity-25 p-3 d-none d-md-block">
                    <i class="bi bi-lightning-charge-fill display-1 text-warning"></i>
                </div>
                <div class="position-absolute top-50 end-0 translate-middle-y opacity-25 p-3 d-none d-md-block">
                    <i class="bi bi-code-square display-1 text-success"></i>
                </div>

                <div class="position-relative z-1 col-lg-8 mx-auto">
                    <h2 class="fw-bold display-5 mb-3">{{ __('messages.cta_title') }}</h2>
                    <p class="lead mb-5 text-white-50">{{ __('messages.cta_desc') }}</p>
                    <a href="{{ url('/contact') }}" class="btn btn-sharesa-primary btn-lg rounded-pill px-5 py-3 shadow-lg hover-scale fw-bold text-uppercase tracking-widest">
                        {{ __('messages.cta_btn') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
<style>
    /* Hover Effects */
    .hover-up { transition: transform 0.3s ease; }
    .hover-up:hover { transform: translateY(-5px); }
    
    .hover-scale { transition: transform 0.3s ease; }
    .hover-scale:hover { transform: scale(1.05); }

    .hover-card { transition: all 0.3s ease; }
    .hover-card:hover { transform: translateY(-10px); box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important; border-color: transparent !important; }

    /* Animation Float */
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }
    .animate-float { animation: float 6s ease-in-out infinite; }
</style>
@endsection