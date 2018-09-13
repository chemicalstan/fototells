<?php 

namespace App\Http\Repositories\Album;

use App\Album;
use Illuminate\Http\Request;
use App\Http\Repositories\Album\AlbumContract;
use App\Http\Repositories\AlbumProfile\AlbumProfileContract;


class EloquentAlbumRepository implements AlbumContract
{

    public function searchAlbum(){

    }

    public function getAlbumCover($albumID){
        return Album::select('cover_image_url')->where('id', $albumID)->get();    
    }

    public function checkAlbumPermission(AlbumProfileContract $albumProfileContract, $albumID, $profileID){
        return $albumProfileContract->IsUserPermitted($albumID, $profileID);
    }

    public function getPresidentialSpeech($albumID){
        return Album::select('presidential_speech')->where('id', $albumID)->get();
    }

    public function getAlbumGroupPictures($albumID){
        return Album::find($albumID)->groupPictures;
    }

    
    public function createAlbum(Request $request){
        return Album::create($request->all());
    }

    public function updateAlbum(Request $request, $AlbumID){
        $Album = Album::find($AlbumID);
        $Album->name = $request->name;
        $Album->cover_image_url = $request->cover_image_url;
        $Album->presidential_speech = $request->presidential_speech;
        $Album->members_count = $request->members_count;

        return $Album->save();
        
    }
    public function softDeleteAlbum($AlbumID){
        return Album::find($AlbumID)->delete();
    }

    public function permanentDeleteAlbum($AlbumID){
        return $Album = Album::withTrashed()->where('id', $AlbumID)->forceDelete();
    }

    public function getAlbum($AlbumID){
        return $Album = Album::find($AlbumID);
    }

}