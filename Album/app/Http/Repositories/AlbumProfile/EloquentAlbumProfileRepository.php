<?php 

namespace App\Http\Repositories\AlbumProfile;

use App\Album_Profile as AlbumProfile;
use App\Http\Repositories\AlbumProfile\AlbumProfileContract;
use App\Profile;

class EloquentAlbumProfileRepository implements AlbumProfileContract
{
    public function IsUserPermitted($albumID, $profileID){
        return AlbumProfile::where('album_id', $albumID)->where('profile_id', $profileID)->count()? True : false;
    }

    
    public function getAllAlbums($profileID){
        return Profile::find($profileID)->albums;
    }

    public function removeProfileFromAlbum($albumID, $profileID){
        return AlbumProfile::where('album_id', $albumID)->where('profile_id', $profileID)->delete();
    }
}