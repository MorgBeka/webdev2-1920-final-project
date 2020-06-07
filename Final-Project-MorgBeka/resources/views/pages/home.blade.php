@extends('layout')

@section('content')

<div class="home">
        <div class="head">
            <div class="title">
                {{ $title }}
            </div>
            <div class="subtitle">
                {!! $subtitle !!}
            </div>

            {{-- {{ asset('/asperge.png') }} --}}

        </div>
</div>
@endsection
