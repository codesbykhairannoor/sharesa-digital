@extends('layouts.app')

@section('title', __('messages.contact'))

@section('content')

    {{-- ========================================== --}}
    {{-- SECTION 1: HEADER HERO                     --}}
    {{-- ========================================== --}}
   {{-- ========================================== --}}
    {{-- SECTION 1: HEADER HERO (CLEAN DARK)        --}}
    {{-- ========================================== --}}
    <section class="position-relative overflow-hidden" 
             style="background-color: var(--sharesa-dark); margin-top: -85px; padding-top: 160px; padding-bottom: 80px;">
        
        {{-- HAPUS BAGIAN SVG HIJAU DISINI --}}

        <div class="container position-relative z-1 text-white text-center">
            <span class="text-white-50 fw-bold text-uppercase tracking-widest letter-spacing-2" style="font-size: 0.8rem;">
                24/7 SUPPORT
            </span>
            <h1 class="display-3 fw-bold mt-3 mb-4">{{ __('messages.contact_header') }}</h1>
            <p class="lead text-white-50 col-lg-6 mx-auto mb-0" style="font-size: 1.1rem;">
                {{ __('messages.contact_desc') }}
            </p>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 2: FOUNDER SPOTLIGHT (SINGLE CEO)  --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-lg rounded-5 overflow-hidden">
                        <div class="row g-0">
                            {{-- Foto Founder --}}
                            <div class="col-md-5 position-relative">
                                <img src="https://ui-avatars.com/api/?name=Khairan+Noor&background=1e2a39&color=00ff8c&size=500&bold=true" 
                                     class="img-fluid h-100 w-100 object-fit-cover" 
                                     alt="Khairan Noor">
                                <div class="position-absolute bottom-0 start-0 bg-success text-white px-3 py-1 m-3 rounded fw-bold small">
                                    {{ __('messages.ceo_badge') }}
                                </div>
                            </div>
                            
                            {{-- Pesan Founder --}}
                            <div class="col-md-7 d-flex align-items-center bg-light">
                                <div class="p-5">
                                    <i class="bi bi-quote fs-1 text-success opacity-25"></i>
                                    <h4 class="fst-italic text-dark mb-4 lh-base">"{{ __('messages.ceo_quote') }}"</h4>
                                    <div>
                                        <h5 class="fw-bold mb-0 text-dark">{{ __('messages.ceo_name') }}</h5>
                                        <small class="text-muted text-uppercase tracking-widest">{{ __('messages.ceo_role') }}</small>
                                    </div>
                                    <div class="mt-4 pt-4 border-top">
                                        <div class="d-flex gap-3">
                                            <a href="#" class="btn btn-outline-dark btn-sm rounded-circle"><i class="bi bi-linkedin"></i></a>
                                            <a href="#" class="btn btn-outline-dark btn-sm rounded-circle"><i class="bi bi-instagram"></i></a>
                                            <a href="#" class="btn btn-outline-dark btn-sm rounded-circle"><i class="bi bi-envelope"></i></a>
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
    {{-- SECTION 3: CONTACT INFO GRID               --}}
    {{-- ========================================== --}}
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container py-4">
            <div class="row g-4">
                {{-- Address Card --}}
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100 text-center hover-up border-bottom border-4 border-success">
                        <div class="d-inline-flex bg-success bg-opacity-10 p-3 rounded-circle mb-3">
                            <i class="bi bi-geo-alt-fill fs-3 text-success"></i>
                        </div>
                        <h5 class="fw-bold mb-2">{{ __('messages.addr_title') }}</h5>
                        <p class="text-muted small">Jeruk Purut, Cilandak Timur<br>Jakarta Selatan, Indonesia</p>
                    </div>
                </div>
                
                {{-- Email Card --}}
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100 text-center hover-up border-bottom border-4 border-primary">
                        <div class="d-inline-flex bg-primary bg-opacity-10 p-3 rounded-circle mb-3">
                            <i class="bi bi-envelope-fill fs-3 text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-2">{{ __('messages.email_title') }}</h5>
                        <p class="text-muted small">hello@sharesa.id<br>support@sharesa.id</p>
                    </div>
                </div>

                {{-- Phone Card --}}
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100 text-center hover-up border-bottom border-4 border-warning">
                        <div class="d-inline-flex bg-warning bg-opacity-10 p-3 rounded-circle mb-3">
                            <i class="bi bi-whatsapp fs-3 text-warning"></i>
                        </div>
                        <h5 class="fw-bold mb-2">{{ __('messages.phone_title') }}</h5>
                        <p class="text-muted small">+62 831-3689-2742<br>Mon-Fri, 9AM - 6PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 4: MAP & FORM (SPLIT)              --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-0 rounded-5 overflow-hidden shadow-lg border">
                
                {{-- Left: Map --}}
                <div class="col-lg-6">
                    <div class="h-100" style="min-height: 500px;">
                        <iframe 
                            width="100%" 
                            height="100%" 
                            style="border:0; filter: grayscale(1) contrast(1.2) opacity(0.8);" 
                            loading="lazy" 
                            allowfullscreen 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.989098481442!2d106.81267447499015!3d-6.265166293724286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1a0a5760825%3A0x6295964894314757!2sJeruk%20Purut%20Cemetery!5e0!3m2!1sen!2sid!4v1709653245412!5m2!1sen!2sid">
                        </iframe>
                    </div>
                </div>

                {{-- Right: Form --}}
                <div class="col-lg-6 bg-white p-5">
                    <h3 class="fw-bold mb-4 text-dark">{{ __('messages.form_title') }}</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted text-uppercase">{{ __('messages.form_name') }}</label>
                                <input type="text" class="form-control bg-light border-0 py-3 px-4 rounded-3" placeholder="John Doe">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted text-uppercase">{{ __('messages.form_email') }}</label>
                                <input type="email" class="form-control bg-light border-0 py-3 px-4 rounded-3" placeholder="john@example.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-muted text-uppercase">{{ __('messages.form_subject') }}</label>
                                <select class="form-select bg-light border-0 py-3 px-4 rounded-3">
                                    <option>General Inquiry</option>
                                    <option>Project Proposal</option>
                                    <option>Partnership</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-muted text-uppercase">{{ __('messages.form_msg') }}</label>
                                <textarea class="form-control bg-light border-0 py-3 px-4 rounded-3" rows="5" placeholder="Tell us about your project..."></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-dark w-100 py-3 fw-bold rounded-pill">
                                    {{ __('messages.form_btn') }} <i class="bi bi-send-fill ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 5: CTA WHATSAPP (FLOATING FEEL)    --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-success bg-opacity-10">
        <div class="container text-center py-4">
            <h2 class="fw-bold text-success mb-3">Need a faster response?</h2>
            <p class="text-muted mb-4">Chat directly with our team via WhatsApp.</p>
            <a href="https://wa.me/6283136892742" class="btn btn-success btn-lg rounded-pill px-5 shadow-lg hover-scale">
                <i class="bi bi-whatsapp me-2"></i> Chat on WhatsApp
            </a>
        </div>
    </section>

@endsection

@section('styles')
<style>
    .hover-up { transition: 0.3s ease; }
    .hover-up:hover { transform: translateY(-5px); }

    .hover-scale { transition: 0.3s ease; }
    .hover-scale:hover { transform: scale(1.05); }

    .letter-spacing-2 { letter-spacing: 2px; }
</style>
@endsection