<?php

namespace App\Livewire\Public;

use App\Models\Event;
use App\Models\News;
use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $project = Project::select("id", "name", "description", "yt_link")->latest()->first();
        $project->yt_embed_link = $this->convertToEmbedLink($project->yt_link ? $project->yt_link:"");
        $news = News::select("id", "title", "description", "link", "photo")->where("is_main", 1)->latest()->first();
        $lkmEvents = Event::select("id", "name", "start_date", "end_date")->where("category", "lkm")->orderBy("start_date")->limit(4)->get();
        $externalEvents = Event::select("id", "name", "start_date", "end_date")->where("category", "external")->orderBy("start_date")->limit(4)->get();

        return view('welcome/home-page', [
            "project" => $project,
            "news" => $news,
            "lkmEvents" => $lkmEvents,
            "externalEvents" => $externalEvents,
        ])->title("COE Smart Tourism & Hospitality");
    }

    function convertToEmbedLink($yt_link = "")
    {
        $video_id = "";
        if (str_contains($yt_link, 'youtu.be')) {
            $video_id = last(explode('/', $yt_link));
        } elseif (str_contains($yt_link, 'youtube.com/watch')) {
            parse_str(parse_url($yt_link, PHP_URL_QUERY), $query);
            $video_id = $query['v'] ?? '';
        }
        return 'https://www.youtube.com/embed/' . $video_id;
    }
}
