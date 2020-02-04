<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'image_url','name', 'username','user_id','email', 'about_me','likes','dislikes','url','l_url','g_url'
    ];

    public function user()
	{
		return $this->belongsTo(User::class);
	}
}
