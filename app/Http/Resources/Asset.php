<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Asset extends JsonResource
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
            'location' => $this->location,
            'type' => $this->type,
            'project_url' => $this->project_url,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),

        ];
    }
}
