@extends('layout')

@section('content')


<div class="pages">

    <div class="title">
        <h6>{{$about->title}}</h6>
    </div>

    <div class="detailContent">
        {{$about->content}}
    </div>
{{-- $about komt van de controller (compact())--}}


<a href="{{ route('about') }}"  class="back">Terug naar het overzicht</a>

</div>
@endsection
