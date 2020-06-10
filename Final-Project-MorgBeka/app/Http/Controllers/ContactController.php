<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function getContact(){
        return view('pages.contact');
    }

    public function postContact(Request $request){

        $data =  [
            'name'=>$request->name,
             'email'=> $request->email,
             'subject'=> $request->subject,
             'messageT'=> $request->message

        ];

       //return view('mails.email', $data);
       //die();

        Mail::send('mails.email', $data, function (Message $mailmessage) use($request) {
            $mailmessage->to('morgbeka@student.arteveldehs.be', 'Morgane Bekaert');
            $mailmessage->cc($request->email, $request->name);
            $mailmessage->subject($request->subject);
        });
        return view('pages.validationContact');
    }

//Save database

  /* public function save(Request $request){
        \request()->validate([
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'name' => request('email'),
            'subject' => request('subject'),
            'message' => request('message'),
        ];

        Contact::create($data);
        return view('pages.contact');

    } */


    public function index()
{
    return view('validationContact');
}
}
