<?php

namespace App\Http\Controllers;

use App\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index()
    {
        $privacy = Privacy::all();
        return view('pages.privacy')->with(compact('privacy'));
    }


}
