<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getContact(){
        return view('pages.mail');
    }

    public function postContact(Request $request){

        $data =  [
            'name'=>$request->name,
             'email'=> $request->email,
             'subject'=> $request->subject,
             'messageT'=> $request->message

        ];

       // return view('mails.email', $data);

        //die();


        // dd($data);
        Mail::send('mails.email', $data, function (Message $mailmessage) use($request) {
            // $mailmessage->sender('morgane.bekaert@hotmail.be');
            $mailmessage->to('morgbeka@student.arteveldehs.be', 'Morgane Bekaert');
            $mailmessage->cc($request->email, $request->name);
            $mailmessage->subject($request->subject);
            //$message->priority(3);
            //$message->attach('pathToFile');
        });

    }
}
