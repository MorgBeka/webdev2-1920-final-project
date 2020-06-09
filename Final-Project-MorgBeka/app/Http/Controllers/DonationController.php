<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{

    public function index()
    {
        return view('donation');
    }

    public function getIndex() {
        $title = 'Donatie';


        return view('pages.donation', [
            'title' => $title,
        ]);
    }
}
