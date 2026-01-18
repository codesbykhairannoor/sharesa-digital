<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Portfolio; // Pastikan Model ini ada (kemarin udah kita buat)
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * DASHBOARD UTAMA AGENCY
     */
    public function index()
    {
        // 1. Hitung Total Portfolio (Project)
        // Kalau tabel/model Portfolio belum ada, ini bakal error 0, tapi gak crash parah
        // Asumsi lu udah buat Model Portfolio sesuai instruksi sebelumnya
        $total_portfolios = \App\Models\Portfolio::count();

        // 2. Hitung Total Admin (Karena single admin, isinya pasti dikit)
        $total_admins = User::count();

        // 3. Ambil 5 Project Terakhir buat ditampilin di tabel dashboard
        $recent_projects = \App\Models\Portfolio::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact(
            'total_portfolios', 
            'total_admins', 
            'recent_projects'
        ));
    }

    /**
     * HALAMAN MANAJEMEN USER (Isinya cuma list admin sebenernya)
     */
    public function users()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.users.index', compact('users'));
    }
}