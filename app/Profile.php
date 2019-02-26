<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
 

    public function User(){
        return $this->beLongsTo('App\User');
    }

    protected $fillable = [
        'avatar', 'user_id', 'facebook','twitter','github','about'
    ];
}
