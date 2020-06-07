@extends('layout')

@section('content')

<div class="pages">
            <div class="title">
                <h4>NEWS</h4>
            </div>

@foreach($news as $text)
    <div class="about">
            <div class="titleArticle">
                {{$text->title}}
            </div>

            <div class="text">
                {{$text->summary}}
            </div>
    </div>



    @if($text->imageTitle)

    <img src=" {{ asset( $text->imagePath . '/' . $text->imageTitle) }} " >
    {{-- <div style="width: 400px; height:400px; background-color:url({{ $text->imagePath . '/' . $text->imageTitle}})"> --}}
        @endif

                   {{-- check of er content is --}}
    @if ($text->content)
    <a href="{{ route('NewsDetail', $text->id) }}"> Lees meer </a>
    @endif
    </div>

@endforeach

</div>
@endsection
