<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album_Profile extends Model
{
    protected $guarded = [];
    protected $table = 'album_profiles';

    public function profiles(){
        return $this->belongsToMany('App\Profile');
    }
}
