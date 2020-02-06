<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Project extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,

            's_month'=>$this->s_month,
            's_year'=>$this->s_year,
            'e_month'=>$this->e_month,
            'e_year'=>$this->e_year,
            'associated_with'=>$this->associated_with,
            'description'=>$this->description,
            'proj_url'=>$this->proj_url,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
