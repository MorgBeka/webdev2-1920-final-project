@extends('layout')

@section('content')


<div class="pages">
    <div class="title">
        <h4>PRIVACY</h4>
    </div>

@foreach($privacy as $text)
    <div class="privacy">
        <div class="titleArticle">
            {{$text->title}}
        </div>

        <div class="text">
            {{$text->content}}
        </div>
    </div>
@endforeach
@endsection
