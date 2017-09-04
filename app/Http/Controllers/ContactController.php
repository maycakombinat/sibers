<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    // GET CONTACTS VIEW
    public function index(){
        // GET ALL CONTACTS
    	$data = Contact::orderBy('id', 'DESC')->paginate(4);
    	return view('contacts', [
    		'data' => $data
		]);
    }

    // GET PROFILE VIEW
    public function detail($id){
         // GET PROFILE DATA
    	$data = Contact::where('id', $id)->get();
    	return view('detail', [
    		'data' => $data
		]);
    }

    // DELETE CONTACT
    public function delete($id){
    	$data = Contact::find($id);
    	$data->delete();
   		return redirect('contacts')->with('success', 'Удачно!');
    }
}
