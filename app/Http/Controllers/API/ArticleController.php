<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Article;
use App;
use Validator;
use App\Http\Resources\Article as ArticleResource;

class ArticleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return $this->sendResponse(ArticleResource::collection($articles), 'Articles retrieved successfully.');
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
        $tags_c = $request->tags;
        $tags_p = explode(',',$tags_c);
        $cnt = count($tags_p);
        for($x=0;$x<$cnt;$x++)
        {
            $tag = new App\Tag;
            $tag->name = $tags_p[$x];
            $tag->save();
        }
        $article = new Article($this->validateArticle());
        $article->save();
        $article->tags()->attach(request('tags'));


        $validator = Validator::make($input, [
            'title' => 'required',
            'body' => 'required',
            'user_id' => 'required',
            'featured_image_url' => 'url'
        ]);

        /*if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( storage_path('/uploads/' . $filename ) );


            $input->image = $filename;
            $input->save();
        }; */


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $article = Article::create($input);

        return $this->sendResponse(new ArticleResource($article), 'Article created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);

        if (is_null($article)) {
            return $this->sendError('Article not found.');
        }

        return $this->sendResponse(new ArticleResource($article), 'Article retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $input = $request->all();


        $aid =$request->user_id;
        $usid = auth()->user()->id;

        if($aid!=$usid)
        {
            //return $this->sendError('You cannot update this Article.');
            return $this->sendError('Sorry, edit your own article.');

        }

        $validator = Validator::make($input, [
            'title' => 'required',
            'body' => 'required',
            'user_id' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $article->title = $input['title'];
        $article->body = $input['body'];
        $article->save();

        $article->update($this->validateArticle());

        return $this->sendResponse(new ArticleResource($article), 'Article updated successfully.');

       // return $this->sendResponse(new ArticleResource($article), 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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


