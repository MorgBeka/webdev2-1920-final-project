@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(Auth::check())
            <div class="card">
                <div class="card-header"> <p>You're logged in! <br> Which table do you want to see?</p></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                <div class="m-link">
                    <a class="a-link" href="/admin/about">About</a>
                    {{-- <button href="/admin/about">Newsletter</button> --}}
                    {{-- <button href="/admin/about">Donation</button> --}}
                    <a class="a-link" href="/admin/news">News</a>
                    <a class="a-link" href="/admin/privacy">Privacy</a>
                    <a class="a-link" href="/admin/contact">Contact</a>
                </div>

                </div>
            </div>

            @else
            <p>You're not logged in</p>
            @endif
        </div>
    </div>
</div>
@endsection
