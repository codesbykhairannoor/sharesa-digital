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
    {{-- SECTION 2: FOUNDER SPOTLIGHT               --}}
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
                                <label class="form-label small fw-bold text-muted text-uppercase">{{ __('messages.form_email') }}</label>
                                <input type="email" id="wa-email" class="form-control bg-light border-0 py-3 px-4 rounded-3" placeholder="john@example.com" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-muted text-uppercase">{{ __('messages.form_subject') }}</label>
                                <select id="wa-subject" class="form-select bg-light border-0 py-3 px-4 rounded-3">
                                    <option value="General Inquiry">General Inquiry</option>
                                    <option value="Project Proposal">Project Proposal</option>
                                    <option value="Partnership">Partnership</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-muted text-uppercase">{{ __('messages.form_msg') }}</label>
                                <textarea id="wa-message" class="form-control bg-light border-0 py-3 px-4 rounded-3" rows="5" placeholder="Tell us about your project..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-dark w-100 py-3 fw-bold rounded-pill">
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
<script>
    document.getElementById('whatsappForm').addEventListener('submit', function(e) {
        // 1. Cegah form submit biasa (biar halaman gak reload)
        e.preventDefault();

        // 2. Ambil value dari input
        let name    = document.getElementById('wa-name').value;
        let email   = document.getElementById('wa-email').value;
        let subject = document.getElementById('wa-subject').value;
        let message = document.getElementById('wa-message').value;

        // 3. Nomor Tujuan (Tanpa +, tanpa spasi, pake kode negara 62)
        let phoneNumber = '6287752458894';

        // 4. Buat Format Pesan (Pake enter/baris baru)
        let text = `*Halo Sharesa Digital!* 👋%0A%0A` +
                   `Saya ingin berdiskusi mengenai hal berikut:%0A` +
                   `--------------------------------%0A` +
                   `👤 *Nama:* ${name}%0A` +
                   `📧 *Email:* ${email}%0A` +
                   `🏷️ *Subjek:* ${subject}%0A` +
                   `--------------------------------%0A` +
                   `📝 *Pesan:*%0A${message}`;

        // 5. Buat URL WhatsApp
        let whatsappUrl = `https://wa.me/${phoneNumber}?text=${text}`;

        // 6. Buka di tab baru
        window.open(whatsappUrl, '_blank');
    });
</script>
@endpush