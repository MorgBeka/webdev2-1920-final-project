@extends('layout')

@section('content')

<div class="o-home">
        <div class="m-home">
            <div class="a-home__title">
                {{ $title }}
            </div>
            <div class="a-home__subtitle">
                {!! $subtitle !!}
            </div>

            <div class="a-home__link">
                <a href="https://apps.apple.com/app/id970107419?mt=8" class="appstore">Ga naar de AppStore</a><br>
                <a href="https://play.google.com/store/apps/details?id=com.hellofresh.androidapp&referrer=adjust_reftag%3Dc3klLkrVqmZQE%26utm_source%3DWebsite%26utm_campaign%3DBE%26utm_content%3Dbrowser%26utm_medium%3Dbrowser" class="playstore">Ga naar de PlayStore</i></a>
            </div>
        </div>
</div>
@endsection
