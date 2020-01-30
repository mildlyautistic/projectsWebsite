<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Profile;
use Validator;
use App\Http\Resources\Profile as ProfileResource;
   
class ProfileController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::all();
    
        return $this->sendResponse(ProfileResource::collection($profiles), 'Profiles retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $data = ['@ipropal.com','@allps.com'];
   
        $validator = Validator::make($input, [
            
            'name' => 'required',
            'username' => 'required',
            
            //'about_me' => 'required',
            //'likes' => 'required',
            //'dislikes' => 'required'
        ]);

        $valid = Validator::make($data, [
        'email' => 'sometimes|required|email'
        ]);

        if($valid->fails()){
            return $this->sendError('Validation Error.', $valid->errors());       
        }
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $profile = Profile::create($input);
   
        return $this->sendResponse(new ProfileResource($profile), 'Profile created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::find($id);
  
        if (is_null($profile)) {
            return $this->sendError('Profile not found.');
        }
   
        return $this->sendResponse(new ProfileResource($profile), 'Profile retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $input = $request->all();
        $data = ['@ipropal.com','@allps.com'];
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            //'about_me' => 'required',
            //'likes' => 'required',
            //'dislikes' => 'required'
        ]);

        $validator = Validator::make($input, [
            'email' => 'sometimes|required|email'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        
        $profile->name = $input['name'];
        $profile->username = $input['username'];
        $profile->email = $input['email'];
        $profile->about_me = $input['about_me'];
        $profile->likes = $input['likes'];
        $profile->dislikes = $input['dislikes'];
        $profile->save();
   
        return $this->sendResponse(new ProfileResource($profile), 'Profile updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();
   
        return $this->sendResponse([], 'Profile deleted successfully.');
    }
}