<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Blog extends Model
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'content','image','user_id'
    ];
    
    public function user()
	{
	    return $this->belongsTo('App\User');
	}
    public function comments()
    {
        return $this->hasMany('App\Comments');
    }
}
