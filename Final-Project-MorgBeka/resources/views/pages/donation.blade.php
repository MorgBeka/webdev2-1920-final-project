@extends('layout')

@section('content')

<div class="pages">

    <div class="column">

            <div class="img-box">
                <img  class="img-box__donation" src="{{ asset('../images/donation1.jpg')}}">
                <img  class="img-box__donation" src="{{ asset('../images/donation2.jpg')}}">
                <img  class="img-box__donation" src="{{ asset('../images/donation3.jpg')}}">
            </div>


        <div class="right">
                <div class="m-title">
                    <h4>DONATIE</h4>
                </div>

                <div class="m-donation">
                   <a href="donationGift" class="m-donation__gift">Doe een gift</a>
                </div>

                <div class="m-donation">
                    <p>Eén van de eigenschappen van ons is dat we tegen voedselverspilling zijn.
                        Dit kan u merken aan de hoeveelheden ingrediënten. Doordat iedereen op voorhand zijn bestelling doorgeeft bestellen wij net voldoende ingrediënten als nodig. Ook over de hoeveelheid denken wij grondig na, zodat ook onze gezinnen thuis niet veel overschot hebben.
                        <br><br>
                        Als we aan voedselverspilling denken denken we automatisch ook aan de mensen in armoede die vaak weinig geld hebben om eten te kopen. Ook voor hen is een gezonde maaltijd belangrijk!
                        <br><br>
                        Hiervoor willen wij geld inzamelen, met de donaties van jullie zal Hello Fresh samen met de voedselbanken gratis maaltijden schenken aan gezinnen die het moeilijker hebben. Door een donatie zal je mee strijden tegen de voedselverspilling en hongersnood.
                        </p>
                </div>
        </div>
    </div>

</div>
@endsection
