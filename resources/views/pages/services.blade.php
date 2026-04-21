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
    {{-- SECTION 2: PRICING PLANS (10 Tiers)        --}}
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
                
                {{-- TAB 1: UMKM --}}
                <div class="tab-pane fade show active" id="pills-umkm" role="tabpanel">
                    <div class="row g-4 justify-content-center">
                        {{-- Paket Hemat UMKM --}}
                        <div class="col-lg-4">
                            <div class="card h-100 rounded-4 border-0 pricing-card shadow-sm p-4">
                                <span class="text-muted section-label mb-3">Paket Hemat</span>
                                <h4 class="fw-bold mb-1">Hemat UMKM</h4>
                                <div class="my-3">
                                    <span class="fs-2 fw-black text-dark">Rp 650 rb</span>
                                    <p class="text-muted small mb-0">Rp 700.000 di tahun berikutnya</p>
                                </div>
                                <hr class="opacity-10">
                                <ul class="list-unstyled d-grid gap-3 mb-4 flex-grow-1">
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> 1 Halaman Website</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Free Domain .com</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Aktif 1 Tahun</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Basic Landing Page Design</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Basic Copy Writing</li>
                                </ul>
                                <a href="https://wa.me/6287752458894?text=Halo Sharesa! Saya tertarik dengan Paket Hemat UMKM (650rb)." target="_blank" class="btn btn-outline-dark rounded-pill fw-bold py-2 mt-auto">{{ __('messages.price_btn') }}</a>
                            </div>
                        </div>
                        {{-- UMKM (Most Popular) --}}
                        <div class="col-lg-4">
                            <div class="card h-100 rounded-4 border-0 pricing-card pricing-featured shadow-lg p-4 bg-dark text-white position-relative overflow-hidden">
                                <div class="position-absolute top-0 start-0 w-100 py-1 text-center bg-success text-dark fw-bold" style="font-size: 0.7rem;">MOST POPULAR</div>
                                <span class="text-white-50 section-label mb-3 pt-2">UMKM Catalog</span>
                                <h4 class="fw-bold mb-1 text-white">UMKM</h4>
                                <div class="my-3">
                                    <span class="fs-2 fw-black" style="color: var(--sharesa-green);">Rp 1.0 Jt</span>
                                    <p class="text-white-50 small mb-0">Rp 700.000 di tahun berikutnya</p>
                                </div>
                                <hr class="opacity-10 bg-white">
                                <ul class="list-unstyled d-grid gap-3 mb-4 flex-grow-1">
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> 3 Halaman Website</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Free Domain .com</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Aktif 1 Tahun</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Basic Web Design</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Advanced Copy Writing</li>
                                </ul>
                                <a href="https://wa.me/6287752458894?text=Halo Sharesa! Saya tertarik dengan Paket UMKM (1jt)." target="_blank" class="btn btn-success rounded-pill fw-bold text-dark py-2 mt-auto">{{ __('messages.price_btn') }}</a>
                            </div>
                        </div>
                        {{-- Paket Website Untung --}}
                        <div class="col-lg-4">
                            <div class="card h-100 rounded-4 border-0 pricing-card shadow-sm p-4">
                                <span class="text-muted section-label mb-3">Product Intro</span>
                                <h4 class="fw-bold mb-1">Website Untung</h4>
                                <div class="my-3">
                                    <span class="fs-2 fw-black text-dark">Rp 1.5 Jt</span>
                                    <p class="text-muted small mb-0">Rp 800.000 di tahun berikutnya</p>
                                </div>
                                <hr class="opacity-10">
                                <ul class="list-unstyled d-grid gap-3 mb-4 flex-grow-1">
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> 5 Halaman Website</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Free Domain .com</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Shared Hosting</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Basic Web Design</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Free Logo Design</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Advanced Copy Writing</li>
                                </ul>
                                <a href="https://wa.me/6287752458894?text=Halo Sharesa! Saya tertarik dengan Paket Website Untung (1.5jt)." target="_blank" class="btn btn-outline-dark rounded-pill fw-bold py-2 mt-auto">{{ __('messages.price_btn') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- TAB 2: Bisnis --}}
                <div class="tab-pane fade" id="pills-bisnis" role="tabpanel">
                    <div class="row g-4 justify-content-center">
                        {{-- Paket Bisnis --}}
                        <div class="col-lg-4">
                            <div class="card h-100 rounded-4 border-0 pricing-card shadow-sm p-4">
                                <span class="text-muted section-label mb-3">Bisnis Profile</span>
                                <h4 class="fw-bold mb-1">Paket Bisnis</h4>
                                <div class="my-3">
                                    <span class="fs-2 fw-black text-dark">Rp 2,525 Jt</span>
                                    <p class="text-muted small mb-0">Rp 1.000.000 di tahun berikutnya</p>
                                </div>
                                <ul class="list-unstyled d-grid gap-2 mb-4 flex-grow-1">
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> 10 Halaman Website</li>
                                    <li class="small d-flex align-items-start gap-2 text-muted ms-4">Contoh: Home, Service, About, Contact, Blog</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Free Domain .com .id .org</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Shared Hosting & Aktif 1 Thn</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Custom Web Design</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Free Logo Design</li>
                                </ul>
                                <a href="https://wa.me/6287752458894?text=Halo Sharesa! Saya tertarik dengan Paket Bisnis (2.525jt)." target="_blank" class="btn btn-outline-dark rounded-pill fw-bold py-2 mt-auto">{{ __('messages.price_btn') }}</a>
                            </div>
                        </div>
                        {{-- Paket Bisnis Plus (Best Choice) --}}
                        <div class="col-lg-4">
                            <div class="card h-100 rounded-4 border-0 pricing-card pricing-featured shadow-lg p-4 bg-dark text-white position-relative overflow-hidden">
                                <div class="position-absolute top-0 start-0 w-100 py-1 text-center bg-warning text-dark fw-bold" style="font-size: 0.7rem;">BEST CHOICE</div>
                                <span class="text-white-50 section-label mb-3 pt-2">Professional</span>
                                <h4 class="fw-bold mb-1 text-white">Bisnis Plus</h4>
                                <div class="my-3">
                                    <span class="fs-2 fw-black" style="color: var(--sharesa-green);">Rp 5.0 Jt</span>
                                    <p class="text-white-50 small mb-0">Rp 2.000.000 di tahun berikutnya</p>
                                </div>
                                <ul class="list-unstyled d-grid gap-2 mb-4 flex-grow-1">
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> 20 Halaman Website</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Domain .com .id .org .or.id</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> **Dedicated Hosting**</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Custom Web & Logo Design</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> *Setting Google Ads*</li>
                                </ul>
                                <a href="https://wa.me/6287752458894?text=Halo Sharesa! Saya tertarik dengan Paket Bisnis Plus (5jt)." target="_blank" class="btn btn-success rounded-pill fw-bold text-dark py-2 mt-auto">{{ __('messages.price_btn') }}</a>
                            </div>
                        </div>
                        {{-- Paket Bisnis High --}}
                        <div class="col-lg-4">
                            <div class="card h-100 rounded-4 border-0 pricing-card shadow-sm p-4">
                                <span class="text-muted section-label mb-3">Enterprise Profile</span>
                                <h4 class="fw-bold mb-1">Bisnis High</h4>
                                <div class="my-3">
                                    <span class="fs-2 fw-black text-dark">Rp 7,5 Jt</span>
                                    <p class="text-muted small mb-0">Rp 3.500.000 di tahun berikutnya</p>
                                </div>
                                <ul class="list-unstyled d-grid gap-2 mb-4 flex-grow-1">
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> 30+ Halaman Website</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Dedicated Hosting</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> **Multi Bahasa**</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> **Live Chat Integration**</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Setting Google Ads</li>
                                </ul>
                                <a href="https://wa.me/6287752458894?text=Halo Sharesa! Saya tertarik dengan Paket Bisnis High (7.5jt)." target="_blank" class="btn btn-outline-dark rounded-pill fw-bold py-2 mt-auto">{{ __('messages.price_btn') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- TAB 3: Toko Online --}}
                <div class="tab-pane fade" id="pills-toko" role="tabpanel">
                    <div class="row g-4 justify-content-center">
                        {{-- Paket Toko WA UMKM --}}
                        <div class="col-lg-4">
                            <div class="card h-100 rounded-4 border-0 pricing-card shadow-sm p-4">
                                <span class="text-muted section-label mb-3">Small Shop</span>
                                <h4 class="fw-bold mb-1">Toko WA UMKM</h4>
                                <div class="my-3">
                                    <span class="fs-2 fw-black text-dark">Rp 2,525 Jt</span>
                                    <p class="text-muted small mb-0">Rp 1.000.000 di tahun berikutnya</p>
                                </div>
                                <ul class="list-unstyled d-grid gap-2 mb-4 flex-grow-1">
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> 10 Halaman Website</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Katalog Produk</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> **Checkout Via WhatsApp**</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Bantu Upload 10 Produk</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Shared Hosting & Logo Design</li>
                                </ul>
                                <a href="https://wa.me/6287752458894?text=Halo Sharesa! Saya tertarik dengan Paket Toko WA UMKM (2.525jt)." target="_blank" class="btn btn-outline-dark rounded-pill fw-bold py-2 mt-auto">{{ __('messages.price_btn') }}</a>
                            </div>
                        </div>
                        {{-- Paket Toko Bisnis --}}
                        <div class="col-lg-4">
                            <div class="card h-100 rounded-4 border-0 pricing-card shadow-sm p-4">
                                <span class="text-muted section-label mb-3">E-Commerce</span>
                                <h4 class="fw-bold mb-1">Toko Bisnis</h4>
                                <div class="my-3">
                                    <span class="fs-2 fw-black text-dark">Rp 3,5 Jt</span>
                                    <p class="text-muted small mb-0">Rp 2.000.000 di tahun berikutnya</p>
                                </div>
                                <ul class="list-unstyled d-grid gap-2 mb-4 flex-grow-1">
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> 15 Halaman Website</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Katalog Produk</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> **Payment Gateway Integration**</li>
                                    <li class="small d-flex align-items-start gap-2 text-muted ms-4">(Midtrans, Xendit, Duitku, dll)</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> **Dedicated Hosting**</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Bantu Upload 20 Produk</li>
                                </ul>
                                <a href="https://wa.me/6287752458894?text=Halo Sharesa! Saya tertarik dengan Paket Toko Bisnis (3.5jt)." target="_blank" class="btn btn-outline-dark rounded-pill fw-bold py-2 mt-auto">{{ __('messages.price_btn') }}</a>
                            </div>
                        </div>
                        {{-- Paket Toko High (Best Choice) --}}
                        <div class="col-lg-4">
                            <div class="card h-100 rounded-4 border-0 pricing-card pricing-featured shadow-lg p-4 bg-dark text-white position-relative overflow-hidden">
                                <div class="position-absolute top-0 start-0 w-100 py-1 text-center bg-warning text-dark fw-bold" style="font-size: 0.7rem;">BEST CHOICE</div>
                                <span class="text-white-50 section-label mb-3 pt-2">Pro E-Commerce</span>
                                <h4 class="fw-bold mb-1 text-white">Toko High</h4>
                                <div class="my-3">
                                    <span class="fs-2 fw-black" style="color: var(--sharesa-green);">Rp 7.5 Jt</span>
                                    <p class="text-white-50 small mb-0">Rp 3.500.000 di tahun berikutnya</p>
                                </div>
                                <ul class="list-unstyled d-grid gap-2 mb-4 flex-grow-1">
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> 30+ Halaman Website</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Payment Gateway & dedicated Hosting</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> **Multi Bahasa & Live Chat**</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Bantu Upload 40 Produk</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Custom Design Premium</li>
                                </ul>
                                <a href="https://wa.me/6287752458894?text=Halo Sharesa! Saya tertarik dengan Paket Toko High (7.5jt)." target="_blank" class="btn btn-success rounded-pill fw-bold text-dark py-2 mt-auto">{{ __('messages.price_btn') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- TAB 4: Custom --}}
                <div class="tab-pane fade" id="pills-custom" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card rounded-4 border-0 pricing-card shadow-lg p-5 text-center">
                                <div class="mb-4 rounded-circle d-inline-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px; background: rgba(0,255,140,0.1);">
                                    <i class="bi bi-tools fs-1 text-success"></i>
                                </div>
                                <span class="text-muted section-label mb-2">Special Request</span>
                                <h4 class="fw-bold mb-3">Custom Fitur Website</h4>
                                <div class="my-3">
                                    <span class="fs-2 fw-black text-dark">Hubungi Kami</span>
                                </div>
                                <p class="text-muted mb-4 small">Cocok untuk website dengan fitur spesifik seperti LMS, Donasi, Booking Hotel, Job Listing, atau Marketplace.</p>
                                <ul class="list-unstyled d-grid gap-2 mb-5 text-start mx-auto" style="max-width: 300px;">
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> LMS / Online Class</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Donation System</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Hotel Booking + Payment</li>
                                    <li class="small d-flex align-items-start gap-2"><i class="bi bi-check-circle-fill text-success mt-1"></i> Job Listing + Profile Builder</li>
                                </ul>
                                <a href="{{ url('/contact') }}" class="btn btn-dark rounded-pill fw-bold py-3 px-5 shadow-lg">{{ __('messages.price_btn') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 3: FAQ (Min. 7 Items)              --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5" data-aos="fade-up">
                        <span class="section-label text-success d-block mb-3">FAQ</span>
                        <h2 class="fw-bold text-dark" style="letter-spacing: -0.5px;">Pertanyaan Seputar Harga</h2>
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
                        <a href="https://wa.me/6287752458894" target="_blank" class="btn btn-success rounded-pill px-5 py-3 fw-bold shadow-lg">
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
    .pricing-tabs .nav-link { color: #64748b; transition: 0.3s; }
    .pricing-tabs .nav-link.active { 
        background-color: var(--sharesa-dark) !important; 
        color: var(--sharesa-green) !important; 
    }

    /* Card styling */
    .pricing-card { 
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); 
        border: 1px solid #f1f5f9 !important;
    }
    .pricing-card:hover { 
        transform: translateY(-12px); 
        box-shadow: 0 30px 60px rgba(0,0,0,0.1) !important; 
    }
    .pricing-featured { 
        border: 1px solid var(--sharesa-green) !important; 
    }
    .pricing-featured:hover { transform: scale(1.03) translateY(-12px) !important; }

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