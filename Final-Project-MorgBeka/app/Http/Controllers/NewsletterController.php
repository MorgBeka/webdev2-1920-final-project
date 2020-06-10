<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

class NewsletterController extends Controller
{
    public function getIndex() {

        return view('pages.newsletter', [

        ]);
    }

    public function postNewsletter(Request $request){
        Newsletter::subscribeOrUpdate($request->email);
        return view('pages.validationNewsletter');
    }

    public function index()
    {
        return view('validationNewsletter');
    }
}
