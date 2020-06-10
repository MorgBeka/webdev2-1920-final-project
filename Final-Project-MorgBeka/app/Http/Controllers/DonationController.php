<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Mollie\Laravel\Facades\Mollie;
use Illuminate\Support\Facades\Validator;

class DonationController extends Controller
{

    public function donation()
    {
        return view('pages.donation');
    }

    public function getIndex()
    {
        $donations = Donation::all();
        return view('pages.donationGift')->with(compact('donations'));
    }

    public function getSuccess(Request $request){

        //dd($request->isPublic);


        $data = [
            'lastName' => request('lastName'),
            'firstName' => request('firstName'),
            'email' => request('email'),
            'amount' => request('amount'),
            'isPublic' => $request->isPublic,
        ];

        //mollie

        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $request->amount . ".00"
            ],

            "description" => "My donation to Hello Fresh",
            "redirectUrl" => route('webhooks.mollie'),
            "webhookUrl" => route('donation.success'),
        ]);

        $payment = Mollie::api()->payments->get($payment->id);
           // dd($payment);

        $donation = Donation::create($data);


        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }






    public function postDonation(){

    }


    public function makeDonation(){

    }
}
