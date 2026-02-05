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
        <div style="width: 60px; height: 4px; background-color: var(--sharesa-green); margin: 30px auto; border-radius: 2px;"></div>
    </div>

    {{-- ================= PORTFOLIO GRID ================= --}}
    <div class="row g-4">
        
        @forelse($portfolios as $item)
            {{-- ITEM PROJECT --}}
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 hover-card group">
                    
                    {{-- Gambar Project dengan Hover Overlay --}}
                    <div class="position-relative overflow-hidden project-image-wrapper">
                        <img src="{{ $item->image ?? 'https://placehold.co/600x400/1e2a39/00ff8c?text=Sharesa+Project' }}" 
                             class="card-img-top transition-transform duration-500" 
                             alt="{{ $item->title }}" 
                             style="height: 260px; object-fit: cover;">
                        
                        {{-- Hover Overlay: Visit Button --}}
                        @if($item->project_url)
                        <div class="project-overlay d-flex align-items-center justify-content-center">
                            <a href="{{ $item->project_url }}" target="_blank" class="btn btn-light rounded-pill fw-bold shadow-sm px-4">
                                <i class="bi bi-eye-fill me-2"></i>Visit Site
                            </a>
                        </div>
                        @endif

                        {{-- Overlay Kategori (Pojok Kanan Atas) --}}
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-white text-dark shadow-sm border px-3 py-2 rounded-pill fw-bold">
                                {{ $item->category }}
                            </span>
                        </div>
                    </div>

                    <div class="card-body p-4 d-flex flex-column">
                        {{-- Judul --}}
                        <h4 class="fw-bold mb-2 text-dark">{{ $item->title }}</h4>
                        
                        {{-- Nama Klien --}}
                        @if($item->client_name)
                            <small class="text-muted mb-3 d-block">
                                <i class="bi bi-briefcase me-1 text-primary"></i> 
                                {{ __('messages.port_client') }}: <strong>{{ $item->client_name }}</strong>
                            </small>
                        @endif

                        {{-- Deskripsi --}}
                        <p class="text-secondary small mb-4 flex-grow-1" style="line-height: 1.6;">
                            {{ Str::limit($item->description, 100) }}
                        </p>

                        {{-- Tombol Action --}}
                        <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none fw-bold small d-flex align-items-center" style="color: var(--sharesa-dark);">
                                View Details 
                                <i class="bi bi-arrow-right ms-2 transition-icon"></i>
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
            <div class="col-12 text-center py-5">
                <div class="mb-3">
                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                        <i class="bi bi-folder2-open display-4 text-secondary opacity-50"></i>
                    </div>
                </div>
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

    /* Card Styling */
    .hover-card { 
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: 1px solid rgba(0,0,0,0.05) !important;
    }
    
    .hover-card:hover { 
        transform: translateY(-8px); 
        box-shadow: 0 20px 40px rgba(0,0,0,0.08) !important;
        border-color: rgba(0, 255, 140, 0.3) !important;
    }

    /* Image & Overlay */
    .project-image-wrapper {
        position: relative;
    }

    .project-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(30, 42, 57, 0.7);
        opacity: 0;
        transition: all 0.3s ease;
        z-index: 2;
    }

    .hover-card:hover .project-overlay {
        opacity: 1;
    }

    .hover-card:hover .card-img-top {
        transform: scale(1.1);
    }

    /* Buttons */
    .btn-live-preview {
        background-color: var(--sharesa-green);
        color: var(--sharesa-dark);
        border: none;
        transition: 0.3s;
    }

    .btn-live-preview:hover {
        background-color: var(--sharesa-dark);
        color: white;
        box-shadow: 0 4px 12px rgba(0, 255, 140, 0.3);
    }

    .transition-icon {
        transition: 0.3s;
    }

    .hover-card:hover .transition-icon {
        transform: translateX(5px);
        color: var(--sharesa-green);
    }
</style>
@endsection