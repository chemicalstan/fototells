<?php 

namespace App\Http\Repositories\AlbumProfile;

use Illuminate\Http\Request;
use App\Profile_Picture as profilePicture;
use App\Http\Repositories\ProfilePicture\ProfilePictureContract;

class EloquentProfilePictureRepository implements ProfilePictureContract
{
    public function addProfilePicture($imageUrl, $albumID, $profileID){
        $profilePicture = new profilePicture;
        $profilePicture->album_id = $albumID;
        $profilePicture->profile_id = $profileID;
        $profilePicture->profile_pic_url = $imageUrl;

        return $profilePicture->save();

    }
    public function deleteProfilePicture($id){
        return ProfilePicture::destroy($id);
    }

}