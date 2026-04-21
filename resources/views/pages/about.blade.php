@extends('layouts.app')

@section('title', __('messages.about'))

@section('content')

    {{-- ========================================== --}}
    {{-- SECTION 1: HERO ABOUT                      --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white position-relative overflow-hidden" style="padding-top: 120px !important; padding-bottom: 80px !important;">

        {{-- Subtle dot pattern --}}
        <div class="position-absolute top-0 start-0 w-100 h-100 pe-none" style="background-image: radial-gradient(rgba(30,42,57,0.05) 1px, transparent 1px); background-size: 25px 25px;"></div>

        <div class="container position-relative" style="z-index: 1;">
            <div class="row align-items-center g-5">

                {{-- Left: Text --}}
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="d-inline-flex align-items-center px-3 py-2 rounded-pill bg-light border mb-4 shadow-sm">
                        <i class="bi bi-info-circle-fill me-2 text-success" style="font-size: 0.8rem;"></i>
                        <span class="section-label text-muted">{{ __('messages.about_title') }}</span>
                    </div>

                    <h1 class="fw-bold mb-4 text-dark" style="font-size: clamp(2rem, 5vw, 3.2rem); line-height: 1.12; letter-spacing: -1px;">
                        {{ __('messages.about_hero_title') }}
                    </h1>

                    <p class="text-muted mb-5 border-start border-4 border-success ps-4" style="line-height: 1.85; font-size: 1.05rem;">
                        {{ __('messages.about_hero_desc') }}
                    </p>

                    {{-- Stats --}}
                    <div class="row g-3 pt-2">
                        <div class="col-6 col-sm-auto">
                            <div class="p-3 bg-light rounded-4 border-bottom border-4 border-success shadow-sm text-center" style="min-width: 120px;">
                                <h2 class="fw-black text-dark mb-0 counter-num" data-count="2024" data-from="2020">2024</h2>
                                <small class="text-muted section-label" style="font-size: 0.6rem;">Founded</small>
                            </div>
                        </div>
                        <div class="col-6 col-sm-auto">
                            <div class="p-3 bg-light rounded-4 border-bottom border-4 border-dark shadow-sm text-center" style="min-width: 120px;">
                                <h2 class="fw-black mb-0 about-stats-section" style="color: var(--sharesa-dark);">
                                    <span id="about-counter" data-count="50">0</span>+
                                </h2>
                                <small class="text-muted section-label" style="font-size: 0.6rem;">Projects</small>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right: Visual --}}
                <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-delay="100">
                    <div class="position-relative d-inline-block">

                        <div class="position-absolute top-50 start-50 translate-middle rounded-circle"
                             style="width: 320px; height: 320px; background: var(--sharesa-green); filter: blur(90px); opacity: 0.1; z-index: 0;"></div>

                        {{-- Main Icon Box --}}
                        <div class="position-relative" style="z-index: 1; animation: float 6s ease-in-out infinite;">
                            <div class="bg-white rounded-5 shadow-lg border d-flex align-items-center justify-content-center mx-auto"
                                 style="width: 240px; height: 240px; border-color: rgba(0,0,0,0.06) !important;">
                                <i class="bi bi-cpu-fill" style="font-size: 5rem; color: var(--sharesa-dark);"></i>
                            </div>

                            {{-- Mini float: Palette --}}
                            <div class="position-absolute bg-white shadow-sm rounded-4 p-3 border"
                                 style="top: -15px; left: -20px; animation: float 5s ease-in-out infinite 1s; border-color: rgba(0,0,0,0.05) !important;">
                                <i class="bi bi-palette-fill text-primary fs-4"></i>
                            </div>

                            {{-- Mini float: Code --}}
                            <div class="position-absolute bg-white shadow-sm rounded-4 p-3 border"
                                 style="bottom: -15px; right: -20px; animation: float 5s ease-in-out infinite 2.5s; border-color: rgba(0,0,0,0.05) !important;">
                                <i class="bi bi-braces text-success fs-4"></i>
                            </div>
                        </div>

                        {{-- Quote Card --}}
                        <div class="mt-5 bg-dark text-white p-4 rounded-4 shadow-xl position-relative" style="max-width: 320px; margin: 30px auto 0;">
                            <div style="font-size: 3.5rem; line-height: 1; color: var(--sharesa-green); opacity: 0.25; font-family: Georgia, serif; margin-bottom: -1rem;">"</div>
                            <p class="fst-italic mb-3 small opacity-75 position-relative">"Innovation distinguishes between a leader and a follower."</p>
                            <div class="d-flex align-items-center gap-2 justify-content-center">
                                <div style="width: 22px; height: 2px; background: var(--sharesa-green);"></div>
                                <span class="section-label opacity-60" style="font-size: 0.6rem;">Khairan Noor F.</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 2: VISION & MISSION                --}}
    {{-- ========================================== --}}
    <section class="py-5 text-white position-relative" style="background-color: var(--sharesa-dark);">
        <div class="container py-5 position-relative" style="z-index: 1;">
            <div class="row g-5 align-items-center">

                {{-- Vision --}}
                <div class="col-lg-5" data-aos="fade-right">
                    <span class="section-label text-success d-block mb-3">The Goal</span>
                    <h2 class="fw-bold mb-4" style="font-size: 2.2rem; letter-spacing: -0.5px;">{{ __('messages.vision_title') }}</h2>
                    <div class="border-start border-3 ps-4 py-1" style="border-color: var(--sharesa-green) !important;">
                        <p class="text-white-50 fs-5 lh-base fst-italic mb-0">
                            "{{ __('messages.vision_desc') }}"
                        </p>
                    </div>
                </div>

                {{-- Mission --}}
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="100">
                    <span class="section-label text-success d-block mb-3">The Path</span>
                    <h2 class="fw-bold mb-4" style="font-size: 2.2rem; letter-spacing: -0.5px;">{{ __('messages.mission_title') }}</h2>
                    <div class="d-grid gap-3">
                        @foreach([
                            ['icon' => 'bi-check-circle-fill', 'key' => 'mission_1'],
                            ['icon' => 'bi-people-fill', 'key' => 'mission_2'],
                            ['icon' => 'bi-lightbulb-fill', 'key' => 'mission_3'],
                        ] as $i => $m)
                            <div class="d-flex mission-item p-3 rounded-3" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08); transition: 0.3s;" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                                <i class="bi {{ $m['icon'] }} text-success me-3 mt-1" style="font-size: 1.1rem; flex-shrink: 0;"></i>
                                <span style="font-size: 1rem; line-height: 1.6;">{{ __('messages.' . $m['key']) }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 3: CORE VALUES                     --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-light">
        <div class="container py-5 text-center">
            <div data-aos="fade-up">
                <span class="section-label text-success d-block mb-3">Our DNA</span>
                <h2 class="fw-bold mb-2" style="color: var(--sharesa-dark); letter-spacing: -0.5px;">{{ __('messages.values_title') }}</h2>
                <div class="mx-auto mt-3 mb-5 rounded-pill" style="width: 50px; height: 3px; background: var(--sharesa-green);"></div>
            </div>

            <div class="row g-4">
                @foreach([
                    ['num' => '01', 'icon' => 'bi-lightbulb-fill', 'color' => '#f59e0b', 'border' => 'border-warning', 'title' => 'val_1_title', 'desc' => 'val_1_desc'],
                    ['num' => '02', 'icon' => 'bi-shield-check', 'color' => '#3b82f6', 'border' => 'border-primary', 'title' => 'val_2_title', 'desc' => 'val_2_desc'],
                    ['num' => '03', 'icon' => 'bi-heart-fill', 'color' => '#ef4444', 'border' => 'border-danger', 'title' => 'val_3_title', 'desc' => 'val_3_desc'],
                ] as $i => $val)
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                        <div class="bg-white p-5 rounded-4 h-100 value-card position-relative overflow-hidden" style="border-top: 4px solid {{ $val['color'] }}; box-shadow: 0 2px 20px rgba(0,0,0,0.05);">
                            <div class="position-absolute top-0 end-0 p-4 fw-black" style="font-size: 4rem; opacity: 0.05; color: {{ $val['color'] }}; font-family: 'Outfit', sans-serif; line-height: 1;">{{ $val['num'] }}</div>
                            <div class="mb-4 rounded-circle d-inline-flex p-3" style="background: rgba(0,0,0,0.04);">
                                <i class="bi {{ $val['icon'] }} fs-1" style="color: {{ $val['color'] }};"></i>
                            </div>
                            <span class="section-label d-block mb-2" style="color: {{ $val['color'] }};">{{ $val['num'] }}</span>
                            <h4 class="fw-bold mb-3" style="font-size: 1.1rem;">{{ __('messages.' . $val['title']) }}</h4>
                            <p class="text-muted mb-0 small" style="line-height: 1.75;">{{ __('messages.' . $val['desc']) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 4: TEAM                            --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-label text-success d-block mb-3">{{ __('messages.team_badge') }}</span>
                <h2 class="fw-bold" style="letter-spacing: -0.5px;">{{ __('messages.team_title') }}</h2>
                <p class="text-muted mt-2">{{ __('messages.team_subtitle') }}</p>
            </div>

            <div class="row g-4 justify-content-center">

                {{-- Lead --}}
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card border-0 rounded-4 h-100 overflow-hidden team-card shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-4 mt-2 position-relative d-inline-block">
                                <img src="https://github.com/codesbykhairannoor.png"
                                     class="rounded-circle shadow"
                                     style="width: 110px; height: 110px; object-fit: cover; border: 4px solid var(--sharesa-green);"
                                     alt="Technical Director">
                                <div class="position-absolute bottom-0 end-0 rounded-circle bg-success border border-white border-3 d-flex align-items-center justify-content-center" style="width: 24px; height: 24px;">
                                    <i class="bi bi-check text-white" style="font-size: 0.65rem;"></i>
                                </div>
                            </div>
                            <h5 class="fw-bold mb-1" style="font-size: 1rem;">{{ __('messages.team_lead_name') }}</h5>
                            <small class="text-success text-uppercase fw-bold section-label mb-3 d-block">{{ __('messages.team_lead_role') }}</small>
                            <p class="text-muted small mb-3" style="line-height: 1.7;">{{ __('messages.team_lead_desc') }}</p>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="https://www.linkedin.com/in/khairannoorfadhlillah/" target="_blank" class="social-chip"><i class="bi bi-linkedin"></i></a>
                                <a href="https://github.com/codesbykhairannoor" target="_blank" class="social-chip"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Partners --}}
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 rounded-4 h-100 overflow-hidden team-card" style="background: var(--sharesa-dark);">
                        <div class="card-body p-4 text-center d-flex flex-column justify-content-center">
                            <div class="mb-4 rounded-circle d-inline-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px; background: rgba(0,255,140,0.1); border: 2px solid rgba(0,255,140,0.2);">
                                <i class="bi bi-globe2 fs-2 text-success"></i>
                            </div>
                            <h5 class="fw-bold mb-1 text-white" style="font-size: 1rem;">{{ __('messages.team_partner_name') }}</h5>
                            <small class="text-success text-uppercase fw-bold section-label mb-3 d-block">{{ __('messages.team_partner_role') }}</small>
                            <p class="text-white-50 small mb-0" style="line-height: 1.7;">{{ __('messages.team_partner_desc') }}</p>
                        </div>
                    </div>
                </div>

                {{-- AI --}}
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 rounded-4 h-100 overflow-hidden team-card shadow-sm border">
                        <div class="card-body p-4 text-center d-flex flex-column justify-content-center">
                            <div class="mb-4 rounded-circle d-inline-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px; background: rgba(0,255,140,0.08); border: 2px solid rgba(0,204,112,0.2);">
                                <i class="bi bi-cpu text-success fs-2"></i>
                            </div>
                            <h5 class="fw-bold mb-1" style="font-size: 1rem;">{{ __('messages.team_ai_name') }}</h5>
                            <small class="text-success text-uppercase fw-bold section-label mb-3 d-block">{{ __('messages.team_ai_role') }}</small>
                            <p class="text-muted small mb-0" style="line-height: 1.7;">{{ __('messages.team_ai_desc') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 5: MILESTONES                      --}}
    {{-- ========================================== --}}
    <section class="py-5 position-relative" style="background-color: var(--sharesa-dark);">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-label text-success d-block mb-3">Journey</span>
                <h2 class="fw-bold text-white" style="letter-spacing: -0.5px;">{{ __('messages.milestone_title') }}</h2>
            </div>

            <div class="position-relative">
                {{-- Gradient line --}}
                <div class="position-absolute top-50 start-0 w-100 d-none d-md-block" style="z-index: 0; transform: translateY(-100px);">
                    <div style="height: 2px; background: linear-gradient(90deg, transparent 5%, rgba(0,255,140,0.4) 30%, rgba(0,255,140,0.4) 70%, transparent 95%);"></div>
                </div>

                <div class="row g-4 text-center position-relative" style="z-index: 1;">
                    @foreach([
                        ['year' => 'mile_1_year', 'color' => 'rgba(255,255,255,0.2)', 'active' => false, 'label' => 'Inception', 'desc' => 'mile_1_desc'],
                        ['year' => 'mile_2_year', 'color' => 'var(--sharesa-green)', 'active' => true, 'label' => 'Rapid Growth', 'desc' => 'mile_2_desc'],
                        ['year' => 'mile_3_year', 'color' => 'rgba(255,255,255,0.2)', 'active' => false, 'label' => 'Global Reach', 'desc' => 'mile_3_desc'],
                    ] as $i => $mile)
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                            <div class="d-inline-flex align-items-center justify-content-center mb-3 rounded-circle border border-4"
                                style="width: {{ $mile['active'] ? '26' : '18' }}px; height: {{ $mile['active'] ? '26' : '18' }}px; background: {{ $mile['color'] }}; border-color: {{ $mile['active'] ? 'var(--sharesa-green)' : 'rgba(255,255,255,0.2)' }} !important;">
                            </div>
                            <h2 class="fw-black mb-1" style="font-size: 4rem; opacity: {{ $mile['active'] ? '1' : '0.2' }}; color: {{ $mile['active'] ? 'var(--sharesa-green)' : '#fff' }}; letter-spacing: -2px; line-height: 1;">
                                {{ __('messages.' . $mile['year']) }}
                            </h2>
                            <h5 class="fw-bold text-white mt-2 mb-2">{{ $mile['label'] }}</h5>
                            <p class="text-white-50 small px-4 mb-0" style="line-height: 1.7;">{{ __('messages.' . $mile['desc']) }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
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
                        <h2 class="fw-bold text-dark" style="letter-spacing: -0.5px;">Seputar Sharesa Space</h2>
                    </div>

                    <div class="accordion" id="aboutFaq" data-aos="fade-up" data-aos-delay="80">
                        @for($i = 1; $i <= 7; $i++)
                            <div class="accordion-item border-0 mb-3 rounded-4 overflow-hidden" style="box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{ $i > 1 ? 'collapsed' : '' }} fw-bold rounded-4 bg-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#afaq{{ $i }}" style="font-size: 1rem;">
                                        {{ __('messages.about_faq_' . $i . '_q') }}
                                    </button>
                                </h2>
                                <div id="afaq{{ $i }}" class="accordion-collapse collapse {{ $i == 1 ? 'show' : '' }}" data-bs-parent="#aboutFaq">
                                    <div class="accordion-body text-secondary bg-white pt-0" style="line-height: 1.8; font-size: 0.95rem;">
                                        {{ __('messages.about_faq_' . $i . '_a') }}
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

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-14px); }
    }

    .mission-item:hover { background: rgba(0,255,140,0.05) !important; border-color: rgba(0,255,140,0.2) !important; }

    .value-card { transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1); cursor: default; }
    .value-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important; }

    .team-card { transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1); }
    .team-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.12) !important; }

    .social-chip {
        width: 36px; height: 36px;
        background: #f1f5f9;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #64748b;
        text-decoration: none;
        transition: all 0.25s;
        font-size: 0.95rem;
    }
    .social-chip:hover {
        background: var(--sharesa-dark);
        color: var(--sharesa-green);
        transform: translateY(-3px);
    }
</style>
@endsection

@push('scripts')
<script>
    // Counter for about projects stat
    const aboutCounterEl = document.getElementById('about-counter');
    if (aboutCounterEl) {
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.getAttribute('data-count'));
                    let count = 0;
                    const interval = setInterval(() => {
                        count += 2;
                        entry.target.textContent = count;
                        if (count >= target) { entry.target.textContent = target; clearInterval(interval); }
                    }, 30);
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        obs.observe(aboutCounterEl);
    }
</script>
@endpush