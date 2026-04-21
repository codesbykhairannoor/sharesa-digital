@extends('layouts.app')

@section('title', __('messages.services'))

@section('content')

    {{-- ========================================== --}}
    {{-- SECTION 1: HEADER (Dark Hero)              --}}
    {{-- ========================================== --}}
    <section class="position-relative overflow-hidden"
        style="background-color: var(--sharesa-dark); margin-top: -85px; padding-top: 160px; padding-bottom: 80px;">

        {{-- Grid Background --}}
        <div class="position-absolute top-0 start-0 w-100 h-100 pe-none" style="background-image: linear-gradient(rgba(0,255,140,0.07) 1px, transparent 1px), linear-gradient(to right, rgba(0,255,140,0.07) 1px, transparent 1px); background-size: 50px 50px;"></div>

        <div class="container position-relative text-center text-white" style="z-index: 1;">
            <span class="section-label text-success d-block mb-3" data-aos="fade-up">{{ __('messages.services') }}</span>
            <h1 class="fw-bold mt-2 mb-4" data-aos="fade-up" data-aos-delay="80"
                style="font-size: clamp(2.2rem, 5vw, 3.5rem); letter-spacing: -1px; line-height: 1.15;">
                {{ __('messages.serv_header_title') }}
            </h1>
            <p class="text-white-50 mx-auto mb-0" data-aos="fade-up" data-aos-delay="160"
                style="max-width: 650px; font-size: 1.1rem; line-height: 1.8;">
                {{ __('messages.serv_header_desc') }}
            </p>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 2: PRICING PLANS                   --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-light">
        <div class="container py-5">
            
            {{-- Tabs Navigation --}}
            <div class="d-flex justify-content-center mb-5" data-aos="fade-up">
                <ul class="nav nav-pills pricing-tabs p-2 bg-white rounded-pill shadow-sm" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active px-4 py-2 rounded-pill fw-bold" id="pills-umkm-tab" data-bs-toggle="pill" data-bs-target="#pills-umkm" type="button" role="tab">UMKM</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-4 py-2 rounded-pill fw-bold" id="pills-bisnis-tab" data-bs-toggle="pill" data-bs-target="#pills-bisnis" type="button" role="tab">Bisnis</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-4 py-2 rounded-pill fw-bold" id="pills-toko-tab" data-bs-toggle="pill" data-bs-target="#pills-toko" type="button" role="tab">Toko Online</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-4 py-2 rounded-pill fw-bold" id="pills-custom-tab" data-bs-toggle="pill" data-bs-target="#pills-custom" type="button" role="tab">Custom</button>
                    </li>
                </ul>
            </div>

            {{-- Tabs Content --}}
            <div class="tab-content" id="pills-tabContent" data-aos="fade-up" data-aos-delay="100">
                
                @php
                    $categories = [
                        'umkm' => [1, 2, 3],
                        'bisnis' => [4, 5, 6],
                        'toko' => [7, 8, 9]
                    ];
                @endphp

                @foreach($categories as $id => $pkgs)
                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="pills-{{ $id }}" role="tabpanel">
                        <div class="row g-4 justify-content-center">
                            @foreach($pkgs as $pIdx)
                                <div class="col-lg-4">
                                    <div class="card h-100 rounded-4 border-0 pricing-card shadow-sm p-4 {{ $pIdx == 2 || $pIdx == 5 || $pIdx == 9 ? 'pricing-featured border-success' : '' }}">
                                        @if($pIdx == 2 || $pIdx == 5 || $pIdx == 9)
                                            <div class="position-absolute top-0 start-0 w-100 py-1 text-center bg-success text-dark fw-bold" style="font-size: 0.7rem; border-top-left-radius: 12px; border-top-right-radius: 12px;">
                                                {{ __('messages.pkg_'.$pIdx.'_tag') }}
                                            </div>
                                        @endif
                                        
                                        <div class="pt-3">
                                            <span class="text-muted small fw-bold mb-1 d-block">{{ __('messages.pkg_'.$pIdx.'_tag') }}</span>
                                            <h4 class="fw-bold mb-1 text-dark">{{ __('messages.pkg_'.$pIdx.'_name') }}</h4>
                                            <p class="text-muted small mb-3" style="line-height: 1.4; min-height: 40px;">{{ __('messages.pkg_'.$pIdx.'_desc') }}</p>
                                            
                                            <div class="mb-4">
                                                <span class="fs-2 fw-black text-dark">Rp {{ __('messages.pkg_'.$pIdx.'_price') }}</span>
                                                <p class="text-muted extra-small mb-0 mt-1" style="font-size: 0.75rem;">Rp {{ __('messages.pkg_'.$pIdx.'_renewal') }}</p>
                                            </div>
                                        </div>

                                        <hr class="opacity-10">
                                        
                                        <ul class="list-unstyled d-grid gap-2 mb-4 flex-grow-1">
                                            @foreach(__('messages.pkg_'.$pIdx.'_feat') as $feat)
                                                <li class="small d-flex align-items-start gap-2">
                                                    <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                                    <span>{{ $feat }}</span>
                                                </li>
                                            @endforeach
                                        </ul>

                                        {{-- Extra Features List (Fitur Lainnya) --}}
                                        <div class="feature-extras mb-4">
                                            <button class="btn btn-link p-0 text-decoration-none text-dark fw-bold small d-flex align-items-center gap-1 mb-2" 
                                                    type="button" data-bs-toggle="collapse" data-bs-target="#extraFeats{{ $pIdx }}">
                                                {{ __('messages.feat_label') }} <i class="bi bi-chevron-down small"></i>
                                            </button>
                                            <div class="collapse" id="extraFeats{{ $pIdx }}">
                                                <ul class="list-unstyled d-grid gap-2 ps-1">
                                                    @php
                                                        $extraKeys = ['dashboard', 'wa', 'gallery', 'sosmed', 'analytic'];
                                                        if($pIdx >= 2) $extraKeys = array_merge($extraKeys, ['email', 'seo', 'google_ads']);
                                                        if($pIdx >= 3) $extraKeys = array_merge($extraKeys, ['gmap', 'indexing']);
                                                        if($pIdx >= 4) $extraKeys[] = 'maintenance';
                                                    @endphp
                                                    @foreach($extraKeys as $eKey)
                                                        <li class="extra-small d-flex align-items-center gap-2 opacity-75" style="font-size: 0.78rem;">
                                                            <i class="bi bi-plus-circle text-success" style="font-size:0.7rem;"></i>
                                                            {{ __('messages.feat_'.$eKey) }}
                                                        </li>
                                                    @endforeach
                                                    
                                                    {{-- Woocommerce Section --}}
                                                    @if($pIdx >= 7 && $pIdx <= 9)
                                                        <li class="mt-2 fw-bold small text-success">{{ __('messages.woo_label') }}</li>
                                                        @foreach(['order', 'report', 'shipping', 'member'] as $wKey)
                                                            <li class="extra-small d-flex align-items-center gap-2 opacity-75" style="font-size: 0.78rem;">
                                                                <i class="bi bi-cart-check text-success" style="font-size:0.7rem;"></i>
                                                                {{ __('messages.woo_'.$wKey) }}
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>

                                        <a href="https://wa.me/6287752458894?text=Halo Sharesa! Saya tertarik dengan {{ __('messages.pkg_'.$pIdx.'_name') }}." 
                                           target="_blank" 
                                           class="btn w-100 rounded-pill fw-bold py-2 mt-auto {{ $pIdx == 2 || $pIdx == 5 || $pIdx == 9 ? 'btn-sharesa-primary' : 'btn-outline-dark' }}">
                                            {{ __('messages.price_btn') }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

                {{-- TAB 4: Custom --}}
                <div class="tab-pane fade" id="pills-custom" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card rounded-4 border-0 pricing-card shadow-lg p-5 text-center">
                                <div class="mb-4 rounded-circle d-inline-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px; background: rgba(0,255,140,0.1);">
                                    <i class="bi bi-tools fs-1 text-success"></i>
                                </div>
                                <span class="text-muted section-label mb-2">{{ __('messages.pkg_10_tag') }}</span>
                                <h4 class="fw-bold mb-3">{{ __('messages.pkg_10_name') }}</h4>
                                <div class="my-3">
                                    <span class="fs-2 fw-black text-dark">{{ __('messages.pkg_10_price') }}</span>
                                </div>
                                <p class="text-muted mb-4 small">{{ __('messages.pkg_10_desc') }}</p>
                                <ul class="list-unstyled d-grid gap-2 mb-5 text-start mx-auto" style="max-width: 350px;">
                                    @foreach(__('messages.pkg_10_feat') as $feat)
                                        <li class="small d-flex align-items-start gap-2">
                                            <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                            <span>{{ $feat }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                                <a href="{{ url('/contact') }}" class="btn btn-sharesa-primary rounded-pill fw-bold py-3 px-5 shadow-lg">
                                    {{ __('messages.price_btn') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 3: FAQ                             --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5" data-aos="fade-up">
                        <span class="section-label text-success d-block mb-3">FAQ</span>
                        <h2 class="fw-bold text-dark" style="letter-spacing: -0.5px;">{{ __('messages.price_title') }}</h2>
                    </div>

                    <div class="accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="80">
                        @for($i = 1; $i <= 7; $i++)
                            <div class="accordion-item border-0 mb-3 rounded-4 overflow-hidden" style="box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{ $i > 1 ? 'collapsed' : '' }} fw-bold rounded-4 bg-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq{{ $i }}" style="font-size: 1rem;">
                                        {{ __('messages.price_faq_' . $i . '_q') }}
                                    </button>
                                </h2>
                                <div id="faq{{ $i }}" class="accordion-collapse collapse {{ $i == 1 ? 'show' : '' }}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-secondary bg-white pt-0" style="line-height: 1.8; font-size: 0.95rem;">
                                        {{ __('messages.price_faq_' . $i . '_a') }}
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>

                    {{-- CTA --}}
                    <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="100">
                        <p class="text-muted mb-4">Butuh penawaran custom atau diskon khusus?</p>
                        <a href="https://wa.me/6287752458894" target="_blank" class="btn btn-sharesa-primary rounded-pill px-5 py-3 fw-bold shadow-lg">
                            <i class="bi bi-whatsapp me-2"></i> Konsultasi Gratis Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
<style>
    /* Tabs styling */
    .pricing-tabs .nav-link { color: #64748b; transition: 0.3s; border: 1px solid transparent; }
    .pricing-tabs .nav-link.active { 
        background-color: var(--sharesa-dark) !important; 
        color: var(--sharesa-green) !important; 
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    .pricing-tabs .nav-link:hover:not(.active) {
        color: var(--sharesa-dark);
        background: #f1f5f9;
    }

    /* Card styling */
    .pricing-card { 
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); 
        border: 1px solid #f1f5f9 !important;
        position: relative;
    }
    .pricing-card:hover { 
        transform: translateY(-12px); 
        box-shadow: 0 30px 60px rgba(0,0,0,0.1) !important; 
    }
    .pricing-featured { 
        border: 2px solid var(--sharesa-green) !important; 
    }
    .pricing-featured:hover { transform: scale(1.03) translateY(-12px) !important; }

    /* Extra Features */
    .feature-extras .btn-link { font-size: 0.85rem; color: #64748b !important; }
    .feature-extras .btn-link:hover { color: var(--sharesa-green-dim) !important; }

    /* FAQ accordion custom arrow */
    .accordion-button::after {
        filter: none;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%2300cc70'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }
    .accordion-button:not(.collapsed) {
        background-color: #f0fdf4 !important;
        color: var(--sharesa-dark);
        box-shadow: none;
    }
    .accordion-button:focus { box-shadow: none; }
</style>
@endsection