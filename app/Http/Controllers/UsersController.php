<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use Auth;
use App\Http\Requests\LoginRequest;
use App\Article;

//use Request;


//use App\Http\Controllers\Auth\AuthController;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    protected $all;
    private $name;
    private $email;
    private $confirmationCode;



	public function index()
	{
		//
           /*if(Auth::user()){
               return view('users.index');
           }*/
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
//        $this->mail();
        $this->name = $request->get('name');
        $this->email = $request->get('email');

        $this->confirmationCode = str_random(30);

//        $user->confirmation_code = $this->confirmationCode;


       $mail = \Mail::send('emails.contact',
            array(
                'name' => $this->name,
                'email' => $this->email,

                'confirmationCode'=>$this->confirmationCode

            ), function($message)
            {
                $message->from('sssamudra7@gmail.com');
                $message->to($this->email, 'Admin')->subject('TODOParrot Feedback');
            });


        $request->all = array_replace($request->all(), array('password'=>\Hash::make($request->password)));
//          array_push($request->all,$user->confirmation_code);
        $request->all= array_add($request->all,'confirmation_code',$this->confirmationCode);
//        dd($request->all);
//        Auth::login($user->create($request->all));
        $user->create($request->all);

//
        return \Redirect::to('users')->with('message', 'a message has been sent to your email');
//        return view ('users.index');


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
    public function login(LoginRequest $request,Article $articles, User $user  )
    {
        //
//               $articles = $articles->get();

        Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' => 1], $request->has('remember'));
        $usersArticles = $user->find(Auth::user()->id)->articles()->get();
//           dd( $usersArticles);
        return view('users.index',compact('usersArticles'));
//        return redirect()->route('users.index');


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

    public function registered($confirmationCode){

        /*if( ! $confirmationCode)
        {
            throw new InvalidConfirmationCodeException;
        }*/

//        $user = User::whereConfirmationCode($confirmationCode)->first()->update(['active'=>1,'confirmation_code'=>null]);
//        $user = User::whereConfirmationCode($confirmationCode)->first()->update(['active'=>1]);
        $user = User::whereConfirmationCode($confirmationCode)->first();



        if( User::where('confirmation_code','=',$confirmationCode)->update(['confirmation_code'=>null,'active'=>1])){

            Auth::login($user);

        }






//                 dd($user);
       /* if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }*/

        /*$user->active = 1;
        $user->confirmation_code = null;
        $user->save();*/

                     return view('users.index');
       /* Flash::message('You have successfully verified your account.');

        return Redirect::route('login_path');*/

    }




   /* public function upload(){
        if (Request::hasFile('upload')) {
            var_dump($result = Imageupload::upload(Request::file('upload'))) ;
        }else{
            echo 'no file read';
        }
    }*/



}
