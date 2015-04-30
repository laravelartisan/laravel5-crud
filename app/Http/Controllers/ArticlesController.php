<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Article;
use App\User;

class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    private  $article ;
    private $user;

    public function __construct( Article $article, User $user){
        $this->user = $user;

        $this->article = $article;
    }

	public function index()
	{
		//


//        dd($this->user->find(29)->articles);
       /* foreach($this->user->get() as $user){

          dd( $ff = $this->user->find($user->id)->articles()->get());

        }*/
//        dd($ff);
//        dd($this->user->find(29)->articles()->get());

        $articles =  $this->article->get();
//        dd($articles);
//        return $articles;
         echo json_encode($articles);
//        return view('article',compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, Article $article)
	{
		//
        $article = $article->find($id);
//                dd($article);
        return $article;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}



}
