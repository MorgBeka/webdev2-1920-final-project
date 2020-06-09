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
                    <h4>MAIL</h4>
                </div>





                <form class="form" method="post">
                    @csrf

                    <label classname="form__label" for="name">Naam</label><br>
                    <input type="text" id="name" name="name"><br><br>

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
