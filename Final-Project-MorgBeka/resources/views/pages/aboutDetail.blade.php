@extends('layout')

@section('content')


<div class="pages">

    <div class="title">
        <h6>{{$about->title}}</h6>
    </div>

    <div class="containerDetail">
        @if($about->imageTitle)
                        <div class="img_box">
                            <img class="img" src=" {{ asset( $about->imagePath . '/' . $about->imageTitle) }} " >
                        </div>
        @endif

        <div class="detailContent">
            {{$about->content}}
        </div>
    </div>
{{-- $about komt van de controller (compact())--}}


<a href="{{ route('about') }}"  class="back">Terug naar het overzicht</a>

</div>
@endsection
