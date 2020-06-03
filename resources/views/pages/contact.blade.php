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
        <div class="row">
                <div class="titleNewsletter">
                    <h4>{{ $title }}</h4>
                </div>

                <div class="text">
                    <p>{{ $text }}</p>
                </div>

                <form class="form">
                    <label classname="form__label" for="email">E-mailadres</label><br>
                    <input type="text" id="firstName" name="firstName"><br><br>
                    <label classname="form__label" for="subject">Onderwerp</label><br>
                    <input type="text" id="subject" name="subject"><br><br>
                    <label classname="form__label" for="message">Bericht</label><br>
                    <textarea type="text" id="message" name="message" rows="4" cols="45"></textarea><br><br>

                    <input classname="submit" type="submit" value="Verzend">
                  </form>

        </div>
    </div>
</body>
</html>
@endsection
