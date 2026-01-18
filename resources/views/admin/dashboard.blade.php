@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container py-5">
    
    {{-- HEADER SELAMAT DATANG --}}
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="fw-bold text-dark">Dashboard Utama</h2>
            <p class="text-muted mb-0">Selamat datang kembali, <strong>{{ Auth::user()->name }}</strong>!</p>
        </div>
        <div>
            {{-- Tombol Cepat Tambah Portfolio --}}
            <a href="{{ route('admin.portfolios.create') }}" class="btn fw-bold text-dark shadow-sm" style="background-color: var(--sharesa-green);">
                <i class="bi bi-plus-lg me-2"></i> Tambah Project Baru
            </a>
        </div>
    </div>

    {{-- KARTU STATISTIK --}}
    <div class="row g-4 mb-5">
        
        {{-- Total Project --}}
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                <div class="card-body p-4 d-flex align-items-center">
                    <div class="rounded-circle p-3 me-3 d-flex align-items-center justify-content-center" 
                         style="width: 70px; height: 70px; background-color: rgba(0, 255, 140, 0.2);">
                        <i class="bi bi-briefcase-fill fs-2" style="color: #00cc70;"></i>
                    </div>
                    <div>
                        <h6 class="text-muted text-uppercase fw-bold small mb-1">Total Portofolio</h6>
                        <h2 class="mb-0 fw-bold">{{ $total_portfolios }}</h2>
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Admin --}}
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                <div class="card-body p-4 d-flex align-items-center">
                    <div class="rounded-circle p-3 me-3 d-flex align-items-center justify-content-center bg-light" 
                         style="width: 70px; height: 70px;">
                        <i class="bi bi-person-badge-fill fs-2 text-primary"></i>
                    </div>
                    <div>
                        <h6 class="text-muted text-uppercase fw-bold small mb-1">Total Admin</h6>
                        <h2 class="mb-0 fw-bold">{{ $total_admins }}</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- TABEL PROJECT TERBARU --}}
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-5">
        <div class="card-header bg-white py-3 px-4 border-bottom">
            <h5 class="fw-bold mb-0">Project Terakhir Diupload</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="px-4 py-3 text-secondary small text-uppercase">Judul Project</th>
                            <th class="px-4 py-3 text-secondary small text-uppercase">Kategori</th>
                            <th class="px-4 py-3 text-secondary small text-uppercase">Klien</th>
                            <th class="px-4 py-3 text-secondary small text-uppercase">Tanggal</th>
                            <th class="px-4 py-3 text-end text-secondary small text-uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recent_projects as $project)
                        <tr>
                            <td class="px-4">
                                <div class="d-flex align-items-center">
                                    {{-- Cek gambar thumbnail --}}
                                    <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center text-muted small border" 
                                         style="width: 40px; height: 40px; overflow: hidden;">
                                         @if($project->image)
                                            <img src="{{ asset('storage/'.$project->image) }}" alt="img" style="width: 100%; height: 100%; object-fit: cover;">
                                         @else
                                            <i class="bi bi-image"></i>
                                         @endif
                                    </div>
                                    <span class="fw-bold">{{ $project->title }}</span>
                                </div>
                            </td>
                            <td class="px-4"><span class="badge bg-light text-dark border">{{ $project->category }}</span></td>
                            <td class="px-4 text-muted">{{ $project->client_name ?? '-' }}</td>
                            <td class="px-4 text-muted small">{{ $project->created_at->format('d M Y') }}</td>
                            <td class="px-4 text-end">
                                <a href="{{ route('admin.portfolios.edit', $project->id) }}" class="btn btn-sm btn-light border" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-5 text-muted">
                                <i class="bi bi-folder2-open display-4 d-block mb-3 opacity-50"></i>
                                Belum ada project yang ditambahkan.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white text-center py-3">
            <a href="{{ route('admin.portfolios.index') }}" class="text-decoration-none fw-bold" style="color: var(--sharesa-dark);">Lihat Semua Project</a>
        </div>
    </div>

    {{-- INFO SISTEM SEDERHANA --}}
    <div class="text-end text-muted small">
        <p>Sistem Sharesa Agency v2.0 &bull; Single Admin Mode</p>
    </div>

</div>
@endsection