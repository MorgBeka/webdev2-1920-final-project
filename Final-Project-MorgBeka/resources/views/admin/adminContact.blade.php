@if(Auth::check())

@extends('layoutAuth')

@section('content')


<div class="topbar">
    <div class="row">
        <ul class="dropdown_menu" data-dropdown-menu="tckp8q-dropdown-menu"  role="menubar">
            <li role="menuitem"><a href="/admin">Admin</a></li>
            <li role="menuitem"><a href="/admin/about">About admin table</a></li>
            <li role="menuitem"><a href="/admin/news">News admin table</a></li>
            <li role="menuitem"><a href="/admin/privacy">Privacy admin table</a></li>
            <li role="menuitem"><a href="/admin/contact">Contact admin table</a></li>
        </ul>
    </div>
</div>

<h1 class="title">Admin table - Contact</h1>

<table class="adminTable">
    <tr class="header">
        <th class="header__title">TITEL</th>
        <th class="header__title">SUMMARY</th>
        <th class="header__title">CONTENT</th>
        <th class="header__title">ANSWER</th>
        <th class="header__title">DELETE</th>
    </tr>



    @foreach($contact as $index)
    <tr>
        <td>{{$index->title}}</td>
        <td>{{$index->summary}}</td>
        <td class="contentTable">{{$index->content}}</td>
        <td><a class="button">Edit</a></td>
        <td><a class="button"  href="{{ route('contactDelete', $index->id)}}">Delete</a></td>
    </tr>

    @endforeach
</table>
@endsection

@else
<p>You're not logged in</p>
@endif
