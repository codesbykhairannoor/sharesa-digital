@extends('layouts.admin')
@section('title', 'Sampah Project')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold text-danger">Tong Sampah Project</h3>
    <a href="{{ route('admin.portfolios.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
</div>

<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-danger text-white">
                <tr>
                    <th class="px-4 py-3">Gambar</th>
                    <th>Judul</th>
                    <th>Dihapus Pada</th>
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
                    <td>{{ $item->deleted_at->diffForHumans() }}</td>
                    <td class="text-end px-4">
                        <a href="{{ route('admin.portfolios.restore', $item->id) }}" class="btn btn-sm btn-success fw-bold">Restore</a>
                        
                        <form onsubmit="return confirm('Yakin hapus PERMANEN? Data tidak bisa kembali!');" action="{{ route('admin.portfolios.force_delete', $item->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-dark fw-bold">Hapus Permanen</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="4" class="text-center py-5">Sampah kosong.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection