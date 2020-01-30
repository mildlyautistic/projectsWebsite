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
       'name', 'username','email', 'about_me','likes','dislikes'
    ];

    public function user()
	{
		return $this->belongsTo(User::class);
	}
}