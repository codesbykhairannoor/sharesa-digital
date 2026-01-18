<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

// --- DAFTAR CONTROLLER ---
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController; // Nanti jadi Portfolio
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\GoogleController;
use App\Models\Portfolio;
/*
|--------------------------------------------------------------------------
| SHARESA DIGITAL AGENCY - WEB ROUTES
|--------------------------------------------------------------------------
*/

// =====================
// 1. HALAMAN PUBLIK (Landing Page)
// =====================
Route::get('/', fn() => view('pages.home'))->name('home');
Route::get('/services', fn() => view('pages.services'))->name('services');
Route::get('/portfolios', fn() => view('pages.portfolios'))->name('portfolios');
Route::get('/about', fn() => view('pages.about'))->name('about');
Route::get('/contact', fn() => view('pages.contact'))->name('contact');
Route::get('/portfolios', function () {
    // Ambil data portfolio dari database, urutkan dari yang terbaru
    $portfolios = Portfolio::latest()->get();
    
    return view('pages.portfolios', compact('portfolios')); 
})->name('portfolios');
// Switch Language
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        Session::put('locale', $locale);
    }
    return back();
})->name('lang.switch');


// =====================
// 2. KHUSUS ADMIN LOGIN (Custom Route)
// =====================

// A. Tampilkan Form Login Admin (GET)
Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])
    ->name('admin.login')
    ->middleware('guest');

// B. Proses Submit Login Admin (POST) - INI YANG KEMARIN HILANG
Route::post('/admin/login', [LoginController::class, 'login'])
    ->name('admin.login.submit')
    ->middleware('guest');

// C. Logout (POST)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// (Kita matikan Auth::routes() bawaan biar user biasa gabisa register/login lewat /login)
// Auth::routes(); 

// Google Login (Opsional, kalau admin mau login pake Google)
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


// =====================
// 3. USER AREA (Jaga-jaga kalau butuh profile)
// =====================
Route::middleware(['auth'])->group(function () {
    // Redirect /home ke Dashboard Admin kalau dia admin, atau ke Home kalau user biasa
    Route::get('/home', function() {
        if(Auth::user()->role == 'admin' || Auth::user()->role == 'superadmin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect('/');
    });

    // Profile Settings
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});


// =====================
// 4. ADMIN PANEL (Superadmin & Staff)
// =====================
Route::prefix('admin')->name('admin.')->middleware(['auth', 'is_admin'])->group(function () {

    // Dashboard Utama
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Kelola Portfolio (Menggunakan Resource ProductController sementara)
    // CRUD Portfolio
    Route::get('/portfolios/trash', [App\Http\Controllers\PortfolioController::class, 'trash'])->name('portfolios.trash');
    Route::get('/portfolios/restore/{id}', [App\Http\Controllers\PortfolioController::class, 'restore'])->name('portfolios.restore');
    Route::delete('/portfolios/force-delete/{id}', [App\Http\Controllers\PortfolioController::class, 'forceDelete'])->name('portfolios.force_delete');
    
    Route::resource('portfolios', App\Http\Controllers\PortfolioController::class);

    // Kelola User
    Route::get('/manage-users', [AdminController::class, 'users'])->name('manage.users');

    // Fitur Police / Superadmin
    Route::middleware(['police'])->group(function () {
        Route::get('/users/trash', [AdminController::class, 'trashUsers'])->name('users.trash');
        Route::get('/users/restore/{id}', [AdminController::class, 'restoreUser'])->name('users.restore');
        Route::delete('/users/delete/{id}', [AdminController::class, 'destroyUser'])->name('users.delete');
    });
});

// =====================
// 5. FALLBACK
// =====================
Route::fallback(fn() => view('404'));