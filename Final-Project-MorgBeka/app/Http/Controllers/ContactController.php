<?php

namespace App\Http\Controllers;

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
        return view('contact');
    }

    public function getIndex() {
        $title = 'Contact';
        $text = "Heeft u een vraag of een opmerking? Laat het ons hier weten! ";


        return view('pages.contact', [
            'title' => $title,
            'text' => $text,
        ]);
    }
}
