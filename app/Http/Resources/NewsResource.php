<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id, // data[0]
            'image' => $this->image, // data[1]
            'title' => $this->title, // data[2]
            'description' => $this->description, // data[3]
            'link' => $this->link, // data[4]
            'news_date' => $this->news_date, // data[5]
            'category' => $this->category, // data[6]
            'is_primary' => $this->is_primary, // data[7]
        ];
    }
}
