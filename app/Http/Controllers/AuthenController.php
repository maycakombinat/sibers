<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Validator;
use Illuminate\Support\Facades\Auth;
class AuthenController extends Controller
{
	// GET AUTH VIEW
    public function index(){
    	return view('auth');
    }

    public function check(Request $request){

    	$data = $request->except('_token');

    	//Validation
    	$rule = array(
    		'username' => 'required',
    		'password' => 'required|min:3',
		);

		$message = array(
			'username.required' => 'Заполните это поле',
			'password.required' => 'Заполните это поле',
			'password.min' => 'Минимум 3 символов',
		);

		$valid = Validator::make($data, $rule, $message);

		if ($valid->fails()) {
			return redirect('/')->withErrors($valid);
		}else{
			
			// Login Form GET VALUE
    		$usersdata = array(
    			'username' => $request->get('username'), 
    			'password' => $request->get('password')
			);
			
			// Login and password Check
			if (Auth::attempt($usersdata)) {
				return redirect('/contacts')->with('success', 'Ураа');
			}else{
				return redirect('/');
			}
		}
    }

}
