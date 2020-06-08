@extends('layout')

@section('content')


<div class="pages">

    <div class="title">
        <h4>PRIVACY</h4>
    </div>

    <div class="container_privacy">
        <img  class="img-box-pages__privacy" src="{{ asset('../images/privacy.jpg')}}">
    </div>
    
@foreach($privacy as $text)
    <div class="m-element_privacy">


            <div class="a-privacy">
                <h1 class="a-privacy__title">{{$text->title}}</h1><br>
                <p class="a-privacy__content">{{$text->content}}</p>
            </div>


    </div>
@endforeach
@endsection
