<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

     public function index()
    {
        return view('pages.contact');
    }

// Mail





//Save database

  public function save(Request $request){
        \request()->validate([
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'name' => request('email'),
            'subject' => request('subject'),
            'message' => request('message'),
        ];

        Contact::create($data);
        return view('pages.contact');

    }
}
