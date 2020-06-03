@extends('layout')

@section('content')

<div class="home">
    <div class="row">
        <div class="head">
            <div class="title">
                <h4>{{ $title }}</h4>
            </div>
            <div class="subtitle">
                {!! $subtitle !!}
            </div>
         </div>
    </div>
</div>
@endsection
