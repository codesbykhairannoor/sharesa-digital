@extends('layouts.app')

@section('title', __('messages.portfolios'))

@section('content')

    {{-- ========================================== --}}
    {{-- SECTION 1: HERO HEADER (Dark)              --}}
    {{-- ========================================== --}}
    <section class="position-relative overflow-hidden"
        style="background-color: var(--sharesa-dark); margin-top: -85px; padding-top: 150px; padding-bottom: 80px;">

        <div class="position-absolute top-0 start-0 w-100 h-100 pe-none" style="background-image: linear-gradient(rgba(0,255,140,0.06) 1px, transparent 1px), linear-gradient(to right, rgba(0,255,140,0.06) 1px, transparent 1px); background-size: 50px 50px;"></div>

        <div class="container position-relative text-center text-white" style="z-index: 1;">
            <span class="section-label text-success d-block mb-3" data-aos="fade-up">{{ __('messages.port_header') }}</span>
            <h1 class="fw-bold mt-2 mb-3" data-aos="fade-up" data-aos-delay="80"
                style="font-size: clamp(2.2rem, 5vw, 3.5rem); letter-spacing: -1px; line-height: 1.15;">
                {{ __('messages.port_title') }}
            </h1>
            <p class="text-white-50 col-md-7 col-lg-5 mx-auto mb-0" data-aos="fade-up" data-aos-delay="160"
                style="font-size: 1.05rem; line-height: 1.8;">
                {{ __('messages.port_desc') }}
            </p>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 2: FILTER & GRID                   --}}
    {{-- ========================================== --}}
    <div class="container py-5">

        {{-- Search --}}
        <div class="row justify-content-center mb-4" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="input-group rounded-pill overflow-hidden" style="box-shadow: 0 4px 20px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                    <span class="input-group-text bg-white border-0 ps-4">
                        <i class="bi bi-search text-muted"></i>
                    </span>
                    <input type="text" id="portfolio-search"
                        class="form-control border-0 py-3 px-2"
                        placeholder="Search by name or tech stack..."
                        style="outline: none; box-shadow: none;">
                    <button class="btn btn-sharesa-primary px-4 fw-bold rounded-pill" type="button" id="search-btn">
                        Search
                    </button>
                </div>
            </div>
        </div>

        {{-- Filter Buttons --}}
        <div class="d-flex justify-content-center flex-wrap mb-5 gap-2" id="portfolio-filters" data-aos="fade-up" data-aos-delay="50">
            <button class="btn btn-filter active px-4 py-2 rounded-pill fw-bold" data-filter="all">All Projects</button>
            <button class="btn btn-filter px-4 py-2 rounded-pill fw-bold" data-filter="Web Development">Web Dev</button>
            <button class="btn btn-filter px-4 py-2 rounded-pill fw-bold" data-filter="UI/UX Design">UI/UX Design</button>
            <button class="btn btn-filter px-4 py-2 rounded-pill fw-bold" data-filter="Branding">Branding</button>
            <button class="btn btn-filter px-4 py-2 rounded-pill fw-bold" data-filter="Mobile App">Mobile App</button>
        </div>

        {{-- Grid --}}
        <div class="row g-4" id="portfolio-grid">
            @forelse($portfolios as $i => $item)
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="{{ $item->category }}"
                    data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 80 }}">
                    <div class="card border-0 rounded-4 overflow-hidden h-100 port-card shadow-sm">

                        {{-- Image --}}
                        <div class="position-relative overflow-hidden port-img-wrapper">
                            <img src="{{ $item->image ?? 'https://placehold.co/600x400/1e2a39/00ff8c?text=Sharesa+Project' }}"
                                class="card-img-top port-img"
                                alt="{{ $item->title }}"
                                style="height: 240px; object-fit: cover; transition: transform 0.6s cubic-bezier(0.4,0,0.2,1);">

                            @if($item->project_url)
                                <div class="port-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center gap-2">
                                    <a href="{{ $item->project_url }}" target="_blank"
                                        class="btn btn-light rounded-pill fw-bold shadow px-4"
                                        style="font-size: 0.82rem;">
                                        <i class="bi bi-eye-fill me-1"></i> View Site
                                    </a>
                                    <a href="https://wa.me/6287752458894?text=Halo%20Sharesa!%20Saya%20tertarik%20dengan%20project%20{{ $item->title }}."
                                        target="_blank"
                                        class="btn btn-success rounded-pill fw-bold shadow px-4 wa-portfolio-track"
                                        data-project="{{ $item->title }}"
                                        style="font-size: 0.82rem;">
                                        <i class="bi bi-whatsapp me-1"></i> Tanya WA
                                    </a>
                                </div>
                            @endif

                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge bg-white text-dark border px-3 py-2 rounded-pill fw-bold shadow-sm"
                                    style="font-size: 0.75rem; letter-spacing: 0.5px;">
                                    {{ $item->category }}
                                </span>
                            </div>
                        </div>

                        {{-- Body --}}
                        <div class="card-body p-4 d-flex flex-column bg-white">
                            <h4 class="fw-bold mb-1 text-dark project-title" style="font-size: 1.05rem;">{{ $item->title }}</h4>

                            @if($item->client_name)
                                <small class="text-muted mb-2 d-block">
                                    <i class="bi bi-briefcase me-1 text-success"></i>
                                    {{ __('messages.port_client') }}: <strong>{{ $item->client_name }}</strong>
                                </small>
                            @endif

                            <p class="text-secondary small mb-4 flex-grow-1" style="line-height: 1.65;">
                                {{ Str::limit($item->description, 100) }}
                            </p>

                            <div class="mt-auto pt-3 border-top">
                                <div class="d-flex gap-2 mb-3">
                                    <a href="https://wa.me/6287752458894?text=Halo%20Sharesa!%20Saya%20ingin%20tanya%20estimasi%20harga%20untuk%20project%20{{ $item->title }}."
                                        target="_blank"
                                        class="btn btn-sm btn-outline-dark rounded-pill px-3 fw-bold flex-grow-1 wa-portfolio-track"
                                        data-project="{{ $item->title }}" data-type="Req Harga">
                                        Req Harga
                                    </a>
                                    <a href="https://wa.me/6287752458894?text=Halo%20Sharesa!%20Saya%20ingin%20konsultasi%20mengenai%20project%20{{ $item->title }}."
                                        target="_blank"
                                        class="btn btn-sm btn-sharesa-primary rounded-pill px-3 fw-bold flex-grow-1 wa-portfolio-track"
                                        data-project="{{ $item->title }}" data-type="Hubungi WA">
                                        Hubungi WA
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="text-decoration-none fw-bold small d-flex align-items-center gap-1"
                                        style="color: var(--sharesa-dark); font-size: 0.82rem;">
                                        View Details <i class="bi bi-arrow-right"></i>
                                    </a>
                                    @if($item->project_url)
                                        <a href="{{ $item->project_url }}" target="_blank"
                                            class="btn btn-sm rounded-pill px-3 fw-bold"
                                            style="background: var(--sharesa-green); color: var(--sharesa-dark); font-size: 0.72rem;">
                                            <i class="bi bi-box-arrow-up-right me-1"></i> Live
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5" id="empty-state" data-aos="fade-up">
                    <div class="bg-white p-5 rounded-4 d-inline-block shadow-sm" style="border: 2px dashed #e2e8f0;">
                        <i class="bi bi-cone-striped display-4 text-warning mb-3 d-block"></i>
                        <h4 class="fw-bold text-muted">{{ __('messages.port_empty') }}</h4>
                        <p class="text-secondary small mb-0">Projects will appear here once added.</p>
                    </div>
                </div>
            @endforelse
        </div>

    </div>

    {{-- ========================================== --}}
    {{-- SECTION 4: FAQ                             --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5" data-aos="fade-up">
                        <span class="section-label text-success d-block mb-3">FAQ</span>
                        <h2 class="fw-bold text-dark" style="letter-spacing: -0.5px;">Tentang Hasil Kerja Kami</h2>
                    </div>

                    <div class="accordion" id="portFaq" data-aos="fade-up" data-aos-delay="80">
                        @for($i = 1; $i <= 7; $i++)
                            <div class="accordion-item border-0 mb-3 rounded-4 overflow-hidden" style="box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{ $i > 1 ? 'collapsed' : '' }} fw-bold rounded-4 bg-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#pfaq{{ $i }}" style="font-size: 1rem;">
                                        {{ __('messages.port_faq_' . $i . '_q') }}
                                    </button>
                                </h2>
                                <div id="pfaq{{ $i }}" class="accordion-collapse collapse {{ $i == 1 ? 'show' : '' }}" data-bs-parent="#portFaq">
                                    <div class="accordion-body text-secondary bg-white pt-0" style="line-height: 1.8; font-size: 0.95rem;">
                                        {{ __('messages.port_faq_' . $i . '_a') }}
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

    /* Filter */
    .btn-filter {
        background: #f8f9fa;
        color: #6c757d;
        border: 1px solid #dee2e6;
        transition: all 0.3s ease;
        font-size: 0.85rem;
    }
    .btn-filter:hover, .btn-filter.active {
        background-color: var(--sharesa-green) !important;
        color: var(--sharesa-dark) !important;
        border-color: var(--sharesa-green);
        box-shadow: 0 4px 15px rgba(0, 255, 140, 0.25);
    }

    /* Cards */
    .portfolio-item { transition: all 0.4s ease-in-out; }
    .port-card { transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); }
    .port-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important; }
    .port-card:hover .port-img { transform: scale(1.07); }

    /* Overlay */
    .port-overlay {
        background: rgba(30, 42, 57, 0.72);
        backdrop-filter: blur(2px);
        opacity: 0;
        transition: 0.35s ease;
        z-index: 2;
    }
    .port-card:hover .port-overlay { opacity: 1; }
</style>
@endsection

@push('scripts')
<script src="{{ asset('js/tracking.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('portfolio-search');
        const filters = document.querySelectorAll('.btn-filter');
        const items = document.querySelectorAll('.portfolio-item');
        let currentFilter = 'all';
        let currentSearch = '';

        function applyFilters() {
            items.forEach(item => {
                const category = item.getAttribute('data-category');
                const title = item.querySelector('h4').textContent.toLowerCase();
                const desc = item.querySelector('p') ? item.querySelector('p').textContent.toLowerCase() : '';

                const matchesFilter = (currentFilter === 'all' || category === currentFilter);
                const matchesSearch = (title.includes(currentSearch) || desc.includes(currentSearch));

                if (matchesFilter && matchesSearch) {
                    item.style.display = 'block';
                    setTimeout(() => { item.style.opacity = '1'; item.style.transform = 'scale(1)'; }, 10);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.9)';
                    setTimeout(() => { item.style.display = 'none'; }, 300);
                }
            });
        }

        filters.forEach(filter => {
            filter.addEventListener('click', function () {
                filters.forEach(f => f.classList.remove('active'));
                this.classList.add('active');
                currentFilter = this.getAttribute('data-filter');
                applyFilters();
            });
        });

        let searchTimeout;
        searchInput.addEventListener('input', function () {
            currentSearch = this.value.toLowerCase();
            applyFilters();
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                if (currentSearch.length > 2 && window.trackingService) {
                    window.trackingService.track('Search', { search_string: currentSearch });
                }
            }, 1000);
        });

        document.querySelectorAll('.wa-portfolio-track').forEach(btn => {
            btn.addEventListener('click', function () {
                const project = this.getAttribute('data-project');
                const type = this.getAttribute('data-type') || 'Direct WA';
                if (window.trackingService) {
                    window.trackingService.track('Contact', {
                        content_name: project,
                        content_category: 'Portfolio',
                        contact_type: type
                    });
                }
            });
        });
    });
</script>
@endpush