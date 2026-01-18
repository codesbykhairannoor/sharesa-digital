<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Hanya tamu (belum login) yang boleh akses halaman login
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // 1. Tampilkan Form Login Admin
    public function showAdminLoginForm()
    {
        return view('auth.admin_login');
    }

    // 2. Proses Login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Coba Login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            
            // Cek Role (Harus Admin/Superadmin/Police)
            $role = Auth::user()->role;
            if (in_array($role, ['admin', 'superadmin', 'police'])) {
                return redirect()->route('admin.dashboard');
            }

            // Kalau ternyata user biasa nyasar login (langsung tendang keluar)
            Auth::logout();
            return back()->with('error', 'Akses ditolak. Anda bukan Admin.');
        }

        // Kalau password salah
        return back()->with('error', 'Email atau Password salah.');
    }

    // 3. Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}