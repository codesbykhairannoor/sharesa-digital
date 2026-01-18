<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    // 1. TAMPILKAN DAFTAR PROJECT
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    // 2. FORM TAMBAH PROJECT
    public function create()
    {
        return view('admin.portfolios.create');
    }

    // 3. SIMPAN DATA KE DATABASE
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Max 2MB
        ]);

        // Upload Gambar
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolios', 'public');
        }

        Portfolio::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'client_name' => $request->client_name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.portfolios.index')->with('success', 'Project berhasil ditambahkan!');
    }

    // 4. FORM EDIT PROJECT
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    // 5. UPDATE DATA
    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'category' => 'required',
        ]);

        // Cek jika ada gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($portfolio->image) {
                Storage::disk('public')->delete($portfolio->image);
            }
            // Upload baru
            $portfolio->image = $request->file('image')->store('portfolios', 'public');
        }

        $portfolio->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'client_name' => $request->client_name,
            'description' => $request->description,
            // Image diupdate otomatis di atas kalau ada
        ]);

        return redirect()->route('admin.portfolios.index')->with('success', 'Project berhasil diperbarui!');
    }

    // 6. HAPUS SEMENTARA (SOFT DELETE)
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete(); // Masuk tong sampah
        return back()->with('success', 'Project dipindahkan ke sampah.');
    }

    // 7. HALAMAN SAMPAH (TRASH)
    public function trash()
    {
        $portfolios = Portfolio::onlyTrashed()->get();
        return view('admin.portfolios.trash', compact('portfolios'));
    }

    // 8. RESTORE (KEMBALIKAN DARI SAMPAH)
    public function restore($id)
    {
        $portfolio = Portfolio::withTrashed()->findOrFail($id);
        $portfolio->restore();
        return back()->with('success', 'Project berhasil dikembalikan!');
    }

    // 9. HAPUS PERMANEN
    public function forceDelete($id)
    {
        $portfolio = Portfolio::withTrashed()->findOrFail($id);
        
        // Hapus file gambar fisiknya juga biar gak menuhin server
        if ($portfolio->image) {
            Storage::disk('public')->delete($portfolio->image);
        }
        
        $portfolio->forceDelete();
        return back()->with('success', 'Project dihapus permanen.');
    }
}