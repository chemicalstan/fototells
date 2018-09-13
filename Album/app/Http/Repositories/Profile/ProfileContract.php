<?php

namespace App\Http\Repositories\Profile;

use Illuminate\Http\Request;
use App\Http\Repositories\AlbumProfile\AlbumProfileContract;

interface ProfileContract{
    public function getProfileWithAlbum($albumID, $profileID);
    public function getAllProfiles($albumID);
    public function getRandomPictureFromEachProfile($albumID);
    public function getProfileAlbums(AlbumProfileContract $albumProfileContract, $profileID);
    public function createProfile(Request $request, $albumID);
    public function updateProfile(Request $request, $profileID);
    public function permanentDeleteProfile($profileID);
    public function softDeleteProfile($profileID);
    public function getProfile($profileID);
    
    
}