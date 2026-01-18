@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
<div class="container py-5" style="min-height: 80vh; display: flex; align-items: center;">
    <div class="row justify-content-center w-100">
        <div class="col-md-5">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                
                {{-- Header --}}
                <div class="card-header text-white text-center py-4" style="background-color: var(--sharesa-dark);">
                    <div class="mb-3">
                        <i class="bi bi-shield-lock-fill" style="font-size: 3rem; color: var(--sharesa-green);"></i>
                    </div>
                    <h4 class="mb-0 fw-bold">Sharesa Admin</h4>
                    <small class="text-white-50">Secure Access Only</small>
                </div>

                {{-- Body --}}
                <div class="card-body p-5 bg-white">
                    @if (session('error'))
                        <div class="alert alert-danger text-center" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i> {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="form-label fw-bold small text-muted text-uppercase">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control border-start-0 py-2" name="email" required autofocus placeholder="admin@sharesa.id">
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="form-label fw-bold small text-muted text-uppercase">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-key"></i></span>
                                <input type="password" class="form-control border-start-0 py-2" name="password" required placeholder="••••••••">
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn fw-bold text-dark py-3" style="background-color: var(--sharesa-green);">
                                MASUK DASHBOARD <i class="bi bi-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
                
                {{-- Footer (Cuma Copyright, GAK ADA LINK LOGIN USER) --}}
                <div class="card-footer bg-light text-center py-3 border-0">
                    <small class="text-muted opacity-50">&copy; {{ date('Y') }} Sharesa Agency System</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection