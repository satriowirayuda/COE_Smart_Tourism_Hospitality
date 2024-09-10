<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Resources\NewsResource;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();
        return NewsResource::collection($news);
    }

    public function showPrimary()
    {
        $news = News::where('is_primary', true)->get();
        return NewsResource::collection($news);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'news_date' => 'required',
            'category' => 'required', //A (Artikel) atau P (Penghargaan)
            'is_primary' => 'required',
            'image' => 'required',
        ]);

        $news = News::create($validated);
        return new NewsResource($news);
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
            'image' => 'required',
        ]);

        $news->update($validated);
        return new NewsResource($news);
    }

    public function delete(News $news)
    {
        $news->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }

}
