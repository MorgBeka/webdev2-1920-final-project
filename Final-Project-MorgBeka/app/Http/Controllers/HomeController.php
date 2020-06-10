<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function admin()
    {
        return view('admin');
    }

    public function getIndex() {
        $title = 'Hello Fresh';
        $subtitle = 'Nu verkrijgbaar in de app store!';

        return view('pages.home', [
            'title' => $title,
            'subtitle' => $subtitle
        ]);
    }
}

