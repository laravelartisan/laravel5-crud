<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;

class MailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    private $name;
    private $email;
	public function index()
	{
		//
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
    public function email(Request $request){

        $this->name = $request->get('name');
        $this->email = $request->get('email');
        $this->user_message =  $request->get('message');

        \Mail::send('emails.contact',
            array(
                'name' => $this->name,
                'email' => $this->email,
                'user_message' => $this->user_message,

            ), function($message)
            {
                $message->from('sssamudra7@gmail.com');
                $message->to($this->email, 'Admin')->subject('TODOParrot Feedback');
            });





//        return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
//        return \Redirect::to('mailConfirmation');
        return \Redirect::to('contact')->with('message', 'Thanks for contacting us!');
    }

}
