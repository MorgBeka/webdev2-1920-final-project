<?php

namespace App\Http\Controllers;

use AboutSeeder;
use App\About as AppAbout;
use Illuminate\Http\Request;
use App\About;


class AboutController extends Controller
{
    public function index(){
        $about = About::orderBy('id', 'asc')->paginate(3);
        return view('pages.about')->with(compact('about'));
    }


    public function detail($about_id){
        $about = About::where('id', $about_id)->first();

        return view('pages.aboutDetail')->with(compact('about'));
    }
}
