@if(Auth::check())

<h1>Create news</h1>

<form class="" method="post" action={{ route('newsUpdate', $news->id) }} enctype="multipart/form-data">
@csrf
@method("PATCH")

<input type="text" name="title" placeholder="Titel"  value="{{$news->title}}">

    <textarea type="text" name="summary"  placeholder="Samenvatting">{{$news->summary}}"</textarea>

    <textarea type="text" name="content"  placeholder="Inhoud">{{$news->content}}</textarea>

    <input type="file" name="file[]" id="file">

    {{-- <input type="file" name="file[]" id="file"> --}}

    <button type="submit">
        {{ __('UPDATE') }}
    </button>
</form>

@endif
