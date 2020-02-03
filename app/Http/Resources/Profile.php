<?php
  
namespace App\Http\Resources;
   
use Illuminate\Http\Resources\Json\JsonResource;
   
class Profile extends JsonResource
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
          
            'image_url' => $this->image_url,
            'name' => $this->name,
            
            'username' => $this->username,
            'user_id'=>$this->user_id,
            'email' => $this->email,
            'about_me' => $this->about_me,
            'likes' => $this->likes,
            'dislikes' => $this->dislikes,
            'url'=>$this->url,
            'l_url'=>$this->l_url,
            'g_url'=>$this->g_url,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}