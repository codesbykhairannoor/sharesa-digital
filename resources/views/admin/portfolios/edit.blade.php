@extends('layouts.admin')
@section('title', 'Edit Project')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-header bg-white py-3"><h5 class="fw-bold mb-0">Edit Project: {{ $portfolio->title }}</h5></div>
            <div class="card-body p-4">
                <form action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Judul Project</label>
                        <input type="text" name="title" class="form-control" value="{{ $portfolio->title }}" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Kategori</label>
                            <select name="category" class="form-select">
                                @foreach(['Web Development', 'UI/UX Design', 'Branding', 'Mobile App'] as $cat)
                                    <option value="{{ $cat }}" {{ $portfolio->category == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Nama Klien</label>
                            <input type="text" name="client_name" class="form-control" value="{{ $portfolio->client_name }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Deskripsi</label>
                        <textarea name="description" class="form-control" rows="4">{{ $portfolio->description }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-bold">Ganti Gambar (Opsional)</label>
                        <input type="file" name="image" class="form-control">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $portfolio->image) }}" width="100" class="rounded border">
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary fw-bold">UPDATE PROJECT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection