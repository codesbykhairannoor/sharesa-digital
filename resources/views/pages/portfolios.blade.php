@extends('layouts.app')

@section('title', __('messages.portfolios'))

@section('content')
<div class="container py-5">
    {{-- ================= HEADER SECTION ================= --}}
    <div class="text-center mb-5 mt-4">
        <h6 class="fw-bold text-uppercase ls-2" style="color: var(--sharesa-green)">Creative Showcase</h6>
        <h1 class="fw-bold text-dark display-4">Our Portfolios</h1>
        <p class="text-muted col-md-6 mx-auto">
            Explore our latest projects and see how we help our clients achieve their digital goals.
        </p>
        <div style="width: 80px; height: 4px; background-color: var(--sharesa-green); margin: 20px auto;"></div>
    </div>

    {{-- ================= PORTFOLIO GRID (DUMMY) ================= --}}
    {{-- Nanti ini akan kita hubungkan ke Database --}}
    <div class="row g-4">
        {{-- Project 1 --}}
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 hover-card">
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1470&auto=format&fit=crop" class="card-img-top" alt="Project 1" style="height: 250px; object-fit: cover;">
                <div class="card-body p-4">
                    <span class="badge bg-light text-dark mb-2 border">Web Development</span>
                    <h5 class="fw-bold mb-2">E-Commerce Platform</h5>
                    <p class="text-muted small">A full-featured online store with integrated payment gateway.</p>
                </div>
            </div>
        </div>

        {{-- Project 2 --}}
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 hover-card">
                <img src="https://images.unsplash.com/photo-1586717791821-3f44a563eb4c?q=80&w=1470&auto=format&fit=crop" class="card-img-top" alt="Project 2" style="height: 250px; object-fit: cover;">
                <div class="card-body p-4">
                    <span class="badge bg-light text-dark mb-2 border">UI/UX Design</span>
                    <h5 class="fw-bold mb-2">Fintech Mobile App</h5>
                    <p class="text-muted small">Modern and intuitive interface for a personal finance application.</p>
                </div>
            </div>
        </div>

        {{-- Project 3 --}}
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 hover-card">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1426&auto=format&fit=crop" class="card-img-top" alt="Project 3" style="height: 250px; object-fit: cover;">
                <div class="card-body p-4">
                    <span class="badge bg-light text-dark mb-2 border">Branding</span>
                    <h5 class="fw-bold mb-2">Corporate Identity</h5>
                    <p class="text-muted small">Complete branding package for a startup in the logistics sector.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .hover-card { transition: 0.3s ease; }
    .hover-card:hover { 
        transform: translateY(-10px); 
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
</style>
@endsection