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
                    <p>Bedankt dat u een gift wilt doen! <br> Vul hieronder je gegevens in en het gewenste bedrag</p>

                </div>

                <div class="m-donation__form">
                    <form class="form" method="post" action="/success">
                        @csrf
                        <label classname="form__label" for="lastName">Achternaam</label><br>
                        <input type="text" id="lastName" placeholder="Achternaam*" name="lastName" required><br><br>

                        <label classname="form__label"  for="firstName">Voornaam</label><br>
                        <input type="text" id="firstName" placeholder="Voornaam*" name="firstName" required><br><br>

                        <label classname="form__label" for="email">E-mailadres</label><br>
                        <input type="text" placeholder="E-mail*" id="email" name="email"><br><br>

                        <label classname="form__label" for="amount">Hoeveel wilt u doneren? (in €)</label><br>
                        <input type="number" id="amount" name="amount" placeholder="Bedrag" min="0" value="10" required><br><br>

                        <label classname="form__label">Mag je donatie zichtbaar zijn voor iedereen?</label><br>
                        <input type="radio" name="isPublic" id="isPublic" value="true">

                        <button type="submit" class="m-donation__gift">DONEER</button>
                    </form>
                </div>


           <div class="m-title">
                <h6>Geplaatste donaties</h6>
            </div>
            <div class="m-donation__list">
                    @foreach($donations as $donation)
                    @if($donation->isPublic == true)
                <div class="m_element">
                        <div class="a_element">
                            <h1 class="a_element__title">{{$donation->firstName}} {{$donation->lastName}}</h1><br>
                            <p  class="a_element__summary">€ {{$donation->amount}}. 00</p>
                        </div>
                </div>
                    @endif
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
