<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
	use SoftDeletes ;
   
  


	 protected $fillable = [
        'titel', 'content', 'category_id','photo','slug',
    ];

protected $date=['delete_at'];

 public function getFeaturedAttribute($photo)
    {
        return asset($photo);
    }

   public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function tags()
    {
        return $this->beLongsToMany('App\Tag');
    }
}

