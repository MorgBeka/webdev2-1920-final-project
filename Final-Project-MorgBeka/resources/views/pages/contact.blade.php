@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>newsletter</title>
</head>
<body>

    <div class="pages">
                <div class="titleNewsletter">
                    <h4>CONTACT</h4>
                </div>



                <div class="m-container">
                    <div class="text">
                        <p>Heeft u een vraag of een opmerking? Laat het ons hier weten! </p>
                    </div>
                <div class="img-box-pages">
                    <img  class="img-box-pages__contact" src="{{ asset('../images/contact.jpg')}}">
                </div>
                </div>

                <form class="form" method="POST" action="{{ route('saveContact') }}">
                    @csrf
                    <label classname="form__label" for="email">E-mailadres</label><br>
                    <input type="text" id="email" name="email"><br><br>
                    <label classname="form__label" for="subject">Onderwerp</label><br>
                    <input type="text" id="subject" name="subject"><br><br>
                    <label classname="form__label" for="message">Bericht</label><br>
                    <textarea type="text" id="message" name="message" rows="4" cols="45"></textarea><br><br>

                    <input classname="submit" type="submit" value="VERZEND" style="background-color: #9DBF21; color: #F1F1F1; border: none; height: 30px" >


                </form>
    </div>
</body>
</html>
@endsection
