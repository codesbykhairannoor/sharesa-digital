@extends('layouts.admin')
@section('title', 'Tambah Project')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-header bg-white py-3"><h5 class="fw-bold mb-0">Tambah Project Baru</h5></div>
            <div class="card-body p-4">
                <form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Judul Project</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Kategori</label>
                            <select name="category" class="form-select">
                                <option value="Web Development">Web Development</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="Branding">Branding</option>
                                <option value="Mobile App">Mobile App</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Nama Klien (Opsional)</label>
                            <input type="text" name="client_name" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Deskripsi</label>
                        <textarea name="description" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-bold">Gambar Cover</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn fw-bold text-dark" style="background: var(--sharesa-green);">SIMPAN PROJECT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection