@extends('layout')

@section('content')

<div class="pages">

    <div class="title">
        <h4>ABOUT</h4>
    </div>

    @foreach($about as $text)
        <div class="m_element">
                <div class="a_element">
                    <h1 class="a_element__title">{{$text->title}}</h1><br>
                    <p  class="a_element__summary">{{$text->summary}}<br></p>

                                     {{-- check of er content is --}}
                @if ($text->content)
                    <a href="{{ route('AboutDetail', $text->id) }}" class="linkDetail"> Lees meer </a>
                @endif
                </div>

            @if($text->imageTitle)
                <div class="img_box">
                    <img class="img" src=" {{ asset( $text->imagePath . '/' . $text->imageTitle) }} " >
                </div>
            @endif
        </div>
    @endforeach

</div>
@endsection
