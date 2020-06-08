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

@if($news->imageTitle)
                    <div class="img_box">
                        <img class="img" src=" {{ asset( $news->imagePath . '/' . $news->imageTitle) }} " >
                    </div>
 @endif


<a href="{{ route('news') }}"  class="back">Terug naar het overzicht</a>

</div>
@endsection
