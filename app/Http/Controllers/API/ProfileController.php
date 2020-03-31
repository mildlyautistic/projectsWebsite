<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Profile;
use App;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Resources\Profile as ProfileResource;

class ProfileController extends BaseController
{


    public function get()
    {
        $usid = auth()->user()->id;
        $profiles = Profile::where('user_id',  + $usid  )->get();
        return response()->json($profiles);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $pid =$input['user_id'];
        $uid=auth()->user()->id;
        $email = $request->email;
        $parts = explode('@', $email);
        $emailpart=$parts[1];
        $data = ['ipropal.com','allps.ch'];
        $c=count($data);


        if($pid!=$uid)
        {

            return $this->sendError('Sorry, your user_id should be the id in which you are logged in.');

        }
        //$profile = Profile::create($input);
        //$profile -> user() -> associate($user) -> save();
        $pid=$request->user_id;
        $uid=auth()->user()->id;
        if($pid!=$uid){
            return $this->sendError('you cannot update this!');
        }

        $validator = Validator::make($input, [

            'image_url' => 'url',
            'name' => 'required',
            'user_id' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'url'=>'url',
            'l_url'=>'required|url',
            'g_url'=>'required|url'

            //'about_me' => 'required',
            //'likes' => 'required',
            //'dislikes' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // check if $emailPart exists in the $data array
        for($x=0; $x<$c; $x++)
        {
            if($emailpart==$data[$x]){
                $profile = Profile::create($input);
                //return response()->json($profile);
                return $this->sendResponse(new ProfileResource($profile), 'profile created successfully.');
            }
        }
        if($x==$c){

            return $this->sendError('Invalid email.');
        }



        /*$profile = Profile::create($input);

        return $this->sendResponse(new ProfileResource($profile), 'Profile created successfully.');*/
    }



    public function show($id)
    {
        $profile = Profile::find($id);

        if (is_null($profile)) {
            return $this->sendError('Profile not found.');
        }
        return view('profiles_show', ['profiles' => $profile]);
    }


    public function update(Request $request, Profile $profile)
    {
        $input = $request->all();
        $pid=$request->user_id;
        $uid=auth()->user()->id;
        $email = $request->email;
        $parts = explode('@', $email);
        $emailpart=$parts[1];
        $data = ['ipropal.com','allps.ch'];
        $c=count($data);

        $validator = Validator::make($input, [

            'image_url' => 'url',
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'user_id'=>'required',
            'url'=>'url',
            'l_url'=>'required|url',
            'g_url'=>'required|url',
            'about_me' => '',
            'likes' => '',
            'dislikes' => ''
        ]);

        if($pid!=$uid){
            return $this->sendError('you cannot update this!');
        }
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        for($x=0; $x<$c; $x++)
        {
            if($emailpart==$data[$x]){

                //return $this->sendResponse(new ProfileResource($profile), 'profile updated successfully.');
                $profile->update($this->validateProfile());
                //return $this->sendResponse(new ProfileResource($profile), 'profile updated successfully.');
                return response()->json($profile);
            }
        }
        if($x==$c){

            return $this->sendError('Invalid email.');
        }

        $profile->image_url=$input['image_url'];
        $profile->user_id=$input['user_id'];
        $profile->name = $input['name'];
        $profile->username = $input['username'];
        $profile->email = $input['email'];
        $profile->about_me = $input['about_me'];
        $profile->likes = $input['likes'];
        $profile->dislikes = $input['dislikes'];
        $profile->url=$input['url'];
        $profile->l_url=$input['l_url'];
        $profile->g_url=$input['g_url'];
        $profile->save();


    }


    public function delete($id)
    {
        $pid = DB::table('profiles')->where('id', $id)->pluck('user_id')->first();

        $usid = auth()->user()->id;
        if($pid != $usid)
        {
            return $this->sendError('Sorry, you can delete your own profile.');
        }

        Profile::destroy($id);

        //return $this->sendResponse([], 'Profile deleted successfully.');
        return response()->json("ok");
    }

    protected function validateProfile()
    {
        return request()->validate([
            'image_url' => 'url',
            'name' => 'required',
            'user_id' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'url'=>'url',
            'l_url'=>'required|url',
            'g_url'=>'required|url',
            'about_me' => '',
            'likes' => '',
            'dislikes' => ''
        ]);
    }
}
