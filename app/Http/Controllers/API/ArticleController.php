<?php



namespace App\Http\Controllers\API;



use Illuminate\Http\Request;

use App\Http\Controllers\API\BaseController as BaseController;

use App\Article;

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



        $validator = Validator::make($input, [

            'title' => 'required',

            'body' => 'required'
            

        ]);



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

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Article $article)

    {

        $input = $request->all();



        $validator = Validator::make($input, [

            'title' => 'required',

            'excerpt' => 'required',

            'body' => 'required',

            'tags' => 'exists:tags,id'

        ]);



        if($validator->fails()){

            return $this->sendError('Validation Error.', $validator->errors());

        }



        $article->title = $input['title'];

        $article->excerpt = $input['excerpt'];

        $article->body = $input['body'];

        $article->tags = $input['tags'];

        $article->save();



        return $this->sendResponse(new ArticleResource($article), 'Article updated successfully.');

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

}
