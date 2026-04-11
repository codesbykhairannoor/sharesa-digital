@extends('layouts.app')

@section('title', __('messages.contact'))

@section('content')

    {{-- ========================================== --}}
    {{-- SECTION 1: HEADER HERO (CLEAN DARK)        --}}
    {{-- ========================================== --}}
    <section class="position-relative overflow-hidden" 
             style="background-color: var(--sharesa-dark); margin-top: -85px; padding-top: 160px; padding-bottom: 80px;">
        
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
{{-- SECTION 2: THE STUDIO VISION               --}}
{{-- ========================================== --}}
<section class="py-5 bg-white border-top">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 bg-dark text-white rounded-5 overflow-hidden shadow-lg">
                    <div class="row g-0 align-items-center">
                        
                        {{-- Bagian Kiri: Visual Branding --}}
                        <div class="col-md-5 bg-success p-5 text-center d-flex flex-column justify-content-center h-100 min-vh-25">
                            <i class="bi bi-layers-half text-dark opacity-50 mb-3" style="font-size: 4rem;"></i>
                            <h3 class="fw-bold text-dark tracking-widest text-uppercase mb-0">Sharesa<br>Space</h3>
                            <span class="badge bg-dark text-white mt-3 mx-auto px-3 py-2">Established 2025</span>
                        </div>
                        
                        {{-- Bagian Kanan: Director's Message --}}
                        <div class="col-md-7">
                            <div class="p-5 p-md-5">
                                <span class="text-success fw-bold tracking-widest small text-uppercase mb-3 d-block">Director's Note</span>
                                <i class="bi bi-quote fs-1 text-white opacity-25 position-absolute mt-n4 ms-n3"></i>
                                <h4 class="fst-italic text-white mb-4 lh-base position-relative" style="z-index: 1;">
                                    "{{ __('messages.ceo_quote') }}"
                                </h4>
                                
                                <div class="mt-5 border-top border-secondary pt-4 d-flex justify-content-between align-items-end">
                                    <div>
                                        <h5 class="fw-bold mb-0 text-white">{{ __('messages.ceo_name') }}</h5>
                                        <small class="text-success text-uppercase tracking-widest" style="font-size: 0.8rem;">Technical Director</small>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-envelope"></i></a>
                                        <a href="#" class="btn btn-outline-success btn-sm rounded-circle"><i class="bi bi-arrow-right"></i></a>
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
                        <p class="text-muted small"><br>Jakarta Selatan, Indonesia</p>
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

                {{-- Phone Card (UPDATED NUMBER) --}}
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100 text-center hover-up border-bottom border-4 border-warning">
                        <div class="d-inline-flex bg-warning bg-opacity-10 p-3 rounded-circle mb-3">
                            <i class="bi bi-whatsapp fs-3 text-warning"></i>
                        </div>
                        <h5 class="fw-bold mb-2">{{ __('messages.phone_title') }}</h5>
                        <p class="text-muted small">+62 877-5245-8894<br>Mon-Fri, 9AM - 6PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 4: MAP & FORM (THE MAGIC PART)     --}}
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
                            src="https://maps.google.com/maps?q=Jakarta%20Selatan&t=&z=13&ie=UTF8&iwloc=&output=embed">
                        </iframe>
                    </div>
                </div>

                {{-- Right: Form to WhatsApp --}}
                <div class="col-lg-6 bg-white p-5">
                    <h3 class="fw-bold mb-4 text-dark">{{ __('messages.form_title') }}</h3>
                    
                    {{-- 
                         IMPORTANT:
                         1. Gw kasih ID 'whatsappForm' biar bisa dipanggil JS.
                         2. Gw kasih ID di setiap input biar value-nya bisa diambil.
                    --}}
                    <form id="whatsappForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted text-uppercase">{{ __('messages.form_name') }}</label>
                                <input type="text" id="wa-name" class="form-control bg-light border-0 py-3 px-4 rounded-3" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted text-uppercase">Company Name</label>
                                <input type="text" id="wa-company" class="form-control bg-light border-0 py-3 px-4 rounded-3" placeholder="Company Ltd.">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted text-uppercase">{{ __('messages.form_email') }}</label>
                                <input type="email" id="wa-email" class="form-control bg-light border-0 py-3 px-4 rounded-3" placeholder="john@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted text-uppercase">Service Type</label>
                                <select id="wa-service" class="form-select bg-light border-0 py-3 px-4 rounded-3" required>
                                    <option value="" disabled selected>Select a Service</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Mobile App Development">Mobile App Development</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Branding & Identity">Branding & Identity</option>
                                    <option value="Digital Strategy">Digital Strategy</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-muted text-uppercase">Budget Estimation</label>
                                <select id="wa-budget" class="form-select bg-light border-0 py-3 px-4 rounded-3" required>
                                    <option value="" disabled selected>Select Budget Range</option>
                                    <option value="< 10 Juta IDR">&lt; 10 Juta IDR</option>
                                    <option value="10 - 50 Juta IDR">10 - 50 Juta IDR</option>
                                    <option value="50 - 100 Juta IDR">50 - 100 Juta IDR</option>
                                    <option value="> 100 Juta IDR">&gt; 100 Juta IDR</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-muted text-uppercase">{{ __('messages.form_msg') }}</label>
                                <textarea id="wa-message" class="form-control bg-light border-0 py-3 px-4 rounded-3" rows="4" placeholder="Tell us about your goals..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-dark w-100 py-3 fw-bold rounded-pill shadow-lg" id="submit-lead">
                                    {{ __('messages.form_btn') }} <i class="bi bi-whatsapp ms-2"></i>
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
            {{-- UPDATED LINK & NUMBER --}}
            <a href="https://wa.me/6287752458894?text=Halo%20Sharesa%20Digital,%20saya%20tertarik%20dengan%20jasa%20Anda." target="_blank" class="btn btn-success btn-lg rounded-pill px-5 shadow-lg hover-scale">
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

{{-- ========================================== --}}
{{-- JAVASCRIPT BUAT REDIRECT KE WA             --}}
{{-- ========================================== --}}
@push('scripts')
<script src="{{ asset('js/tracking.js') }}"></script>
<script>
    document.getElementById('whatsappForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        // 1. Get Values
        const name    = document.getElementById('wa-name').value;
        const email   = document.getElementById('wa-email').value;
        const company = document.getElementById('wa-company').value || '-';
        const service = document.getElementById('wa-service').value;
        const budget  = document.getElementById('wa-budget').value;
        const message = document.getElementById('wa-message').value;

        // 2. Meta Hybrid Tracking (Lead)
        if (window.trackingService) {
            window.trackingService.track('Lead', 
                { 
                    value: 900000.00, 
                    currency: 'IDR',
                    content_name: service,
                    content_category: 'Service Lead'
                },
                {
                    em: email,
                    fn: name
                }
            );
        }

        // 3. Prepare WA Message
        const phoneNumber = '6287752458894';
        const text = `*Halo Sharesa Space!* 👋%0A%0A` +
                   `Saya tertarik untuk memulai project baru:%0A` +
                   `--------------------------------%0A` +
                   `👤 *Nama:* ${name}%0A` +
                   `🏢 *Company:* ${company}%0A` +
                   `📧 *Email:* ${email}%0A` +
                   `🛠️ *Layanan:* ${service}%0A` +
                   `💰 *Budget:* ${budget}%0A` +
                   `--------------------------------%0A` +
                   `📝 *Pesan tambahan:*%0A${message}`;

        const whatsappUrl = `https://wa.me/${phoneNumber}?text=${text}`;

        // 4. Buka WA (Delay dikit biar tracking sempat kejepit)
        setTimeout(() => {
            window.open(whatsappUrl, '_blank');
        }, 500);
    });
</script>
@endpush