@extends('layout')

@section('content')

<div class="pages">

    <div class="title">
        <h4>NEWS</h4>
    </div>

    @foreach($news as $text)
            <div class="m_element">
                    <div class="a_element">
                        <h1 class="a_element__title">{{$text->title}}</h1><br>
                        {{$text->summary}}<br>

                                           {{-- check of er content is --}}
                        @if ($text->content)
                            <a href="{{ route('NewsDetail', $text->id) }}"  class="linkDetail"> Lees meer </a>
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
