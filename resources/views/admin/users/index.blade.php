@extends('layouts.admin')

@section('title', 'Kelola Tim Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold text-dark">Tim Internal</h2>
        <p class="text-muted mb-0">Daftar admin yang memiliki akses ke dashboard ini.</p>
    </div>
    
    {{-- Tombol Sampah (Hanya muncul jika ada logika trash di controller) --}}
    @if(Auth::user()->role == 'superadmin' || Auth::user()->role == 'police')
    <div>
        <a href="{{ route('admin.users.trash') }}" class="btn btn-outline-danger btn-sm">
            <i class="bi bi-trash"></i> Lihat Sampah
        </a>
    </div>
    @endif
</div>

<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light">
                <tr>
                    <th class="px-4 py-3">Avatar</th>
                    <th>Nama & Email</th>
                    <th>Role</th>
                    <th>Bergabung</th>
                    <th class="text-end px-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td class="px-4">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=1e2a39&color=00ff8c&bold=true" 
                             class="rounded-circle shadow-sm" width="45" height="45" alt="Avatar">
                    </td>
                    <td>
                        <div class="fw-bold text-dark">
                            {{ $user->name }} 
                            @if(Auth::id() == $user->id)
                                <span class="badge bg-success bg-opacity-10 text-success ms-1">You</span>
                            @endif
                        </div>
                        <small class="text-muted">{{ $user->email }}</small>
                    </td>
                    <td>
                        @if($user->role == 'superadmin')
                            <span class="badge bg-danger">Super Admin</span>
                        @elseif($user->role == 'admin')
                            <span class="badge bg-primary">Staff Admin</span>
                        @else
                            <span class="badge bg-secondary">User</span>
                        @endif
                    </td>
                    <td class="text-muted small">
                        {{ $user->created_at->format('d M Y') }}
                    </td>
                    <td class="text-end px-4">
                        {{-- Proteksi: Admin tidak bisa hapus dirinya sendiri --}}
                        @if(Auth::id() != $user->id)
                            @if(Auth::user()->role == 'superadmin' || Auth::user()->role == 'police')
                                <form onsubmit="return confirm('Yakin ingin menonaktifkan akun ini?');" 
                                      action="{{ route('admin.users.delete', $user->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-light text-danger border" title="Hapus User">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            @else
                                <button class="btn btn-sm btn-light text-muted border" disabled title="Akses Dibatasi">
                                    <i class="bi bi-lock-fill"></i>
                                </button>
                            @endif
                        @else
                            <span class="text-muted small fw-bold">Active</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-5 text-muted">Data kosong.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    {{-- Pagination --}}
    <div class="p-3">
        {{ $users->links() }}
    </div>
</div>
@endsection