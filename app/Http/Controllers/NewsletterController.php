<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
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
        return view('newsletter');
    }

    public function getIndex() {
        $title = 'Nieuwsbrief';
        $text = "Wilt u maandelijks op de hoogte gebracht worden over alle verschillende acties van Hello Fresh maar ook over seizoensgebonden gerechten?
                   Schrijf je dan nu in voor onze nieuwsbrief!";

        return view('pages.newsletter', [
            'title' => $title,
            'text' => $text,
        ]);
    }
}
