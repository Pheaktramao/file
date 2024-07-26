<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title'=> $this->title,
            'author'=> $this->author,
            'gender'=> $this->gender,
            'publish_year'=> $this->publish_year,
            'user'=> $this->user->name ?? '',
        ];
    }
}
