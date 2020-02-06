<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [

            'id' => $this->id,
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'featured_image_url' => $this->featured_image_url,
            'user_id' => $this->user_id,
            'body' => $this->body,
            'tags' => $this->tags,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),

        ];
    }
}
