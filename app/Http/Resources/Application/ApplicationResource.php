<?php

namespace App\Http\Resources\Application;

use App\Http\Resources\Image\ImageResource;
use App\Http\Resources\User\UserResource;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "user_name" => $this->user_name,
            "title" => $this->title,
            "description" => $this->description,
            "date" => $this->created_at->diffForHumans(),
            "images" => ImageResource::collection($this->images),
            "user" => new UserResource($this->user)

        ];
    }
}
