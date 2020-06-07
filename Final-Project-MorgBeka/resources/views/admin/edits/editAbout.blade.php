<h1>Create About</>

<form class="" method="post" action={{ route('aboutUpdate', $about->id) }} enctype="multipart/form-data">
@csrf
@method("PATCH")

<input type="text" name="title" placeholder="Titel"  value="{{$about->title}}">

    <textarea type="text" name="summary"  placeholder="Samenvatting">{{$about->summary}}"</textarea>

    <textarea type="text" name="content"  placeholder="Inhoud">{{$about->content}}</textarea>

    <input type="file" name="file[]" id="file">

    <button type="submit">
        {{ __('UPDATE') }}
    </button>
</form>

