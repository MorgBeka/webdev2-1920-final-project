<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mollie\Laravel\Facades\Mollie;

class WebHookController extends Controller
{
    public function handle(Request $request) {
        if (! $request->has('id')) {
            return view('pages.validationDonation');
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if ($payment->isPaid()) {
            Log::info('Donatie is gelukt' . json_encode($payment));
        } else{
            Log::warning('Donatie is niet gelukt' . json_encode($payment));

        }
    }
}
