<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// Import Library Cloudinary
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

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

    // 3. SIMPAN DATA KE DATABASE (UPLOAD KE CLOUDINARY)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
        ]);

        $imageUrl = null;
        if ($request->hasFile('image')) {
            // Upload ke Cloudinary ke folder 'sharesa_portfolios'
            $result = Cloudinary::upload($request->file('image')->getRealPath(), [
                'folder' => 'sharesa_portfolios'
            ]);
            $imageUrl = $result->getSecurePath(); // Ambil URL https-nya
        }

        Portfolio::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'client_name' => $request->client_name,
            'description' => $request->description,
            'image' => $imageUrl, // Simpan URL lengkap ke DB
        ]);

        return redirect()->route('admin.portfolios.index')->with('success', 'Project uploaded to Cloudinary!');
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

        if ($request->hasFile('image')) {
            // Update gambar ke Cloudinary (Gambar lama biarkan saja atau hapus manual di dashboard)
            $result = Cloudinary::upload($request->file('image')->getRealPath(), [
                'folder' => 'sharesa_portfolios'
            ]);
            $portfolio->image = $result->getSecurePath();
        }

        $portfolio->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'client_name' => $request->client_name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.portfolios.index')->with('success', 'Project updated successfully!');
    }

    // 6. HAPUS SEMENTARA (SOFT DELETE)
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete(); 
        return back()->with('success', 'Project moved to trash.');
    }

    // 7. HALAMAN SAMPAH (TRASH)
    public function trash()
    {
        $portfolios = Portfolio::onlyTrashed()->get();
        return view('admin.portfolios.trash', compact('portfolios'));
    }

    // 8. RESTORE
    public function restore($id)
    {
        $portfolio = Portfolio::withTrashed()->findOrFail($id);
        $portfolio->restore();
        return back()->with('success', 'Project restored!');
    }

    // 9. HAPUS PERMANEN
    public function forceDelete($id)
    {
        $portfolio = Portfolio::withTrashed()->findOrFail($id);
        
        // Logic hapus file di Cloudinary jika lu mau (Opsional)
        if ($portfolio->image) {
            // Ambil public_id dari URL untuk hapus file di Cloudinary
            // Contoh URL: https://res.cloudinary.com/dxbgpakk1/image/upload/v123/sharesa_portfolios/abc.jpg
            $publicId = 'sharesa_portfolios/' . pathinfo($portfolio->image, PATHINFO_FILENAME);
            try {
                Cloudinary::destroy($publicId);
            } catch (\Exception $e) {
                // Ignore error jika file sudah tidak ada
            }
        }
        
        $portfolio->forceDelete();
        return back()->with('success', 'Project permanently deleted from Cloud.');
    }
}