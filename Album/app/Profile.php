<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{  
    
    protected $dates = ['deleted_at'];
    protected $guarded = [];
    use SoftDeletes;


    public function albums(){
        return $this->belongsToMany('App\Album', 'album_profiles');
    }

    
}
