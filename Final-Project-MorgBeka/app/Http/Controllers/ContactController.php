<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.contact');
    }



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
