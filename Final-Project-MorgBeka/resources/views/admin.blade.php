@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">     You are logged in!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <a href="/admin/about">About</a>
                    {{-- <button href="/admin/about">Newsletter</button> --}}
                    {{-- <button href="/admin/about">Donation</button> --}}
                    <a href="/admin/about">News</a>
                    <a href="/admin/about">Privacy</a>
                    {{-- <button href="/admin/about">Contact</button> --}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
