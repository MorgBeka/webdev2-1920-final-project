<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'desc')->paginate(3);
        return view('pages.news')->with(compact('news'));
    }

    public function detail($news_id)
    {
        $news = News::where('id', $news_id)->first();
        // pages.aboutDetail --> mappen structuur
        // with (compact ()) --> mee geven van data uit de controller naar de aangesproken view
        // 'about' --> de data in de variable $about
        return view('pages.newsDetail')->with(compact('news'));
    }
}

