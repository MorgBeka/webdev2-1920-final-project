@extends('layout')

@section('content')


<div class="pages">

    <div class="title">
        <h6>{{$news->title}}</h6>
    </div>

    <div class="containerDetail">
        @if($news->imageTitle)
                        <div class="img_box">
                            <img class="img" src=" {{ asset( $news->imagePath . '/' . $news->imageTitle) }} " >
                        </div>
        @endif

        <div class="detailContent">
            {{$news->content}}
        </div>
    </div>

{{-- $about komt van de controller (compact())--}}

<a href="{{ route('news') }}"  class="back">Terug naar het overzicht</a>

</div>
@endsection
