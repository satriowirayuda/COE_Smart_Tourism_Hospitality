<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Resources\NewsResource;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    // Menampilkan semua berita
    public function index()
    {
        $news = News::all();
        return NewsResource::collection($news);
    }

    // Hanya menampilkan berita utama
    public function showPrimary()
    {
        $news = News::where('is_primary', true)->get();
        return NewsResource::collection($news);
    }

    public function show(News $news)
    {
        return new NewsResource($news);
    }

    public function store(Request $request)
    {
        // Mengecek jika berita yang diupload adalah berita utama,
        // jika iya akan merubah berita utama lama menjadi bukan berita utama
        if ($request->is_primary == true) {
            $news = News::where('is_primary', true)->get();
            if ($news->count() > 0) {
                $news->each->update(['is_primary' => false]);
            }
        }

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'news_date' => 'required',
            'category' => 'required', //A (Artikel) atau P (Penghargaan)
            'is_primary' => 'required',
            'image' => 'required',
        ]);

        // Menyimpan gambar ke dalam storage
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image/news')->store('images', 'public');
            $validated['image'] = $imagePath;
        }

        $news = News::create($validated);
        return view('admin.aktivitas.berita.berita');
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'news_date' => 'required',
            'category' => 'required', //A (Artikel) atau P (Penghargaan)
            'is_primary' => 'required',
            'image' => 'sometimes',
        ]);

        // M
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }

            $imagePath = $request->file('image')->store('images/news', 'public');
            $validated['image'] = $imagePath;
        }

        $news->update($validated);
        return view('admin.aktivitas.berita.berita');
    }

    public function delete(News $news)
    {
        $news->delete();
        return view('admin.aktivitas.berita.berita');
    }

}
