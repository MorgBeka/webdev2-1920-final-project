<?php

namespace App\Http\Controllers;

use App\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
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
        $privacy = Privacy::all();
        return view('pages.privacy')->with(compact('privacy'));
    }


}
