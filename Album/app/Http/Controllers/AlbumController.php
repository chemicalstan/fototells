<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\Album\AlbumContract;
use App\Http\Repositories\Profile\ProfileContract;
use App\Http\Repositories\AlbumProfile\AlbumProfileContract;



class AlbumController extends Controller
{
    private $albumModel;
    private $profileModel;
    private $albumProfileModel;

    public function __construct(AlbumContract $albumContract, AlbumProfileContract $albumProfileContract,
    ProfileContract $profileContract){
        $this->albumProfileModel = $albumProfileContract;
        $this->albumModel = $albumContract;
        $this->profileModel = $profileContract;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = $this->albumModel->getAlbumCover(1);
        return $result[0]->cover_image_url;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = $this->albumModel->checkAlbumPermission($this->albumProfileModel, 1, 1);
        echo $result ? 'True' : 'False';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $this->albumModel->getPresidentialSpeech(1);
        return $result[0]->presidential_speech;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        dd($this->albumModel->getAlbumGroupPictures(1));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return $this->profileModel->getProfileAlbums($this->albumProfileModel, 1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        dd($this->profileModel->getRandomPictureFromEachProfile(1));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        dd($this->profileModel->getAllProfiles(1));
    }

    public function deleteAlbumFromProfile(){
        dd($this->albumProfileModel->removeProfileFromAlbum(1, 1));
    }

    public function createAlbum(Request $request){
        return $this->albumModel->createAlbum($request);
    }

    public function updateAlbum(Request $request){
        return $this->albumModel->updateAlbum($request, 2);
    }


    public function deleteAlbum(){
        return $this->albumModel->permanentDeleteAlbum(4);
    }

    public function getAlbum(){
        return $this->albumModel->getAlbum(1);
    }

    public function createProfile(Request $request){
        return $this->profileModel->createProfile($request, 1);
    }
}
