@if(Auth::check())

<h1>Create Privacy</h1>

<form class="" method="POST" action={{ route('privacySave') }} enctype="multipart/form-data">
@csrf
    <input type="text" name="title" placeholder="Titel">

    <textarea type="text" name="content"  placeholder="Inhoud"></textarea>


    <button type="submit">
        {{ __('SAVE') }}
    </button>
</form>

@endif
