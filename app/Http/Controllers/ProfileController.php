<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biomark\Helpers\ProfilePartial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
        $profileObj = new ProfilePartial; 
        $profile = $profileObj->showProfile(Auth::user()->profile_id);
        if (is_null($profile))
            $hasProfile = 0;
        else
            $hasProfile = $profile->count();

        $method = "POST";
        $submit_text = "Save";
        $action = route('admin.profile.store');
        if ($hasProfile !== 0) {
            $action = route('admin.profile.patch', $profile->id);
            $method = "PUT";
            $submit_text = "Update";
        }
        
        //dd(Auth::user()->profile_id);
        //dd('COUNT ', $profile->count());
        // dd('PROFILE ', $profile->first_name);
        return view('pages.profile', compact('profile', 'method', 'action', 'submit_text')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profileObj = new ProfilePartial; 
        $profileObj->store($request);
        return redirect()->route('admin.profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profileObj = new ProfilePartial; 
        $profileObj->patchProfile($request, $id);
        //return view('pages.profile')->with('success', 'The page has been updated successfully.');
        return redirect()->route('admin.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
