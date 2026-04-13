@extends('layouts.app')

@section('title', __('messages.portfolios'))

@section('content')
<div class="container py-5">
    
    {{-- ================= HEADER SECTION ================= --}}
    <div class="text-center mb-5 mt-4">
        <span class="badge rounded-pill px-3 py-2 fw-bold mb-2 tracking-widest" 
              style="background-color: rgba(0, 255, 140, 0.1); color: var(--sharesa-green); letter-spacing: 2px;">
            {{ __('messages.port_header') }}
        </span>
        <h1 class="fw-bold text-dark display-4 mb-3">{{ __('messages.port_title') }}</h1>
        <p class="text-muted col-md-8 col-lg-6 mx-auto fs-5">
            {{ __('messages.port_desc') }}
        </p>
    </div>

    {{-- ================= SEARCH & FILTER ================= --}}
    <div class="row justify-content-center mb-5">
        <div class="col-lg-6">
            <div class="input-group shadow-sm rounded-pill overflow-hidden border">
                <span class="input-group-text bg-white border-0 ps-4"><i class="bi bi-search text-muted"></i></span>
                <input type="text" id="portfolio-search" class="form-control border-0 py-3 px-2" placeholder="Search by Project Name or Tech Stack (e.g. Laravel, React)..." style="outline: none; box-shadow: none;">
                <button class="btn btn-sharesa-primary px-4 fw-bold" type="button" id="search-btn">Search</button>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center flex-wrap mb-5 gap-2" id="portfolio-filters">
        <button class="btn btn-filter active px-4 py-2 rounded-pill fw-bold" data-filter="all">All Projects</button>
        <button class="btn btn-filter px-4 py-2 rounded-pill fw-bold" data-filter="Web Development">Web Dev</button>
        <button class="btn btn-filter px-4 py-2 rounded-pill fw-bold" data-filter="UI/UX Design">UI/UX Design</button>
        <button class="btn btn-filter px-4 py-2 rounded-pill fw-bold" data-filter="Branding">Branding</button>
        <button class="btn btn-filter px-4 py-2 rounded-pill fw-bold" data-filter="Mobile App">Mobile App</button>
    </div>

    {{-- ================= PORTFOLIO GRID ================= --}}
    <div class="row g-4" id="portfolio-grid">
        
        @forelse($portfolios as $item)
            {{-- ITEM PROJECT --}}
            <div class="col-md-6 col-lg-4 portfolio-item" data-category="{{ $item->category }}">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 hover-card group">
                    
                    {{-- Gambar Project --}}
                    <div class="position-relative overflow-hidden project-image-wrapper">
                        <img src="{{ $item->image ?? 'https://placehold.co/600x400/1e2a39/00ff8c?text=Sharesa+Project' }}" 
                             class="card-img-top transition-transform duration-500" 
                             alt="{{ $item->title }}" 
                             style="height: 260px; object-fit: cover;">
                        
                        @if($item->project_url)
                        <div class="project-overlay d-flex align-items-center justify-content-center">
                            <a href="{{ $item->project_url }}" target="_blank" class="btn btn-light rounded-pill fw-bold shadow-sm px-4">
                                <i class="bi bi-eye-fill me-2"></i>Visit Site
                            </a>
                        </div>
                        @endif

                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-white text-dark shadow-sm border px-3 py-2 rounded-pill fw-bold">
                                {{ $item->category }}
                            </span>
                        </div>
                    </div>

                    <div class="card-body p-4 d-flex flex-column">
                        <h4 class="fw-bold mb-2 text-dark">{{ $item->title }}</h4>
                        
                        @if($item->client_name)
                            <small class="text-muted mb-3 d-block">
                                <i class="bi bi-briefcase me-1 text-primary"></i> 
                                {{ __('messages.port_client') }}: <strong>{{ $item->client_name }}</strong>
                            </small>
                        @endif

                        <p class="text-secondary small mb-4 flex-grow-1">
                            {{ Str::limit($item->description, 100) }}
                        </p>

                        <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none fw-bold small d-flex align-items-center" style="color: var(--sharesa-dark);">
                                View Details <i class="bi bi-arrow-right ms-2 transition-icon"></i>
                            </a>

                            @if($item->project_url)
                                <a href="{{ $item->project_url }}" target="_blank" class="btn btn-sm btn-live-preview rounded-pill px-3 fw-bold">
                                    <i class="bi bi-box-arrow-up-right me-1"></i> Live
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5" id="empty-state">
                <h4 class="fw-bold text-muted">{{ __('messages.port_empty') }}</h4>
            </div>
        @endforelse

    </div>
</div>
@endsection

@section('styles')
<style>
    :root {
        --sharesa-green: #00ff8c;
        --sharesa-dark: #1e2a39;
    }

    /* Filter Buttons */
    .btn-filter {
        background: #f8f9fa;
        color: #6c757d;
        border: 1px solid #dee2e6;
        transition: all 0.3s ease;
    }

    .btn-filter:hover, .btn-filter.active {
        background-color: var(--sharesa-green) !important;
        color: var(--sharesa-dark) !important;
        border-color: var(--sharesa-green);
        box-shadow: 0 4px 12px rgba(0, 255, 140, 0.2);
    }

    /* Card & Animation */
    .portfolio-item {
        transition: all 0.4s ease-in-out;
    }

    .hover-card { transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); }
    .hover-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.08) !important; }

    .project-overlay {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(30, 42, 57, 0.7); opacity: 0; transition: 0.3s; z-index: 2;
    }
    .hover-card:hover .project-overlay { opacity: 1; }
    .btn-live-preview { background-color: var(--sharesa-green); color: var(--sharesa-dark); }
</style>
@endsection

@section('scripts')
<script src="{{ asset('js/tracking.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('portfolio-search');
        const filters = document.querySelectorAll('.btn-filter');
        const items = document.querySelectorAll('.portfolio-item');
        let currentFilter = 'all';
        let currentSearch = '';

        function applyFilters() {
            items.forEach(item => {
                const category = item.getAttribute('data-category');
                const title = item.querySelector('h4').textContent.toLowerCase();
                const desc = item.querySelector('p').textContent.toLowerCase();
                
                const matchesFilter = (currentFilter === 'all' || category === currentFilter);
                const matchesSearch = (title.includes(currentSearch) || desc.includes(currentSearch));

                if (matchesFilter && matchesSearch) {
                    item.style.display = 'block';
                    setTimeout(() => { item.style.opacity = '1'; item.style.transform = 'scale(1)'; }, 10);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => { item.style.display = 'none'; }, 300);
                }
            });
        }

        filters.forEach(filter => {
            filter.addEventListener('click', function() {
                filters.forEach(f => f.classList.remove('active'));
                this.classList.add('active');
                currentFilter = this.getAttribute('data-filter');
                applyFilters();
            });
        });

        // Instant Search
        let searchTimeout;
        searchInput.addEventListener('input', function() {
            currentSearch = this.value.toLowerCase();
            applyFilters();

            // Meta Tracking (Debounced)
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                if (currentSearch.length > 2) {
                    if (window.trackingService) {
                        window.trackingService.track('Search', { 
                            search_string: currentSearch 
                        });
                    }
                }
            }, 1000);
        });
    });
</script>
@endsection