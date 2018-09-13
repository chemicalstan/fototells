<?php 

namespace App\Http\Repositories\AlbumProfile;

use App\Http\Repositories\AlbumProfile\AlbumUserContract;

interface AlbumProfileContract
{
    public function IsUserPermitted($albumID, $ProfileID);
    public function getAllAlbums($profileID);
    public function removeProfileFromAlbum($albumID, $profileID);
}