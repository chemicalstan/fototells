<?php

namespace App\Http\Repositories\Profile;


use App\Profile;
use Illuminate\Http\Request;
use App\Album_profile as AlbumProfile;
use App\Profile_Picture as ProfilePicture;
use App\Http\Repositories\Profile\ProfileContract;
use App\Http\Repositories\AlbumProfile\AlbumProfileContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class EloquentProfileRepository implements ProfileContract
{
    
    public function getRandomPictureFromEachProfile($albumID){

        $profile_ids = AlbumProfile::where('album_id', $albumID)->pluck('profile_id')->toArray();
        $profile_pictures = ProfilePicture::whereIn('profile_id', $profile_ids)->orderBy('id', 'asc')
        ->groupBy('profile_id')->pluck('profile_pic_url')->toArray();
        return $profile_pictures;
        
    }

    public function getProfileAlbums(AlbumProfileContract $albumProfileContract, $profileID){
        return $albumProfileContract->getAllAlbums($profileID);
    }

    public function getProfileWithAlbum($albumID, $profileID){
        
    }

    public function getAllProfiles($albumID){
        $profile_ids = AlbumProfile::where('album_id', $albumID)->pluck('profile_id')->toArray();
        return Profile::whereIn('id', $profile_ids)->get()->toArray();
    }

    public function createProfile(Request $request, $albumID){
        $profile = Profile::create($request->all());

        $albumProfile = new AlbumProfile;
        $albumProfile->album_id = $albumID;
        $albumProfile->profile_id = $profile->id;

        return $albumProfile->save();
    }
    public function updateProfile(Request $request, $profileID){
        $profile = Profile::find($profileID);
        $profile->fullname = $request->fullname;
        $profile->nickname = $request->nickname;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->status = $request->status;
        $profile->gender = $request->gender;
        $profile->biography = $request->biography;
        $profile->country = $request->country;
        $profile->DOB = $request->DOB;
        $profile->hobbies = $request->hobbies;
        $profile->address = $request->address;
        $profile->quote = $request->quote;
        $profile->password = $request->password;

        return $profile->save();
        
    }
    public function softDeleteProfile($profileID){
        return Profile::find($profileID)->delete();
    }

    public function permanentDeleteProfile($profileID){
        return Profile::withTrashed()->where('id', $profileID)->forecDelete();
    }

    public function getProfile($profileID){
        return $profile = Profile::find($profileID);
    }
}

