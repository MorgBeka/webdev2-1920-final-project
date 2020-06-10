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
        $donation = Donation::all();
        return view('pages.donationGift')->with(compact('donation'));
    }

    public function getSuccess($donation_id, Request $request){

        //dd($request->all());

        if($request->isPublic == null){
            $request->isPublic = false;
        } else{
            $request->isPublic = true;
        }


        $privacy = Donation::where('id', $donation_id)->first();


        $data = [
            'lastName' => request('lastName'),
            'firstName' => request('firstName'),
            'email' => request('email'),
            'amount' => request('amount'),
        ];

        // validator slaat request op naar databank met eerst parameter

        $validator=Validator::make($request->all());

        //wanneer request niet voldoet aan regels kom je in de if
        if($validator->fails()) {
            return Redirect::back()
            ->withInput()
            ->withErrors($validator)
            ->with(
                [
                    'notification'=>'succes',
                    'message'=>'Er ging iets mis'
                ]
            );
        }

        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $request->amount . ".00" // You must send the correct number of decimals, thus we enforce the use of strings
            ],

            "description" => "My donation to Hello Fresh",
            "redirectUrl" => route('webhooks.mollie'),
            "webhookUrl" => route('donation.success'),
        ]);

        $payment = Mollie::api()->payments->get($payment->id);


        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }






    public function postDonation(){

    }


    public function makeDonation(){

    }
}
