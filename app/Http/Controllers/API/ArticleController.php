<?php

namespace App\Http\Controllers\API;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Article;
use App;
use Validator;
use App\Http\Resources\Article as ArticleResource;

class ArticleController extends BaseController
{
    public function index()
    {
        $articles = Article::all();

        return $this->sendResponse(ArticleResource::collection($articles), 'Articles retrieved successfully.');
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        $aid =$input['user_id'];
        $usid = auth()->user()->id;

        if($aid!=$usid)
        {

            return $this->sendError('Sorry, your user_id should be the id in which you are logged in.');

        }

        $article = Article::create($input);

        $validator = Validator::make($input, [
            'title' => 'required',
            'body' => 'required',
            'user_id' => 'required',
            'featured_image_url' => 'url'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $tags_string = $input['tags'];
        $tags_array = explode(',', $tags_string);
        $tag_id_array = array();

        foreach($tags_array as $tag_all) {
            $tag = new App\Tag;
            $tag->name = $tag_all;
            $tag->save();

            array_push($tag_id_array, $tag->id);
        }

        $article->tags()->attach($tag_id_array);

        return $this->sendResponse(new ArticleResource($article), 'Article created successfully.');
    }

    public function show($id)
    {
        $article = Article::find($id);

        if (is_null($article)) {
            return $this->sendError('Article not found.');
        }

        return $this->sendResponse(new ArticleResource($article), 'Article retrieved successfully.');
    }

    public function update(Request $request, Article $article)
    {
        $input = $request->all();
        $aid =$request->user_id;
        $usid = auth()->user()->id;

        if($aid!=$usid)
        {
            return $this->sendError('Sorry, edit your own article.');
        }
        $article->tags()->detach();

        $validator = Validator::make($input, [
            'title' => 'required',
            'body' => 'required',
            'user_id' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $tags_string = $input['tags'];
        $tags_array = explode(',', $tags_string);
        $tag_id_array = array();
        foreach($tags_array as $tag_all) {
            $tag = new App\Tag;
            $tag->name = $tag_all;
            $tag->save();
            array_push($tag_id_array, $tag->id);
        }
        $article->tags()->attach($tag_id_array);
        $article->title = $input['title'];
        $article->body = $input['body'];
        $article->tags = $input['tags'];
        $article->save();
        $article->update($this->validateArticle());
        return $this->sendResponse(new ArticleResource($article), 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return $this->sendResponse([], 'Article deleted successfully.');
    }

    protected function validateArticle()
    {
        return request()->validate([

            'title' => 'required',
            'body' => 'required',
            'user_id' => 'required',
            'featured_image_url' => 'url'

        ]);
    }
}


