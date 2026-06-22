@extends('layouts.app')

@section('title', __('messages.contact'))

@section('content')

    {{-- ========================================== --}}
    {{-- SECTION 1: HERO (Dark)                     --}}
    {{-- ========================================== --}}
    <section class="position-relative overflow-hidden"
        style="background-color: var(--sharesa-dark); margin-top: -85px; padding-top: 160px; padding-bottom: 90px;">

        {{-- Grid pattern --}}
        <div class="position-absolute top-0 start-0 w-100 h-100 pe-none" style="background-image: linear-gradient(rgba(0,255,140,0.06) 1px, transparent 1px), linear-gradient(to right, rgba(0,255,140,0.06) 1px, transparent 1px); background-size: 50px 50px;"></div>

        {{-- Radial glow --}}
        <div class="position-absolute top-50 start-50 translate-middle pe-none" style="width: 700px; height: 400px; background: radial-gradient(ellipse, rgba(0,255,140,0.08) 0%, transparent 70%); pointer-events: none;"></div>

        <div class="container position-relative text-white text-center" style="z-index: 1;">
            <span class="section-label text-success d-block mb-3" data-aos="fade-up">24/7 Support</span>
            <h1 class="fw-bold mt-2 mb-4" data-aos="fade-up" data-aos-delay="80"
                style="font-size: clamp(2.2rem, 5vw, 3.5rem); letter-spacing: -1px;">
                {{ __('messages.contact_header') }}
            </h1>
            <p class="text-white-50 col-lg-5 mx-auto mb-0" data-aos="fade-up" data-aos-delay="160"
                style="font-size: 1.05rem; line-height: 1.8;">
                {{ __('messages.contact_desc') }}
            </p>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 2: DIRECTOR'S NOTE                 --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-9" data-aos="fade-up">
                    <div class="card border-0 rounded-5 overflow-hidden shadow-lg">
                        <div class="row g-0 align-items-stretch">

                            {{-- Left: Brand Panel --}}
                            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center p-5 text-center"
                                style="background: var(--sharesa-green);">
                                {{-- Director Photo --}}
                                <img src="https://github.com/codesbykhairannoor.png"
                                     class="rounded-circle shadow mb-4 border border-4 border-dark border-opacity-25"
                                     style="width: 90px; height: 90px; object-fit: cover;"
                                     alt="Director">
                                <h5 class="fw-bold text-dark mb-1">{{ __('messages.ceo_name') }}</h5>
                                <small class="text-dark opacity-60 fw-semibold" style="letter-spacing: 0.5px; font-size: 0.7rem;">Technical Director</small>
                                <div class="mt-3 px-3 py-1 rounded-pill bg-dark text-white" style="font-size: 0.72rem; letter-spacing: 1px;">Est. 2025</div>
                            </div>

                            {{-- Right: Quote --}}
                            <div class="col-md-8 bg-dark">
                                <div class="p-5 h-100 d-flex flex-column justify-content-center">
                                    <span class="section-label text-success mb-4 d-block">Director's Note</span>
                                    <div style="font-size: 3.5rem; line-height: 1; color: var(--sharesa-green); opacity: 0.2; font-family: Georgia, serif; margin-bottom: -1.2rem;">"</div>
                                    <h4 class="fst-italic text-white lh-base position-relative mb-4" style="z-index: 1; font-size: 1.15rem; font-weight: 400;">
                                        "{{ __('messages.ceo_quote') }}"
                                    </h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <div style="width: 30px; height: 2px; background: var(--sharesa-green);"></div>
                                        <span class="text-success fw-bold small">{{ __('messages.ceo_name') }}</span>
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
    {{-- SECTION 3: CONTACT INFO CARDS              --}}
    {{-- ========================================== --}}
    <section class="py-5" style="background-color: #f1f5f9;">
        <div class="container py-4">
            <div class="row g-4">

                {{-- Address --}}
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="contact-info-card bg-white p-4 rounded-4 h-100 text-center" style="border-bottom: 4px solid #00cc70; box-shadow: 0 2px 16px rgba(0,0,0,0.06); transition: all 0.35s;">
                        <div class="d-inline-flex p-3 rounded-circle mb-3" style="background: rgba(0,204,112,0.1);">
                            <i class="bi bi-geo-alt-fill fs-3 text-success"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="font-size: 0.95rem;">{{ __('messages.addr_title') }}</h5>
                        <p class="text-muted small mb-0" style="line-height: 1.75;">Jakarta Selatan<br>Indonesia</p>
                    </div>
                </div>

                {{-- Email --}}
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="80">
                    <div class="contact-info-card bg-white p-4 rounded-4 h-100 text-center" style="border-bottom: 4px solid #3b82f6; box-shadow: 0 2px 16px rgba(0,0,0,0.06); transition: all 0.35s;">
                        <div class="d-inline-flex p-3 rounded-circle mb-3" style="background: rgba(59,130,246,0.1);">
                            <i class="bi bi-envelope-fill fs-3 text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="font-size: 0.95rem;">{{ __('messages.email_title') }}</h5>
                        <p class="text-muted small mb-0" style="line-height: 1.75;">
                            <a href="mailto:hello@sharesa.id" class="text-muted text-decoration-none">hello@sharesa.id</a><br>
                            <a href="mailto:support@sharesa.id" class="text-muted text-decoration-none">support@sharesa.id</a>
                        </p>
                    </div>
                </div>

                {{-- Phone / WA --}}
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="160">
                    <div class="contact-info-card bg-white p-4 rounded-4 h-100 text-center" style="border-bottom: 4px solid #25d366; box-shadow: 0 2px 16px rgba(0,0,0,0.06); transition: all 0.35s;">
                        <div class="d-inline-flex p-3 rounded-circle mb-3" style="background: rgba(37,211,102,0.1);">
                            <i class="bi bi-whatsapp fs-3" style="color: #25d366;"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="font-size: 0.95rem;">{{ __('messages.phone_title') }}</h5>
                        <p class="text-muted small mb-0" style="line-height: 1.75;">
                            0823-9512-3470<br>
                            <span style="font-size: 0.78rem;">Mon–Fri, 9AM – 6PM WIB</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 4: MAP + FORM                      --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-0 rounded-5 overflow-hidden shadow-lg border" style="border-color: #e2e8f0 !important;">

                {{-- Map --}}
                <div class="col-lg-6" data-aos="fade-right">
                    <div style="height: 100%; min-height: 520px;">
                        <iframe width="100%" height="100%"
                            style="border:0; display:block; filter: grayscale(0.8) contrast(1.1) opacity(0.85);"
                            loading="lazy" allowfullscreen
                            src="https://maps.google.com/maps?q=Jakarta%20Selatan&t=&z=13&ie=UTF8&iwloc=&output=embed">
                        </iframe>
                    </div>
                </div>

                {{-- Form --}}
                <div class="col-lg-6 bg-white p-5" data-aos="fade-left">
                    <span class="section-label text-success d-block mb-2">Get In Touch</span>
                    <h3 class="fw-bold mb-4 text-dark" style="letter-spacing: -0.5px;">{{ __('messages.form_title') }}</h3>

                    <form id="whatsappForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted" style="font-size: 0.75rem; letter-spacing: 0.5px;">{{ __('messages.form_name') }}</label>
                                <input type="text" id="wa-name" class="form-control contact-input border-0 py-3 px-4 rounded-3" placeholder="John Doe" required style="background: #f8fafc;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted" style="font-size: 0.75rem; letter-spacing: 0.5px;">Company Name</label>
                                <input type="text" id="wa-company" class="form-control contact-input border-0 py-3 px-4 rounded-3" placeholder="Company Ltd." style="background: #f8fafc;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted" style="font-size: 0.75rem; letter-spacing: 0.5px;">{{ __('messages.form_email') }}</label>
                                <input type="email" id="wa-email" class="form-control contact-input border-0 py-3 px-4 rounded-3" placeholder="john@example.com" required style="background: #f8fafc;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted" style="font-size: 0.75rem; letter-spacing: 0.5px;">Phone Number</label>
                                <input type="tel" id="wa-phone" class="form-control contact-input border-0 py-3 px-4 rounded-3" placeholder="08123456789" required style="background: #f8fafc;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted" style="font-size: 0.75rem; letter-spacing: 0.5px;">Service Type</label>
                                <select id="wa-service" class="form-select contact-input border-0 py-3 px-4 rounded-3" required style="background: #f8fafc;">
                                    <option value="" disabled selected>Select a Service</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Mobile App Development">Mobile App Development</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Branding & Identity">Branding & Identity</option>
                                    <option value="Digital Strategy">Digital Strategy</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted" style="font-size: 0.75rem; letter-spacing: 0.5px;">Budget Estimation</label>
                                <select id="wa-budget" class="form-select contact-input border-0 py-3 px-4 rounded-3" required style="background: #f8fafc;">
                                    <option value="" disabled selected>Select Budget Range</option>
                                    <option value="< 10 Juta IDR">&lt; 10 Juta IDR</option>
                                    <option value="10 - 50 Juta IDR">10 - 50 Juta IDR</option>
                                    <option value="50 - 100 Juta IDR">50 - 100 Juta IDR</option>
                                    <option value="> 100 Juta IDR">&gt; 100 Juta IDR</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-muted" style="font-size: 0.75rem; letter-spacing: 0.5px;">{{ __('messages.form_msg') }}</label>
                                <textarea id="wa-message" class="form-control contact-input border-0 py-3 px-4 rounded-3"
                                    rows="4" placeholder="Tell us about your goals..." required style="background: #f8fafc;"></textarea>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" id="submit-lead"
                                    class="btn btn-sharesa-primary w-100 py-3 fw-bold rounded-pill shadow-sm">
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
    {{-- SECTION 5: CTA WHATSAPP                    --}}
    {{-- ========================================== --}}
    <section class="py-5 position-relative" style="background-color: var(--sharesa-dark);">
        <div class="position-absolute top-0 start-0 w-100 h-100 pe-none" style="background-image: radial-gradient(rgba(0,255,140,0.08) 1px, transparent 1px); background-size: 28px 28px;"></div>
        <div class="container text-center py-4 position-relative" style="z-index: 1;" data-aos="fade-up">
            <i class="bi bi-whatsapp fs-1 mb-3 d-block" style="color: #25d366;"></i>
            <h2 class="fw-bold text-white mb-2" style="letter-spacing: -0.5px;">Need a faster response?</h2>
            <p class="text-white-50 mb-4">Chat directly with our team via WhatsApp. Response time &lt; 1 hour.</p>
            <a href="https://wa.me/6282395123470?text=Halo%20Sharesa%20Digital,%20saya%20tertarik%20dengan%20jasa%20Anda."
                target="_blank" class="btn btn-lg rounded-pill px-5 fw-bold"
                style="background: #25d366; color: white; box-shadow: 0 10px 30px rgba(37,211,102,0.35); transition: all 0.3s;">
                <i class="bi bi-whatsapp me-2"></i> Chat on WhatsApp
            </a>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 6: FAQ                             --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5" data-aos="fade-up">
                        <span class="section-label text-success d-block mb-3">FAQ</span>
                        <h2 class="fw-bold text-dark" style="letter-spacing: -0.5px;">Informasi Konsultasi</h2>
                    </div>

                    <div class="accordion" id="contactFaq" data-aos="fade-up" data-aos-delay="80">
                        @for($i = 1; $i <= 7; $i++)
                            <div class="accordion-item border-0 mb-3 rounded-4 overflow-hidden" style="box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{ $i > 1 ? 'collapsed' : '' }} fw-bold rounded-4 bg-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#cfaq{{ $i }}" style="font-size: 1rem;">
                                        {{ __('messages.contact_faq_' . $i . '_q') }}
                                    </button>
                                </h2>
                                <div id="cfaq{{ $i }}" class="accordion-collapse collapse {{ $i == 1 ? 'show' : '' }}" data-bs-parent="#contactFaq">
                                    <div class="accordion-body text-secondary bg-white pt-0" style="line-height: 1.8; font-size: 0.95rem;">
                                        {{ __('messages.contact_faq_' . $i . '_a') }}
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
<style>
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

    /* Contact Info Cards */
    .contact-info-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.1) !important;
    }

    /* Form inputs */
    .contact-input {
        transition: all 0.25s ease;
    }
    .contact-input:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 255, 140, 0.2) !important;
        border: 1px solid rgba(0, 204, 112, 0.5) !important;
        background: #fff !important;
    }

    /* Submit button */
    #submit-lead:hover {
        background: var(--sharesa-green) !important;
        border-color: var(--sharesa-green) !important;
        color: var(--sharesa-dark) !important;
        box-shadow: 0 8px 25px rgba(0, 255, 140, 0.35) !important;
        transform: translateY(-2px);
    }
</style>
@endsection

@push('scripts')
<script src="{{ asset('js/tracking.js') }}"></script>
<script>
    document.getElementById('whatsappForm').addEventListener('submit', async function (e) {
        e.preventDefault();

        const name = document.getElementById('wa-name').value;
        const email = document.getElementById('wa-email').value;
        const phone = document.getElementById('wa-phone').value;
        const company = document.getElementById('wa-company').value || '-';
        const service = document.getElementById('wa-service').value;
        const budget = document.getElementById('wa-budget').value;
        const message = document.getElementById('wa-message').value;

        if (window.trackingService) {
            const submitBtn = document.getElementById('submit-lead');
            const originalText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';

            try {
                await window.trackingService.track('Lead', {
                    value: 900000.00, currency: 'IDR',
                    service_type: service, budget_value: budget,
                    content_name: service, content_category: 'Service Lead'
                }, { em: email, ph: phone, fn: name });

                await window.trackingService.saveIdentity(email, phone);
            } catch (err) {
                console.error('Lead tracking failed', err);
            } finally {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }
        }

        const phoneNumber = '6282395123470';
        const text = `Halo Sharesa Space! Saya ${name} dari ${company}. Saya tertarik dengan layanan ${service} dengan estimasi budget ${budget}. Mari diskusikan bagaimana kita bisa berkolaborasi!`;
        window.location.href = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(text)}`;
    });
</script>
@endpush