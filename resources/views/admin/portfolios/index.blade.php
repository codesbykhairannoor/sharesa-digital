@extends('layouts.admin')
@section('title', 'Kelola Portfolios')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark">Daftar Project</h2>
    <div>
        <a href="{{ route('admin.portfolios.trash') }}" class="btn btn-outline-danger me-2"><i class="bi bi-trash"></i> Sampah</a>
        <a href="{{ route('admin.portfolios.create') }}" class="btn text-dark fw-bold" style="background: var(--sharesa-green);"><i class="bi bi-plus-lg"></i> Tambah</a>
    </div>
</div>

<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light">
                <tr>
                    <th class="px-4 py-3">Gambar</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Klien</th>
                    <th class="text-end px-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($portfolios as $item)
                <tr>
                    <td class="px-4">
                        <img src="{{ asset('storage/' . $item->image) }}" class="rounded shadow-sm" width="60" height="60" style="object-fit: cover;">
                    </td>
                    <td class="fw-bold">{{ $item->title }}</td>
                    <td><span class="badge bg-light text-dark border">{{ $item->category }}</span></td>
                    <td>{{ $item->client_name ?? '-' }}</td>
                    <td class="text-end px-4">
                        <form onsubmit="return confirm('Hapus project ini?');" action="{{ route('admin.portfolios.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('admin.portfolios.edit', $item->id) }}" class="btn btn-sm btn-primary me-1"><i class="bi bi-pencil"></i></a>
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="text-center py-5">Belum ada project.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="p-3">{{ $portfolios->links() }}</div>
</div>
@endsection