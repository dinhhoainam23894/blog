<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
	protected $table = "comments";
    protected $fillable = [
        'comments', 'user_id', 'blog_id',
    ];
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public $timestamps = false;
   
}
