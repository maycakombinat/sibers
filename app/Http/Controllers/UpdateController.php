<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class UpdateController extends Controller
{
    // Get View updateuser.blade.php
    public function updateuser($id)
     {
        $data = Contact::find($id);
        return view('edit', [
          'data' => $data
        ]);
     }

    // Update function
    public function updateUs(Request $r, $id)
    {
      $contacts = array(
        'name' => $r->get('name'),
        'fname' => $r->get('fname'),
        'username' => $r->get('username'),
        'gerder' => $r->get('gerder'),
        'password' => $r->get('password'),
        'birsday' => $r->get('birsday')
       );
      Contact::where('id', $id)->update($contacts);
      return redirect('/contacts')->with('success', 'Удачно!');
    }
}
