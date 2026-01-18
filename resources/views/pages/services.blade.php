@extends('layouts.app')

@section('title', __('messages.services'))

@section('content')

    {{-- ========================================== --}}
    {{-- SECTION 1: HEADER                          --}}
    {{-- ========================================== --}}
    <section class="py-5 text-center" style="background-color: #f8f9fa;">
        <div class="container pt-5 pb-4">
            <span class="text-uppercase fw-bold tracking-widest" style="color: var(--sharesa-green); letter-spacing: 2px;">
                {{ __('messages.services') }}
            </span>
            <h1 class="display-4 fw-bold mt-2 mb-3" style="color: var(--sharesa-dark);">
                {{ __('messages.serv_header_title') }}
            </h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                {{ __('messages.serv_header_desc') }}
            </p>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 2: SERVICES LIST                   --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-4">
                {{-- Service 1: UI/UX --}}
                <div class="col-md-6">
                    <div class="d-flex p-4 border rounded-4 h-100 hover-shadow transition-all bg-white">
                        <div class="flex-shrink-0 me-4">
                            <div class="rounded-3 d-flex align-items-center justify-content-center" 
                                 style="width: 60px; height: 60px; background-color: rgba(30, 42, 57, 0.1);">
                                <i class="bi bi-palette fs-2" style="color: var(--sharesa-dark);"></i>
                            </div>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-2">{{ __('messages.serv_ui_title') }}</h4>
                            <p class="text-muted mb-0">{{ __('messages.serv_ui_desc') }}</p>
                        </div>
                    </div>
                </div>

                {{-- Service 2: Web Dev --}}
                <div class="col-md-6">
                    <div class="d-flex p-4 border rounded-4 h-100 hover-shadow transition-all bg-white">
                        <div class="flex-shrink-0 me-4">
                            <div class="rounded-3 d-flex align-items-center justify-content-center" 
                                 style="width: 60px; height: 60px; background-color: rgba(0, 255, 140, 0.2);">
                                <i class="bi bi-code-square fs-2" style="color: #00cc70;"></i>
                            </div>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-2">{{ __('messages.serv_web_title') }}</h4>
                            <p class="text-muted mb-0">{{ __('messages.serv_web_desc') }}</p>
                        </div>
                    </div>
                </div>

                {{-- Service 3: Branding --}}
                <div class="col-md-6">
                    <div class="d-flex p-4 border rounded-4 h-100 hover-shadow transition-all bg-white">
                        <div class="flex-shrink-0 me-4">
                            <div class="rounded-3 d-flex align-items-center justify-content-center" 
                                 style="width: 60px; height: 60px; background-color: #fff3cd;">
                                <i class="bi bi-stars fs-2 text-warning"></i>
                            </div>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-2">{{ __('messages.serv_brand_title') }}</h4>
                            <p class="text-muted mb-0">{{ __('messages.serv_brand_desc') }}</p>
                        </div>
                    </div>
                </div>

                {{-- Service 4: SEO --}}
                <div class="col-md-6">
                    <div class="d-flex p-4 border rounded-4 h-100 hover-shadow transition-all bg-white">
                        <div class="flex-shrink-0 me-4">
                            <div class="rounded-3 d-flex align-items-center justify-content-center" 
                                 style="width: 60px; height: 60px; background-color: #cfe2ff;">
                                <i class="bi bi-graph-up-arrow fs-2 text-primary"></i>
                            </div>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-2">{{ __('messages.serv_seo_title') }}</h4>
                            <p class="text-muted mb-0">{{ __('messages.serv_seo_desc') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 3: WORKFLOW (TIMELINE)             --}}
    {{-- ========================================== --}}
    <section class="py-5" style="background-color: var(--sharesa-dark);">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-white">{{ __('messages.process_title') }}</h2>
                <div style="width: 60px; height: 4px; background-color: var(--sharesa-green); margin: 20px auto;"></div>
            </div>

            <div class="row text-center g-4 position-relative">
                
                {{-- Connecting Line (Desktop Only) --}}
                <div class="d-none d-md-block position-absolute top-50 start-0 w-100 border-top border-secondary opacity-50" style="z-index: 0;"></div>

                {{-- Step 1 --}}
                <div class="col-md-3 position-relative z-1">
                    <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow hover-scale" style="width: 80px; height: 80px; border: 4px solid var(--sharesa-green);">
                        <i class="bi bi-search fs-3 text-dark"></i>
                    </div>
                    <h5 class="text-white fw-bold mt-2">{{ __('messages.process_1') }}</h5>
                    <p class="text-white-50 small px-2">{{ __('messages.process_1_desc') }}</p>
                </div>

                {{-- Step 2 --}}
                <div class="col-md-3 position-relative z-1">
                    <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow hover-scale" style="width: 80px; height: 80px; border: 4px solid var(--sharesa-green);">
                        <i class="bi bi-pencil-square fs-3 text-dark"></i>
                    </div>
                    <h5 class="text-white fw-bold mt-2">{{ __('messages.process_2') }}</h5>
                    <p class="text-white-50 small px-2">{{ __('messages.process_2_desc') }}</p>
                </div>

                {{-- Step 3 --}}
                <div class="col-md-3 position-relative z-1">
                    <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow hover-scale" style="width: 80px; height: 80px; border: 4px solid var(--sharesa-green);">
                        <i class="bi bi-code-slash fs-3 text-dark"></i>
                    </div>
                    <h5 class="text-white fw-bold mt-2">{{ __('messages.process_3') }}</h5>
                    <p class="text-white-50 small px-2">{{ __('messages.process_3_desc') }}</p>
                </div>

                {{-- Step 4 --}}
                <div class="col-md-3 position-relative z-1">
                    <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow hover-scale" style="width: 80px; height: 80px; border: 4px solid var(--sharesa-green);">
                        <i class="bi bi-rocket-takeoff-fill fs-3 text-dark"></i>
                    </div>
                    <h5 class="text-white fw-bold mt-2">{{ __('messages.process_4') }}</h5>
                    <p class="text-white-50 small px-2">{{ __('messages.process_4_desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 4: TECH STACK (NEW)                --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">{{ __('messages.tech_title') }}</h2>
                <p class="text-muted">{{ __('messages.tech_desc') }}</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                @foreach(['Laravel', 'React', 'Vue', 'Bootstrap', 'Tailwind', 'Figma', 'MySQL', 'Github'] as $tech)
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="bg-white p-3 rounded-4 shadow-sm text-center border h-100 d-flex align-items-center justify-content-center hover-shadow">
                        <span class="fw-bold text-secondary">{{ $tech }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 5: PRICING PLANS (NEW)             --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">{{ __('messages.price_title') }}</h2>
                <p class="text-muted">{{ __('messages.price_desc') }}</p>
            </div>

            <div class="row g-4 justify-content-center">
                {{-- Starter --}}
                <div class="col-md-4">
                    <div class="card h-100 border rounded-4 hover-shadow overflow-hidden">
                        <div class="card-header bg-white border-0 py-4 text-center">
                            <h5 class="fw-bold text-muted text-uppercase small ls-1 mb-2">{{ __('messages.price_1_name') }}</h5>
                            <span class="badge bg-light text-dark mb-3">{{ __('messages.price_1_feat') }}</span>
                            <div class="display-6 fw-bold text-dark">$$$</div>
                        </div>
                        <div class="card-body px-4">
                            <ul class="list-unstyled mb-0 d-grid gap-2">
                                <li class="text-muted"><i class="bi bi-check-circle-fill text-success me-2"></i> Landing Page</li>
                                <li class="text-muted"><i class="bi bi-check-circle-fill text-success me-2"></i> Mobile Responsive</li>
                                <li class="text-muted"><i class="bi bi-check-circle-fill text-success me-2"></i> 1 Week Support</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0 pb-4 px-4 text-center">
                            <a href="{{ url('/contact') }}" class="btn btn-outline-dark rounded-pill w-100 fw-bold">{{ __('messages.price_btn') }}</a>
                        </div>
                    </div>
                </div>

                {{-- Business --}}
                <div class="col-md-4">
                    <div class="card h-100 border-0 rounded-4 shadow-lg overflow-hidden position-relative transform-scale">
                        <div class="position-absolute top-0 start-0 w-100 py-1 bg-success text-center text-white small fw-bold">RECOMMENDED</div>
                        <div class="card-header border-0 py-4 text-center text-white" style="background-color: var(--sharesa-dark);">
                            <h5 class="fw-bold text-white-50 text-uppercase small ls-1 mb-2 mt-2">{{ __('messages.price_2_name') }}</h5>
                            <span class="badge bg-success mb-3">{{ __('messages.price_2_feat') }}</span>
                            <div class="display-6 fw-bold text-white">$$$</div>
                        </div>
                        <div class="card-body px-4 bg-white">
                            <ul class="list-unstyled mb-0 d-grid gap-2">
                                <li class="text-dark"><i class="bi bi-check-circle-fill text-success me-2"></i> Dynamic Website</li>
                                <li class="text-dark"><i class="bi bi-check-circle-fill text-success me-2"></i> CMS / Admin Panel</li>
                                <li class="text-dark"><i class="bi bi-check-circle-fill text-success me-2"></i> SEO Optimization</li>
                                <li class="text-dark"><i class="bi bi-check-circle-fill text-success me-2"></i> 1 Month Support</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0 pb-4 px-4 text-center">
                            <a href="{{ url('/contact') }}" class="btn text-dark rounded-pill w-100 fw-bold shadow-sm" style="background-color: var(--sharesa-green);">{{ __('messages.price_btn') }}</a>
                        </div>
                    </div>
                </div>

                {{-- Enterprise --}}
                <div class="col-md-4">
                    <div class="card h-100 border rounded-4 hover-shadow overflow-hidden">
                        <div class="card-header bg-white border-0 py-4 text-center">
                            <h5 class="fw-bold text-muted text-uppercase small ls-1 mb-2">{{ __('messages.price_3_name') }}</h5>
                            <span class="badge bg-light text-dark mb-3">{{ __('messages.price_3_feat') }}</span>
                            <div class="display-6 fw-bold text-dark">Custom</div>
                        </div>
                        <div class="card-body px-4">
                            <ul class="list-unstyled mb-0 d-grid gap-2">
                                <li class="text-muted"><i class="bi bi-check-circle-fill text-success me-2"></i> Custom Web App</li>
                                <li class="text-muted"><i class="bi bi-check-circle-fill text-success me-2"></i> API Integration</li>
                                <li class="text-muted"><i class="bi bi-check-circle-fill text-success me-2"></i> Priority Support</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0 pb-4 px-4 text-center">
                            <a href="{{ url('/contact') }}" class="btn btn-outline-dark rounded-pill w-100 fw-bold">{{ __('messages.price_btn') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 6: FAQ (NEW)                       --}}
    {{-- ========================================== --}}
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold text-dark">{{ __('messages.faq_title') }}</h2>
                    </div>

                    <div class="accordion accordion-flush bg-white rounded-4 shadow-sm overflow-hidden p-3" id="faqAccordion">
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    {{ __('messages.faq_1_q') }}
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    {{ __('messages.faq_1_a') }}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    {{ __('messages.faq_2_q') }}
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    {{ __('messages.faq_2_a') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
<style>
    .hover-shadow { transition: 0.3s ease; }
    .hover-shadow:hover { 
        transform: translateY(-5px); 
        box-shadow: 0 10px 30px rgba(0,0,0,0.08) !important; 
        border-color: var(--sharesa-green) !important;
    }
    
    .hover-scale { transition: 0.3s ease; }
    .hover-scale:hover { transform: scale(1.1); }
    
    .transform-scale { transition: 0.3s ease; }
    .transform-scale:hover { transform: translateY(-10px); }
</style>
@endsection