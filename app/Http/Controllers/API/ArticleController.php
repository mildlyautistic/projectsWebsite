<?php

namespace App\Http\Controllers\API;

use App\Tag;
use Illuminate\Http\Request;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Article;
use App;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Resources\Article as ArticleResource;

class ArticleController extends BaseController
{
    public function index()
    {
        //$articles = Article::all();

        return view('articles');

        //return $this->sendResponse(ArticleResource::collection($articles), 'Articles retrieved successfully.');
       // return view('articles.index', ['articles' => $articles]);
    }

    public function get(Request $request)
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return response()->json($articles);
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

        $validator = Validator::make($input, [
            'title' => 'required',
            'body' => 'required',
            'user_id' => 'required',
            'featured_image_url' => 'url'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $article = Article::create($input);

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

        return response()->json($article);

        //return $this->sendResponse(new ArticleResource($article), 'Article created successfully.');
       // return view('articles.show', ['article' => $article]);
       // return redirect(route('article.index'));
    }

    public function show($id)
    {
        $article = Article::find($id);

        if (is_null($article)) {
            return $this->sendError('Article not found.');
        }

        return response()->json($article);

       // return $this->sendResponse(new ArticleResource($article), 'Article retrieved successfully.');
        //return view('articles.show', ['articles' => $article]);
    }

    public function update(Request $request, Article $article)
    {
        $input = $request->all();
        $aid =$request->user_id;
        $usid = auth()->user()->id;
        //return $article;

        if($aid!=$usid)
        {
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

        $tags_string = $input['tags'];
        $tags_array = explode(',', $tags_string);
        $tag_id_array = array();
        foreach($tags_array as $tag_all) {
            $tag = new App\Tag;
            $tag->name = $tag_all;
            $tag->save();
            array_push($tag_id_array, $tag->id);
        }
        $article->tags()->sync($tag_id_array);

        $article->title = $input['title'];
        $article->excerpt = $input['excerpt'];
        $article->body = $input['body'];
        $article->tags = $input['tags'];
        $article->excerpt=$input['excerpt'];
        $article->save();
        $article->update($this->validateArticle());

        return response()->json($article);

        //return $this->sendResponse(new ArticleResource($article), 'Article updated successfully.');
        //return redirect($article->path());
    }

    public function destroy($id)
    {
        //$article->delete();
       // global $aid;

        $aid = DB::table('articles')->where('id', $id)->pluck('user_id')->first();

        $usid = auth()->user()->id;
        //return $usid;

        if($aid !== $usid)
        {
            return $this->sendError('Sorry, you can delete your own article.');
        }

        else {
            Article::destroy($id);

            // return $this->sendResponse([], 'Article deleted successfully.');

            return response()->json("ok");
        }
        //return view('articles.show', ['articles' => $article]);
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


