@extends('layouts.app')

@section('title', __('messages.contact') . ' & Team')

@section('content')

    {{-- ========================================== --}}
    {{-- SECTION 1: MEET THE TEAM                   --}}
    {{-- ========================================== --}}
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="badge bg-white text-dark border px-3 py-2 rounded-pill mb-2 fw-bold">THE BRAINS</span>
                <h2 class="display-5 fw-bold" style="color: var(--sharesa-dark);">{{ __('messages.team_title') }}</h2>
                <p class="text-muted">{{ __('messages.team_subtitle') }}</p>
            </div>

            <div class="row g-4 justify-content-center">
                
                {{-- Team Member 1 --}}
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4 text-center h-100 hover-top">
                        <div class="card-body p-4">
                            <img src="https://ui-avatars.com/api/?name=Achmad+Kholiq&background=1e2a39&color=00ff8c&size=150" 
                                 class="rounded-circle mb-3 shadow-sm p-1 bg-white" width="100" alt="CEO">
                            <h5 class="fw-bold mb-1">Achmad Kholiq</h5>
                            <small class="text-primary fw-bold mb-3 d-block">Founder & CEO</small>
                            <p class="small text-muted">Visionary leader ensuring every project meets global standards.</p>
                        </div>
                    </div>
                </div>

                {{-- Team Member 2 --}}
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4 text-center h-100 hover-top">
                        <div class="card-body p-4">
                            <img src="https://ui-avatars.com/api/?name=Agus+Saputra&background=1e2a39&color=00ff8c&size=150" 
                                 class="rounded-circle mb-3 shadow-sm p-1 bg-white" width="100" alt="PM">
                            <h5 class="fw-bold mb-1">Agus Saputra H.</h5>
                            <small class="text-primary fw-bold mb-3 d-block">Project Manager</small>
                            <p class="small text-muted">The bridge between client dreams and technical reality.</p>
                        </div>
                    </div>
                </div>

                {{-- Team Member 3 --}}
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4 text-center h-100 hover-top">
                        <div class="card-body p-4">
                            <img src="https://ui-avatars.com/api/?name=Khairan+Noor&background=1e2a39&color=00ff8c&size=150" 
                                 class="rounded-circle mb-3 shadow-sm p-1 bg-white" width="100" alt="Dev">
                            <h5 class="fw-bold mb-1">Khairan Noor F.</h5>
                            <small class="text-primary fw-bold mb-3 d-block">Fullstack Developer</small>
                            <p class="small text-muted">Master of backend logic and frontend interactivity.</p>
                        </div>
                    </div>
                </div>

                {{-- Team Member 4 --}}
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4 text-center h-100 hover-top">
                        <div class="card-body p-4">
                            <img src="https://ui-avatars.com/api/?name=Zinedine+Daffa&background=1e2a39&color=00ff8c&size=150" 
                                 class="rounded-circle mb-3 shadow-sm p-1 bg-white" width="100" alt="Design">
                            <h5 class="fw-bold mb-1">Zinedine Daffa</h5>
                            <small class="text-primary fw-bold mb-3 d-block">UI/UX Designer</small>
                            <p class="small text-muted">Crafting beautiful and intuitive user experiences.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTION 2: CONTACT INFO & MAP              --}}
    {{-- ========================================== --}}
    <section class="py-5 position-relative overflow-hidden" style="background-color: var(--sharesa-dark);">
        
        {{-- Background Decoration --}}
        <div class="position-absolute top-0 end-0 opacity-10">
            <i class="bi bi-chat-quote-fill text-white" style="font-size: 15rem; transform: rotate(15deg);"></i>
        </div>

        <div class="container position-relative py-4 text-white">
            <div class="row g-5 align-items-center">
                
                {{-- Kolom Kiri: Teks & Info --}}
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">{{ __('messages.contact_title') }}</h2>
                    <p class="lead text-white-50 mb-5">
                        {{ __('messages.contact_subtitle') }}
                    </p>

                    <div class="d-flex flex-column gap-4">
                        {{-- Address --}}
                        <div class="d-flex align-items-start">
                            <div class="bg-white bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-geo-alt-fill text-warning fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">{{ __('messages.contact_addr') }}</h5>
                                <p class="text-white-50 mb-0">Jeruk Purut, Cilandak Timur,<br>Jakarta Selatan, Indonesia</p>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="d-flex align-items-start">
                            <div class="bg-white bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-envelope-fill text-info fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">{{ __('messages.contact_email') }}</h5>
                                <p class="text-white-50 mb-0">hello@sharesa.id</p>
                            </div>
                        </div>

                        {{-- WhatsApp --}}
                        <div class="d-flex align-items-start">
                            <div class="bg-white bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-whatsapp text-success fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">{{ __('messages.contact_wa') }}</h5>
                                <p class="text-white-50 mb-2">Mon - Fri: 09.00 - 18.00</p>
                                <a href="https://wa.me/6283136892742" target="_blank" class="btn btn-success rounded-pill px-4 fw-bold">
                                    <i class="bi bi-whatsapp me-2"></i> {{ __('messages.btn_wa') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan: Peta (Styled) --}}
                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden border border-4 border-white shadow-lg" style="height: 400px;">
                        <iframe 
                            width="100%" 
                            height="100%" 
                            id="gmap_canvas" 
                            src="https://maps.google.com/maps?q=Jeruk%20Purut%2C%20Cilandak%20Timur%20Pasar%20Minggu&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                            frameborder="0" 
                            scrolling="no" 
                            marginheight="0" 
                            marginwidth="0">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('styles')
<style>
    /* Efek Kartu Team Naik pas Hover */
    .hover-top { transition: 0.3s ease-in-out; }
    .hover-top:hover { transform: translateY(-10px); }
</style>
@endsection