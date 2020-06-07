@extends('layout')

@section('content')

<div class="pages">

    <div class="title">
        <h4>ABOUT</h4>
    </div>
        @foreach($about as $text)
    <div class="aboutElement">
        <div class="a_aboutElement">
            <div class="titleArticle">
                {{$text->title}}
            </div>

            <div class="summary">
                {{$text->summary}}
            </div>
        </div>
            @if($text->imageTitle)

        <img src=" {{ asset( $text->imagePath . '/' . $text->imageTitle) }} " >
            @endif

                       {{-- check of er content is --}}
        @if ($text->content)
        <a href="{{ route('AboutDetail', $text->id) }}"> Lees meer </a>
    @endif

        </div>
           @endforeach



</div>
@endsection
