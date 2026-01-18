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
                    
                    {{-- Gambar Project --}}
                    <div class="position-relative overflow-hidden">
                        {{-- Cek apakah ada gambar, kalau tidak pakai placeholder --}}
                        <img src="{{ $item->image ? asset('storage/' . $item->image) : 'https://placehold.co/600x400/1e2a39/00ff8c?text=Sharesa+Project' }}" 
                             class="card-img-top transition-transform duration-500" 
                             alt="{{ $item->title }}" 
                             style="height: 260px; object-fit: cover;">
                        
                        {{-- Overlay Kategori (Muncul di pojok) --}}
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-white text-dark shadow-sm border px-3 py-2 rounded-pill fw-bold">
                                {{ $item->category }}
                            </span>
                        </div>
                    </div>

                    <div class="card-body p-4 d-flex flex-column">
                        {{-- Judul --}}
                        <h4 class="fw-bold mb-2 text-dark">{{ $item->title }}</h4>
                        
                        {{-- Nama Klien (Jika ada) --}}
                        @if($item->client_name)
                            <small class="text-muted mb-3 d-block">
                                <i class="bi bi-briefcase me-1 text-primary"></i> 
                                {{ __('messages.port_client') }}: <strong>{{ $item->client_name }}</strong>
                            </small>
                        @endif

                        {{-- Deskripsi (Dibatasi 100 karakter) --}}
                        <p class="text-secondary small mb-4 flex-grow-1" style="line-height: 1.6;">
                            {{ Str::limit($item->description, 100) }}
                        </p>

                        {{-- Tombol Detail (Fake Link / Bisa dikembangkan nanti) --}}
                        <div class="mt-auto pt-3 border-top">
                            <a href="#" class="text-decoration-none fw-bold d-flex align-items-center" style="color: var(--sharesa-dark);">
                                View Case Study 
                                <i class="bi bi-arrow-right ms-2 transition-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        @empty
            {{-- STATE: KOSONG (Belum ada data) --}}
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
    /* Efek Hover Card Naik */
    .hover-card { 
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: 1px solid rgba(0,0,0,0.05) !important;
    }
    
    .hover-card:hover { 
        transform: translateY(-8px); 
        box-shadow: 0 20px 40px rgba(0,0,0,0.08) !important;
        border-color: rgba(0, 255, 140, 0.3) !important;
    }

    /* Efek Zoom Gambar */
    .hover-card:hover .card-img-top {
        transform: scale(1.05);
        transition: 0.5s ease;
    }

    /* Efek Panah Bergerak */
    .hover-card:hover .transition-icon {
        transform: translateX(5px);
        color: var(--sharesa-green);
        transition: 0.3s;
    }
</style>
@endsection