@extends('layouts.app')

@section('title', __('messages.home'))

@section('content')

    {{-- ========================================== --}}
    {{-- SECTION 1: HERO SECTION                    --}}
    {{-- ========================================== --}}
    <section class="position-relative overflow-hidden"
        style="background-color: var(--sharesa-dark); padding-top: 130px; padding-bottom: 100px; margin-top: -85px;">

        {{-- Background grid pattern --}}
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-5 pe-none" style="background-image: linear-gradient(rgba(0,255,140,0.15) 1px, transparent 1px), linear-gradient(to right, rgba(0,255,140,0.15) 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Green glow --}}
        <div class="position-absolute top-0 end-0 pe-none"
            style="width: 600px; height: 600px; background: radial-gradient(circle, rgba(0,255,140,0.12) 0%, transparent 70%); filter: blur(60px); z-index: 0;">
        </div>

        <div class="container position-relative" style="z-index: 1;">
            <div class="row align-items-center g-5">

                {{-- LEFT: Copy --}}
                <div class="col-lg-6 text-white" data-aos="fade-right" data-aos-duration="800">

                    {{-- Agency Badge --}}
                    <div class="d-inline-flex align-items-center rounded-pill px-3 py-2 mb-4 border border-white border-opacity-10 bg-white bg-opacity-5">
                        <span class="rounded-circle me-2 d-inline-flex align-items-center justify-content-center" style="width:20px; height:20px; background: var(--sharesa-green);">
                            <i class="bi bi-lightning-charge-fill" style="color: var(--sharesa-dark); font-size: 0.6rem;"></i>
                        </span>
                        <small class="fw-bold tracking-wide text-white" style="letter-spacing: 1px; font-size: 0.75rem;">{{ __('messages.hero_badge') }}</small>
                    </div>

                    {{-- Title --}}
                    <h1 class="fw-bold mb-4" style="font-size: clamp(2.2rem, 5vw, 3.5rem); line-height: 1.12; letter-spacing: -1px;">
                        {{ __('messages.hero_title') }}
                    </h1>

                    {{-- Description --}}
                    <p class="mb-5 text-white-50 col-lg-11" style="font-size: 1.1rem; line-height: 1.85;">
                        {{ __('messages.hero_desc') }}
                    </p>

                    {{-- Buttons --}}
                    <div class="d-flex gap-3 flex-column flex-sm-row mb-5">
                        <a href="#" class="btn btn-sharesa-primary btn-lg px-5 py-3 shadow-lg fw-bold wa-track"
                            data-msg="Halo Sharesa, saya ingin tanya-tanya tentang transformasi digital bisnis saya."
                            style="box-shadow: 0 10px 30px rgba(0,255,140,0.3) !important;">
                            {{ __('messages.hero_cta') }}
                        </a>
                        <a href="{{ url('/portfolios') }}"
                            class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-medium"
                            style="border-color: rgba(255,255,255,0.25); transition: all 0.3s;">
                            {{ __('messages.hero_secondary') }}
                        </a>
                    </div>

                    {{-- Stats --}}
                    <div class="row stats-section g-0 pt-4" style="border-top: 1px solid rgba(255,255,255,0.1);">
                        <div class="col-auto me-5">
                            <h2 class="fw-black text-white mb-1" style="font-size: 2.5rem;">
                                <span class="counter-num" data-count="50">0</span><span style="color: var(--sharesa-green);">+</span>
                            </h2>
                            <p class="text-white-50 fw-semibold mb-0" style="font-size: 0.8rem; letter-spacing: 1px;">
                                {{ __('messages.stats_projects') }}
                            </p>
                        </div>
                        <div class="col-auto me-5">
                            <h2 class="fw-black mb-1" style="font-size: 2.5rem; color: var(--sharesa-green);">
                                <span class="counter-num" data-count="30">0</span><span class="text-white">+</span>
                            </h2>
                            <p class="text-white-50 fw-semibold mb-0" style="font-size: 0.8rem; letter-spacing: 1px;">
                                {{ __('messages.stats_clients') }}
                            </p>
                        </div>
                        <div class="col-auto">
                            <h2 class="fw-black text-white mb-1" style="font-size: 2.5rem;">
                                4.9<span style="color: #ffc107; font-size: 1.5rem; margin-left: 4px;">★</span>
                            </h2>
                            <p class="text-white-50 fw-semibold mb-0" style="font-size: 0.8rem; letter-spacing: 1px;">
                                {{ __('messages.stats_rating') }}
                            </p>
                        </div>
                    </div>
                </div>

                {{-- RIGHT: Browser Mockup --}}
                <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                    <div class="position-relative" style="width: 100%; max-width: 500px;">

                        {{-- Glow behind mockup --}}
                        <div class="position-absolute top-50 start-50 translate-middle rounded-circle" style="width: 350px; height: 350px; background: rgba(0,255,140,0.12); filter: blur(80px); z-index: 0;"></div>

                        {{-- Browser Mockup (CSS-only frame) --}}
                        <div class="position-relative" style="z-index: 1; border-radius: 16px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.4), 0 0 0 1px rgba(255,255,255,0.1);">
                            {{-- Browser Chrome Bar --}}
                            <div class="d-flex align-items-center gap-2 px-3" style="background: #2d3748; height: 38px;">
                                <div style="width: 12px; height: 12px; border-radius: 50%; background: #ff5f57;"></div>
                                <div style="width: 12px; height: 12px; border-radius: 50%; background: #febc2e;"></div>
                                <div style="width: 12px; height: 12px; border-radius: 50%; background: #28c840;"></div>
                                <div class="mx-auto rounded-pill d-flex align-items-center px-3" style="background: rgba(255,255,255,0.08); height: 22px; min-width: 200px;">
                                    <i class="bi bi-lock-fill text-white-50 me-2" style="font-size: 0.6rem;"></i>
                                    <span class="text-white-50" style="font-size: 0.65rem;">sharesa.id</span>
                                </div>
                            </div>
                            {{-- Screenshot --}}
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop"
                                alt="Digital Experience" class="d-block w-100"
                                style="height: 300px; object-fit: cover;">
                        </div>

                        {{-- Floating Badge 1 --}}
                        <div class="position-absolute bg-white p-3 rounded-4 shadow-lg d-flex align-items-center gap-2"
                            style="top: -15px; left: -20px; z-index: 2; animation: floatBadge 4s ease-in-out infinite;">
                            <div class="bg-success bg-opacity-15 p-2 rounded-circle">
                                <i class="bi bi-lightning-charge-fill text-success" style="font-size: 0.9rem;"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-dark small mb-0" style="font-size: 0.75rem; line-height: 1.2;">High Performance</div>
                                <div class="text-muted" style="font-size: 0.6rem;">Optimized for speed</div>
                            </div>
                        </div>

                        {{-- Floating Badge 2 --}}
                        <div class="position-absolute bg-white p-3 rounded-4 shadow-lg d-flex align-items-center gap-2"
                            style="bottom: -15px; right: -20px; z-index: 2; animation: floatBadge 4s ease-in-out infinite 2s;">
                            <div class="bg-warning bg-opacity-15 p-2 rounded-circle">
                                <i class="bi bi-star-fill text-warning" style="font-size: 0.9rem;"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-dark small mb-0" style="font-size: 0.75rem; line-height: 1.2;">4.9 Rated Agency</div>
                                <div class="text-muted" style="font-size: 0.6rem;">30+ happy clients</div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Trusted by bar --}}
    <div class="py-4" style="background: rgba(30,42,57,0.95); border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-center gap-4 justify-content-center">
                <span class="text-white-50 fw-bold section-label" style="white-space: nowrap;">Trusted By</span>
                <div class="vr d-none d-md-block" style="height: 20px; background: rgba(255,255,255,0.15);"></div>
                <div class="d-flex gap-4 flex-wrap justify-content-center">
                    @foreach(['E-Commerce', 'F&B Brands', 'Healthcare', 'Startup', 'Property', 'Education'] as $sector)
                        <span class="text-white fw-semibold" style="opacity: 0.4; font-size: 0.9rem; letter-spacing: 0.5px;">{{ $sector }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- ========================================== --}}
    {{-- SECTION 2: WHY CHOOSE US                   --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-label text-success">Why Us</span>
                <h2 class="fw-bold display-6 mt-2 mb-3" style="color: var(--sharesa-dark); letter-spacing: -0.5px;">
                    {{ __('messages.why_title') }}
                </h2>
                <p class="text-muted col-lg-6 mx-auto">{{ __('messages.why_subtitle') }}</p>
                <div class="mt-4 mx-auto rounded-pill" style="width: 50px; height: 3px; background: var(--sharesa-green);"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="p-5 border border-light bg-light rounded-4 h-100 text-center why-card position-relative overflow-hidden">
                        <div class="why-card-accent position-absolute top-0 start-0 w-100" style="height: 3px; background: linear-gradient(90deg, #6366f1, #8b5cf6);"></div>
                        <div class="d-inline-flex align-items-center justify-content-center mb-4 rounded-3" style="width: 72px; height: 72px; background: rgba(99,102,241,0.1);">
                            <i class="bi bi-bezier2 fs-2" style="color: #6366f1;"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-size: 1.1rem;">{{ __('messages.why_1_title') }}</h4>
                        <p class="text-muted small mb-0">{{ __('messages.why_1_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-5 bg-white shadow-lg rounded-4 h-100 text-center why-card position-relative overflow-hidden" style="border: 1px solid rgba(0,255,140,0.2);">
                        <div class="why-card-accent position-absolute top-0 start-0 w-100" style="height: 3px; background: linear-gradient(90deg, var(--sharesa-green), var(--sharesa-green-dim));"></div>
                        <div class="d-inline-flex align-items-center justify-content-center mb-4 rounded-3" style="width: 72px; height: 72px; background: rgba(0,255,140,0.1);">
                            <i class="bi bi-code-slash fs-2" style="color: var(--sharesa-green-dim);"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-size: 1.1rem;">{{ __('messages.why_2_title') }}</h4>
                        <p class="text-muted small mb-0">{{ __('messages.why_2_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-5 border border-light bg-light rounded-4 h-100 text-center why-card position-relative overflow-hidden">
                        <div class="why-card-accent position-absolute top-0 start-0 w-100" style="height: 3px; background: linear-gradient(90deg, #f87171, #ef4444);"></div>
                        <div class="d-inline-flex align-items-center justify-content-center mb-4 rounded-3" style="width: 72px; height: 72px; background: rgba(248,113,113,0.1);">
                            <i class="bi bi-rocket-takeoff fs-2 text-danger"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-size: 1.1rem;">{{ __('messages.why_3_title') }}</h4>
                        <p class="text-muted small mb-0">{{ __('messages.why_3_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 3: FEATURED WORKS                  --}}
    {{-- ========================================== --}}
    <section class="py-5" style="background-color: #f1f5f9;">
        <div class="container py-5">
            <div class="d-flex justify-content-between align-items-end mb-5" data-aos="fade-up">
                <div>
                    <span class="section-label text-success">Portfolio</span>
                    <h2 class="fw-bold display-6 mb-0 mt-2" style="color: var(--sharesa-dark); letter-spacing: -0.5px;">
                        {{ __('messages.featured_title') }}
                    </h2>
                </div>
                <div class="d-none d-md-block">
                    <a href="{{ url('/portfolios') }}" class="btn btn-outline-dark rounded-pill px-4 fw-bold" style="transition: 0.3s;">
                        View All Works <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <div class="row g-4">
                @forelse($featured_portfolios as $project)
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="card border-0 rounded-4 overflow-hidden h-100 featured-card">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ $project->image ?? 'https://placehold.co/800x600/1e2a39/00ff8c?text=Sharesa+Project' }}"
                                    class="card-img-top featured-img" alt="{{ $project->title }}"
                                    style="height: 340px; object-fit: cover; transition: transform 0.6s cubic-bezier(0.4,0,0.2,1);">
                                {{-- Hover overlay --}}
                                <div class="featured-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end p-4"
                                    style="background: linear-gradient(to top, rgba(30,42,57,0.85) 0%, transparent 60%); opacity: 0; transition: opacity 0.4s;">
                                    <a href="#" class="btn btn-sm text-dark fw-bold rounded-pill px-3" style="background: var(--sharesa-green); font-size: 0.8rem;">
                                        View Case Study <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge bg-white text-dark shadow-sm border px-3 py-2 rounded-pill fw-bold">
                                        {{ $project->category }}
                                    </span>
                                </div>
                            </div>
                            <div class="card-body p-4 bg-white d-flex flex-column">
                                <h4 class="fw-bold mb-1 text-dark" style="font-size: 1.15rem;">{{ $project->title }}</h4>
                                @if($project->client_name)
                                    <small class="text-muted mb-2 d-block">
                                        <i class="bi bi-briefcase me-1 text-success"></i> {{ $project->client_name }}
                                    </small>
                                @endif
                                <p class="text-secondary small mb-0 mt-2 flex-grow-1" style="line-height: 1.6;">
                                    {{ Str::limit($project->description, 110) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5" data-aos="fade-up">
                        <div class="bg-white p-5 rounded-4 border border-dashed shadow-sm d-inline-block">
                            <i class="bi bi-cone-striped display-4 text-warning mb-3 d-block"></i>
                            <h5 class="fw-bold text-muted">Projects Coming Soon!</h5>
                            <p class="text-secondary mb-0">We are preparing our best case studies for you.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-4 d-md-none">
                <a href="{{ url('/portfolios') }}" class="btn btn-outline-dark rounded-pill px-4 fw-bold w-100">View All Works</a>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 4: TESTIMONIALS                    --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-label text-success">Testimonials</span>
                <h2 class="fw-bold display-6 mt-2" style="letter-spacing: -0.5px;">{{ __('messages.testi_title') }}</h2>
                <p class="text-muted mt-2">{{ __('messages.testi_desc') }}</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4">
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="0">
                            <div class="p-4 rounded-4 h-100 position-relative testi-card" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                                <div class="position-absolute top-0 start-0 w-100 h-100 rounded-4" style="background: linear-gradient(135deg, rgba(0,255,140,0.04) 0%, transparent 100%); pointer-events: none;"></div>
                                <div style="font-size: 3.5rem; line-height: 1; color: var(--sharesa-green); opacity: 0.3; font-family: Georgia, serif; margin-bottom: -0.5rem;">"</div>
                                <p class="fst-italic mb-4 text-secondary" style="line-height: 1.75;">{{ __('messages.testi_1_quote') }}</p>
                                <div class="d-flex align-items-center gap-3 mt-auto">
                                    <img src="https://ui-avatars.com/api/?name=Client+A&background=1e2a39&color=00ff8c&bold=true&size=48"
                                        class="rounded-circle" width="44" height="44" alt="Client">
                                    <div>
                                        <h6 class="fw-bold mb-0 small" style="color: var(--sharesa-dark);">{{ __('messages.testi_1_author') }}</h6>
                                        <div class="text-warning small mt-1">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="p-4 rounded-4 h-100 position-relative testi-card" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                                <div class="position-absolute top-0 start-0 w-100 h-100 rounded-4" style="background: linear-gradient(135deg, rgba(0,255,140,0.04) 0%, transparent 100%); pointer-events: none;"></div>
                                <div style="font-size: 3.5rem; line-height: 1; color: var(--sharesa-green); opacity: 0.3; font-family: Georgia, serif; margin-bottom: -0.5rem;">"</div>
                                <p class="fst-italic mb-4 text-secondary" style="line-height: 1.75;">{{ __('messages.testi_2_quote') }}</p>
                                <div class="d-flex align-items-center gap-3 mt-auto">
                                    <img src="https://ui-avatars.com/api/?name=Client+B&background=00ff8c&color=1e2a39&bold=true&size=48"
                                        class="rounded-circle" width="44" height="44" alt="Client">
                                    <div>
                                        <h6 class="fw-bold mb-0 small" style="color: var(--sharesa-dark);">{{ __('messages.testi_2_author') }}</h6>
                                        <div class="text-warning small mt-1">
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
    {{-- SECTION 5: CTA                             --}}
    {{-- ========================================== --}}
    <section class="py-5 position-relative overflow-hidden" style="background-color: var(--sharesa-dark);">
        {{-- Animated dots decoration --}}
        <div class="position-absolute top-0 start-0 w-100 h-100 pe-none" style="background-image: radial-gradient(rgba(0,255,140,0.12) 1px, transparent 1px); background-size: 30px 30px;"></div>

        <div class="container py-4 position-relative" style="z-index: 1;">
            <div class="rounded-5 p-5 text-center text-white position-relative overflow-hidden"
                style="background: linear-gradient(135deg, #243447 0%, #1e2a39 100%); border: 1px solid rgba(0,255,140,0.15);">

                <div class="position-absolute top-50 start-0 translate-middle-y opacity-10 p-3 d-none d-md-block">
                    <i class="bi bi-lightning-charge-fill" style="font-size: 7rem; color: var(--sharesa-green);"></i>
                </div>
                <div class="position-absolute top-50 end-0 translate-middle-y opacity-10 p-3 d-none d-md-block">
                    <i class="bi bi-code-square" style="font-size: 7rem; color: var(--sharesa-green);"></i>
                </div>

                <div class="position-relative col-lg-7 mx-auto" data-aos="fade-up">
                    <span class="section-label text-success d-block mb-3">Let's Build Together</span>
                    <h2 class="fw-bold mb-3" style="font-size: clamp(1.8rem, 4vw, 2.8rem); letter-spacing: -1px;">{{ __('messages.cta_title') }}</h2>
                    <p class="mb-5 text-white-50" style="font-size: 1.05rem; line-height: 1.7;">{{ __('messages.cta_desc') }}</p>
                    <a href="#"
                        class="btn btn-sharesa-primary btn-lg rounded-pill px-5 py-3 shadow-lg fw-bold wa-track cta-pulse-btn"
                        data-msg="Halo Sharesa, saya siap buat project besar. Bisa kirimkan pricelist-nya?"
                        style="box-shadow: 0 0 40px rgba(0,255,140,0.35) !important;">
                        {{ __('messages.cta_btn') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 6: FAQ                             --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold display-6">{{ __('messages.faq_title') }}</h2>
            </div>
            <div class="accordion" id="homeFaq" data-aos="fade-up" data-aos-delay="80">
                @for($i = 1; $i <= 7; $i++)
                    <div class="accordion-item border-0 mb-3 rounded-4" style="box-shadow: 0 4px 15px rgba(0,0,0,0.05); overflow: hidden;">
                        <h2 class="accordion-header">
                            <button class="accordion-button {{ $i > 1 ? 'collapsed' : '' }} fw-bold rounded-4 bg-white" type="button" 
                                data-bs-toggle="collapse" data-bs-target="#hfaq{{ $i }}" style="font-size: 1rem;">
                                {{ __('messages.home_faq_' . $i . '_q') }}
                            </button>
                        </h2>
                        <div id="hfaq{{ $i }}" class="accordion-collapse collapse {{ $i == 1 ? 'show' : '' }}" data-bs-parent="#homeFaq">
                            <div class="accordion-body text-secondary bg-white pt-0" style="line-height: 1.8; font-size: 0.95rem;">
                                {{ __('messages.home_faq_' . $i . '_a') }}
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

@endsection

@section('styles')
<style>
    /* Hero */
    @keyframes floatBadge {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    /* Why Cards */
    .why-card {
        transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: default;
    }
    .why-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08) !important;
    }

    /* Featured Cards */
    .featured-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    }
    .featured-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.12) !important; }
    .featured-card:hover .featured-img { transform: scale(1.06); }
    .featured-card:hover .featured-overlay { opacity: 1 !important; }

    /* Testimonial cards */
    .testi-card { transition: all 0.3s ease; }
    .testi-card:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(0,0,0,0.08); border-color: var(--sharesa-green) !important; }

    /* CTA pulse button */
    .cta-pulse-btn {
        animation: ctaPulse 3s ease-in-out infinite;
    }
    @keyframes ctaPulse {
        0%, 100% { box-shadow: 0 0 40px rgba(0,255,140,0.35) !important; }
        50% { box-shadow: 0 0 60px rgba(0,255,140,0.55) !important; }
    }
</style>
@endsection

@push('scripts')
<script>
    // ============================================
    // COUNTER ANIMATION (runs once on scroll)
    // ============================================
    function animateCounter(el, target, duration = 1800) {
        const startTime = performance.now();

        function update(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(eased * target);
            if (progress < 1) requestAnimationFrame(update);
        }
        requestAnimationFrame(update);
    }

    const statsEl = document.querySelector('.stats-section');
    if (statsEl) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.querySelectorAll('.counter-num').forEach(num => {
                        animateCounter(num, parseInt(num.getAttribute('data-count')));
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        observer.observe(statsEl);
    }

    // WA tracking for home page buttons
    document.querySelectorAll('.wa-track:not(.wa-processed)').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            const msg = this.getAttribute('data-msg');
            const url = `https://wa.me/6287752458894?text=${encodeURIComponent(msg)}`;

            if (window.trackingService) {
                window.trackingService.track('Contact', {
                    value: 900000.00,
                    currency: 'IDR',
                    content_name: 'WhatsApp Button',
                    content_category: 'Direct Message'
                });
            }

            setTimeout(() => { window.open(url, '_blank'); }, 300);
        });
        btn.classList.add('wa-processed');
    });
</script>
@endpush