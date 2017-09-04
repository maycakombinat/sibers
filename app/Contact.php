<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Contact extends Authenticatable
{
    // Connect TABLE in MySql
    protected $table = 'contacts';

      public static function createuser(Request $request,$data)
    {
    	$users = new Contact();
    	$users->name = $request->get('name');
    	$users->fname = $request->get('fname');
    	$users->username = $request->get('username');
    	$users->password = Hash::make($request->get('password'));
    	$users->birsday = $request->get('birsday');
    	$users->gerder = $request->get('gerder');
    	$users->save();
    }
}
