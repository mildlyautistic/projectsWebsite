<?php

namespace App\Http\Controllers\API;

use App\Asset;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Project;
use App;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Resources\Project as ProjectResource;

class ProjectController extends BaseController
{

    public function index()
    {
       // $projects = Project::all();

        return view('projects');

       // return $this->sendResponse(ProjectResource::collection($projects), 'Projects retrieved successfully.');
    }

    public function get(Request $request)
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return response()->json($projects);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $proj_id =$input['user_id'];
        $usid = auth()->user()->id;

        if($proj_id!=$usid)
        {
            return $this->sendError('Sorry, your user_id should be the id in which you are logged in.');
        }

        $validator = Validator::make($input, [

            'name' => 'required',
           // 's_month',
            //'e_month' ,
            //'associated_with',
            //'description' ,
            'proj_url' => 'url',
            'user_id' => 'required'

        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $project = Project::create($input);

        $asset = Asset::all('id');
        //return $asset;
       // $asset_id_array = array();
        //array_push($asset_id_array, $asset);
        //$project->assets()->attach($asset_id_array);
        foreach($asset as $asset_id)
        {
            $project->assets()->attach($asset_id->id);
        }

        return response()->json($project);

        //return $this->sendResponse(new ProjectResource($project), 'project created successfully.');
    }

    public function show($id)
    {
        $project = Project::find($id);

        if (is_null($project)) {
            return $this->sendError('Project not found.');
        }

       // $projects = Project::all();

        return response()->json($project);

       // return $this->sendResponse(new ProjectResource($project), 'Project retrieved successfully.');
    }


    public function update(Request $request, Project $project)
    {
        $input = $request->all();
        $proj_id =$request->user_id;
        $usid = auth()->user()->id;

        if($proj_id!=$usid)
        {
            return $this->sendError('Sorry, edit your own project.');
        }


        $validator = Validator::make($input, [
            'name' => 'required',
            'proj_url' => 'url',
            'user_id' => 'required'


        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }



        $project->name = $input['name'];
        $project->s_month = $input['s_month'];
        $project->s_year = $input['s_year'];
        $project->e_month = $input['e_month'];
        $project->e_year = $input['e_year'];
        //$project->associated_with = $input['associated_with'];
        $project->description = $input['description'];
        $project->proj_url = $input['proj_url'];
        $project->user_id=$input['user_id'];
        $project->save();

        return response()->json($project);

        //return $this->sendResponse(new ProjectResource($project), 'project updated successfully.');

    }


    public function destroy($id)
    {
        //$project->delete();

        $pid = DB::table('projects')->where('id', $id)->pluck('user_id')->first();

        $usid = auth()->user()->id;
        if($pid !== $usid)
        {
            return $this->sendError('Sorry, you can delete your own project.');
        }

        Project::destroy($id);

        return response()->json("ok");

        //return $this->sendResponse([], 'Project deleted successfully.');
    }

    /*protected function validateProject()
    {
        return request()->validate([
            'name' => 'required',
            // 's_month',
            //'e_month' ,
            //'associated_with',
            //'description' ,
            'proj_url' => 'url'
        ]);
    } */
}
