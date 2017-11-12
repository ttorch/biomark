<?php
namespace App\Biomark\Helpers;

use App\Biomark\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Image;

Class ProfilePartial extends Profile {

    public function showProfile($id){
        return $this->getProfile($id);
    }

    public function store($data){

        if($data->hasFile('avatar')){
            $avatar = $data->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $data->avatar = $filename;
            Image::make($avatar)->resize(200, 200)->save( public_path('/uploads/avatars/' . $filename ) );
        }

        $profileId = $this->insert($data);
        if ($profileId < 1) 
            return false;
        
        //User::findOrFail($id);
        $user = Auth::user();
        $user = $user::findOrFail(Auth::user()->id);
        $user->profile_id = $profileId;
        $user->save();

        //dd('NEW PROFILE ID',$profileId);
        return true;
    }

    public function patchProfile($data, $id){
        $avatarNew = false;
        if($data->hasFile('avatar')){
            $avatar = $data->file('avatar');
            $filename = $this->generateImageFileName($avatar);
            $this->uploadImageFile('/uploads/avatars/', $filename, $avatar);
            $data->avatar = $filename;
            $avatarNew = true; 
        }

        return $this->updateProfile($data, $id, $avatarNew);
    }

    private function generateImageFileName($avatar) {
        return time() . '.' . $avatar->getClientOriginalExtension();
    }

    private function uploadImageFile($path, $filename, $image){
        Image::make($image)->resize(200, 200)->save( public_path($path . $filename ) );
        return true;
    }
}