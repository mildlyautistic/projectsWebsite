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
        $project = Project::create($input);

        $validator = Validator::make($input, [



            //'about_me' => 'required',
            //'likes' => 'required',
            //'dislikes' => 'required'
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

        return $this->sendResponse(new ProjectResource($project), 'Profile retrieved successfully.');
    }


    public function update(Request $request, Project $project)
    {
        $input = $request->all();


        $validator = Validator::make($input, [


        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }



        return $this->sendResponse(new ProjectResource($project), 'project updated successfully.');

    }


    public function destroy(Project $project)
    {
        $project->delete();

        return $this->sendResponse([], 'Project deleted successfully.');
    }

    protected function validateProject()
    {
        return request()->validate([

        ]);
    }
}
