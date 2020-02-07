<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Project;
use Validator;
use App\Http\Resources\Project as ProjectResource;

class ProjectController extends BaseController
{

    public function index()
    {
        $projects = Project::all();

        return $this->sendResponse(ProjectResource::collection($projects), 'Projects retrieved successfully.');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $proj_id =$input['user_id'];
        $usid = auth()->user()->id;

        if($proj_id!=$usid)
        {
            //return $this->sendError('You cannot update this Article.');
            return $this->sendError('Sorry, your user_id should be the id in which you are logged in.');

        }

        $project = Project::create($input);
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
        return $this->sendResponse(new ProjectResource($project), 'project updated successfully.');
    }

    public function show($id)
    {
        $project = Project::find($id);

        if (is_null($project)) {
            return $this->sendError('Project not found.');
        }

        return $this->sendResponse(new ProjectResource($project), 'Project retrieved successfully.');
    }


    public function update(Request $request, Project $project)
    {
        $input = $request->all();
        $proj_id =$request->user_id;
        $usid = auth()->user()->id;

        if($proj_id!=$usid)
        {
            //return $this->sendError('You cannot update this Article.');
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

        return $this->sendResponse(new ProjectResource($project), 'project updated successfully.');

    }


    public function destroy(Project $project)
    {
        $project->delete();

        return $this->sendResponse([], 'Project deleted successfully.');
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
