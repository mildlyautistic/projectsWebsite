<?php

namespace App\Http\Controllers\API;

//use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Asset;
use App;
use Validator;
use App\Http\Resources\Asset as AssetResource;

class AssetController extends BaseController
{
    public function index()
    {
        $assets = Article::all();

        return $this->sendResponse(AssetResource::collection($assets), 'Assets retrieved successfully.');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $asset = Asset::create($input);

        $validator = Validator::make($input, [
            'location' => 'required',
            'type' => 'required',
            'project_url' => 'url'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }


        return $this->sendResponse(new AssetResource($asset), 'Asset created successfully.');
    }

    public function show($id)
    {
        $asset = Asset::find($id);

        if (is_null($asset)) {
            return $this->sendError('Asset not found.');
        }

        return $this->sendResponse(new AssetResource($asset), 'Assets retrieved successfully.');
    }

    public function update(Request $request, Asset $asset)
    {
        $input = $request->all();


        $validator = Validator::make($input, [
            'location' => 'required',
            'type' => 'required',
            'project_url' => 'url'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $asset->location = $input['location'];
        $asset->type = $input['type'];
        $asset->project_url = $input['project_url'];
        $asset->save();
        return $this->sendResponse(new AssetResource($asset), 'Asset updated successfully.');
    }

    public function destroy(Asset $asset)
    {
        $asset->delete();

        return $this->sendResponse([], 'Asset deleted successfully.');
    }


}
