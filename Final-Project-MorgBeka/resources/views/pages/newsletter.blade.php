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
                    <h4>{{ $title }}</h4>
                </div>

                <div class="m-container">
                    <div class="text">
                        <p>{{ $text }}</p>
                    </div>
                <div class="img_box">
                    <img  class="img_newsletter" src="{{ asset('../images/newsletter.jpg')}}">
                </div>
                </div>


                <form class="form">
                    <label classname="form__label" for="firstName">Voornaam</label><br>
                    <input type="text" id="firstName" name="firstName"><br><br>
                    <label classname="form__label" for="lastName">Achternaam</label><br>
                    <input type="text" id="lastName" name="lastName"><br><br>
                    <label classname="form__label" for="email">E-mailadres</label><br>
                    <input type="text" id="email" name="email"><br><br>

                    <input classname="submit" type="submit" value="SCHRIJF IN" style="background-color: #9DBF21; color: #F1F1F1; border: none; height: 30px ">
                  </form>



    </div>
</body>
</html>
@endsection
