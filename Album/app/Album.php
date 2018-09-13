<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    use SoftDeletes;

    public function groupPictures(){
        return $this->hasMany('App\Group_Picture');
    }

    public function profiles(){
        return $this->belongsToMany('App\Profile', 'album_profiles');
    }

    
}
