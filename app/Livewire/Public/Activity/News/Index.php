<?php

namespace App\Livewire\Public\Activity\News;

use App\Models\NewsCategory;
use Livewire\Component;
use \App\Models\News as NewsModel;

class Index extends Component
{
    public $category_id = "";
    public $categories;
    public function mount()
    {
        $this->categories = NewsCategory::select("id", "name")->get();
    }
    public function render()
    {
        $newses = NewsModel::select("id", "title", "description", "date", "category_id", "link", "photo")
            ->with([
                "category" => fn($query) => $query->select("id", "name"),
            ])
            ->when($this->category_id, function ($query) {
                $query->where("category_id", $this->category_id);
            })
            ->latest()->get();

        $mainNews = NewsModel::select("id", "title", "description", "date", "category_id", "link", "photo")
            ->with([
                "category" => fn($query) => $query->select("id", "name")
            ])
            ->where("is_main", 1)
            ->latest()->first();

        return view('livewire.public.activity.news.index', [
            "newses" => $newses,
            "mainNews" => $mainNews,
        ])->title("Berita");
    }

    public function setCategoryId($id = "")
    {
        $this->category_id = $id;
    }
}
