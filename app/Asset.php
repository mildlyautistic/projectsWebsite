<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $guarded = [];

    public function projects()
    {
        return $this->belongsToMany(Project::class , 'asset_project');
    }
}
