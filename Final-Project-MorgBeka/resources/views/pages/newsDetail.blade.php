@extends('layout')

@section('content')


<div class="pages">

    <div class="title">
        <h6>{{$news->title}}</h6>
    </div>

    <div class="detailContent">
        {{$news->content}}
    </div>
{{-- $about komt van de controller (compact())--}}


<a href="{{ route('news') }}"  class="back">Terug naar het overzicht</a>

</div>
@endsection
