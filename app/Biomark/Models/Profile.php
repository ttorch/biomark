<?php
namespace App\Biomark\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model{

    protected $table  = 'profile';

    public function getProfile($id){
        $data =  Profile::where('id', '=', $id)->first();
        return $data;
    }

    public function insert($data){

        $profile = new Profile;
        
        $profile->first_name = $data->first_name;
        $profile->last_name = $data->last_name;
        $profile->email = $data->email;
        $profile->address = $data->address;
        $profile->contact_no = $data->contact_no;
        $profile->avatar = $data->avatar;
        $profile->save();
        return $profile->id;
    }

    public function updateProfile($data, $id, $avatarNew){
        $profile = new Profile;
        $profile = Profile::where('id','=',$id)->first();
        $profile->first_name = $data->first_name;
        $profile->last_name = $data->last_name;
        $profile->email = $data->email;
        $profile->address = $data->address;
        $profile->contact_no = $data->contact_no;
        if ($avatarNew === true)
            $profile->avatar = $data->avatar;
        $profile->update();
        return true;
    }

}