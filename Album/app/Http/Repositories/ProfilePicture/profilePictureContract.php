<?php

namespace App\Http\Repositories\ProfilePicture;

use Illuminate\Http\Request;

interface ProfilePictureContract{

    public function addProfilePicture($imageUrl, $albumID, $profileID);
    public function deleteProfilePicture($id);
    
}