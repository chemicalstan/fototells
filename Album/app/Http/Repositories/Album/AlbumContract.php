<?php

namespace App\Http\Repositories\Album;

use Illuminate\Http\Request;
use App\Http\Repositories\AlbumProfile\AlbumProfileContract;

interface AlbumContract{
    public function searchAlbum();
    public function getAlbumCover($albumID);
    public function checkAlbumPermission(AlbumProfileContract $albumProfileContract, $albumID, $profileID);
    public function getPresidentialSpeech($albumID);
    public function getAlbumGroupPictures($albumID);
    public function createAlbum(Request $request);
    public function updateAlbum(Request $request, $albumID);
    public function softDeleteAlbum($albumID);
    public function permanentDeleteAlbum($albumID);
    public function getAlbum($albumID);
}