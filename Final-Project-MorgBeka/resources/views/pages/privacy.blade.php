@extends('layout')

@section('content')


<div class="pages">

    <div class="title">
        <h4>PRIVACY</h4>
    </div>

@foreach($privacy as $text)
    <div class="m_element">

        <div class="a_element">
            <h1 class="a_element__title">{{$text->title}}</h1><br>
            {{$text->content}}
        </div>


    </div>
@endforeach
@endsection
