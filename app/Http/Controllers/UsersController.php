<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use Auth;
use App\Http\Requests\LoginRequest;
//use Request;


//use App\Http\Controllers\Auth\AuthController;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    protected $all;
	public function index()
	{
		//

        return view('users.index');
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
	public function store(UsersRequest $request, User $user)
	{
		//
        $request->all = array_replace($request->all(), array('password'=>\Hash::make($request->password)));
//        dd($request->all);
        Auth::login($user->create($request->all));
//
        return view ('users.index');


//        return Redirect::to('users');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
    public function login(LoginRequest $request )
    {
        //
        Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'));

                return redirect()->route('users.index');


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
   /* public function upload(){
        if (Request::hasFile('upload')) {
            var_dump($result = Imageupload::upload(Request::file('upload'))) ;
        }else{
            echo 'no file read';
        }
    }*/

}
