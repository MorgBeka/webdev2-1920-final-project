<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
        return view('home');
    }

    public function getIndex() {
        $title = 'Hello Fresh';
        $subtitle = 'Nu verkrijgbaar in de app store';

        return view('pages.home', [
            'title' => $title,
            'subtitle' => $subtitle
        ]);
    }
}

