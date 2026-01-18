@extends('layouts.admin')

@section('title', 'Sampah User')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold text-danger">Tong Sampah User</h3>
    <a href="{{ route('admin.manage.users') }}" class="btn btn-secondary btn-sm">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-danger text-white">
                <tr>
                    <th class="px-4 py-3">Nama</th>
                    <th>Email</th>
                    <th>Dihapus Pada</th>
                    <th class="text-end px-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td class="px-4 fw-bold">{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->deleted_at->diffForHumans() }}</td>
                    <td class="text-end px-4">
                        <a href="{{ route('admin.users.restore', $user->id) }}" class="btn btn-sm btn-success fw-bold">
                            <i class="bi bi-arrow-counterclockwise"></i> Restore
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-5 text-muted">Tong sampah kosong.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection