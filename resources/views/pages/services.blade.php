@extends('layouts.app')

@section('title', __('messages.services'))

@section('content')

    {{-- ========================================== --}}
    {{-- SECTION 1: HEADER                          --}}
    {{-- ========================================== --}}
    <section class="py-5 text-center" style="background-color: #f8f9fa;">
        <div class="container pt-4">
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
        <div class="container">
            <div class="row g-4">
                
                {{-- Service 1: UI/UX --}}
                <div class="col-md-6">
                    <div class="d-flex p-4 border rounded-4 h-100 hover-shadow transition-all">
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
                    <div class="d-flex p-4 border rounded-4 h-100 hover-shadow transition-all">
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
                    <div class="d-flex p-4 border rounded-4 h-100 hover-shadow transition-all">
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
                    <div class="d-flex p-4 border rounded-4 h-100 hover-shadow transition-all">
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
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-white">{{ __('messages.process_title') }}</h2>
            </div>

            <div class="row text-center g-4">
                {{-- Step 1 --}}
                <div class="col-md-3 position-relative">
                    <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow" style="width: 80px; height: 80px; border: 4px solid var(--sharesa-green);">
                        <span class="fs-2 fw-bold">1</span>
                    </div>
                    <h5 class="text-white fw-bold">{{ __('messages.process_1') }}</h5>
                    <p class="text-white-50 small">{{ __('messages.process_1_desc') }}</p>
                </div>

                {{-- Step 2 --}}
                <div class="col-md-3 position-relative">
                    <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow" style="width: 80px; height: 80px; border: 4px solid var(--sharesa-green);">
                        <span class="fs-2 fw-bold">2</span>
                    </div>
                    <h5 class="text-white fw-bold">{{ __('messages.process_2') }}</h5>
                    <p class="text-white-50 small">{{ __('messages.process_2_desc') }}</p>
                </div>

                {{-- Step 3 --}}
                <div class="col-md-3 position-relative">
                    <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow" style="width: 80px; height: 80px; border: 4px solid var(--sharesa-green);">
                        <span class="fs-2 fw-bold">3</span>
                    </div>
                    <h5 class="text-white fw-bold">{{ __('messages.process_3') }}</h5>
                    <p class="text-white-50 small">{{ __('messages.process_3_desc') }}</p>
                </div>

                {{-- Step 4 --}}
                <div class="col-md-3 position-relative">
                    <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow" style="width: 80px; height: 80px; border: 4px solid var(--sharesa-green);">
                        <span class="fs-2 fw-bold">4</span>
                    </div>
                    <h5 class="text-white fw-bold">{{ __('messages.process_4') }}</h5>
                    <p class="text-white-50 small">{{ __('messages.process_4_desc') }}</p>
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
</style>
@endsection