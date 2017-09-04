<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// GET PAGE
Route::get('/', ['uses' => 'AuthenController@index'])->name('authen');

// GET REGISTER PAGE
Route::get('/register', ['uses' => 'RegisterController@index'])->name('regPage');

// GET CONTACTS PAGE
Route::get('contacts', ['uses' => 'ContactController@index'])->name('contacts');

// GET PROFILE PAGE
Route::get('contact/{id}', ['uses' => 'ContactController@detail'])->name('detail');

// DELETE
Route::get('delete/{id}', ['uses' => 'ContactController@delete'])->name('del');

// GET CREATE CONTACT PAGE
Route::get('/create', ['uses' => 'CreateController@index'])->name('create');

// UPDATE CONTACT PAGE
Route::get('/update/{id}', ['uses' => 'UpdateController@updateuser'])->name('updateContact');


// REGISTER
Route::post('/register', ['uses' => 'RegisterController@create'])->name('regCreate');

// CREATE CONTACT
Route::post('/contact', ['uses' => 'CreateController@create'])->name('createContact');

// AUTH
Route::post('/login', ['uses' => 'AuthenController@check'])->name('check');

// UPDATE CONTACT
Route::post('/update/{id}', ['uses' => 'UpdateController@updateUs'])->name('updateCon');


// LOGOUT
Route::get('/logout', function(){
	Auth::logout();

	return Redirect::to('');
})->name('logout')->middleware("auth");