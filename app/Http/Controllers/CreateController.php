<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Validator;
class CreateController extends Controller
{
	// GET CREATE VIEW
	public function index(){
    	return view('create');
    } 

    // CREATE CONTACT
	public function create(Request $request){

    	$data = $request->except('_token');

    	//Validation
    	$rule = array(
    		'name' => 'required',
    		'fname' => 'required',
    		'username' => 'required|unique:contacts,username,id',
    		'gerder' => 'required',
    		'password' => 'required|min:3',
    		'birsday' => 'required',
		);

		$message = array(
			'username.required' => 'Заполните это поле',
			'username.unique' => 'Такой логин уже существует',
			'password.required' => 'Заполните это поле',
			'password.min' => 'Минимум 3 символов',
			'name.required' => 'Заполните это поле',
			'birsday.required' => 'Заполните это поле',
			'gerder.required' => 'Выберите пол',
			'fname.required' => 'Заполните это поле',
		);

		$valid = Validator::make($data, $rule, $message);

		if ($valid->fails()) {
			return redirect('create')->withErrors($valid);
		}else{
			// Model - Contact.php
			Contact::createuser($request, $data);
			return redirect('/contacts')->with('success', 'Удачно!');
		}
    }
}
