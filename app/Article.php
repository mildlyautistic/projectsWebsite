<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protected $guarded = [];
    protected $fillable = [
        'user_id','title', 'excerpt','featured_image_url','body', 'tags'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
        //return $this->belongsToMany('App\Tag');
    }
}
