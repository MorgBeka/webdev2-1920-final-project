<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Hello Fresh</title>
</head>
<body>
      @if(Auth::check())
      <h1>Test</h1>
      @else

    <div class="topbar">
        <div class="row">
            <ul class="dropdown_menu" data-dropdown-menu="tckp8q-dropdown-menu"  role="menubar">
                <li role="menuitem"><a href="{{route('about') }}">Over</a></li>
                <li role="menuitem"><a href="{{route('newsletter') }}">Nieuwsbrief</a></li>
                <li role="menuitem"><a href="{{route('donation') }}">Donatie</a></li>
                <div class="logo">
                    <img  href="{{route('home') }}" class="img_navigation" src="{{ asset('../images/logo_hellofresh.png')}}">
                </div>
                <li role="menuitem"><a href="{{route('news') }}">Nieuws</a></li>
                <li role="menuitem"><a href="{{route('contact') }}">Contact</a></li>
                <li role="menuitem"><a href="{{route('privacy') }}">Privacy</a></li>
            </ul>
        </div>


    </div>
    @endif
</body>
</html>
