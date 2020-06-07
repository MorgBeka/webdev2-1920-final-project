<h1>Create Privacy</h1>

<form class="" method="POST" action={{ route('privacySave') }}>
@csrf
    <input type="text" name="title" placeholder="Titel">

    <textarea type="text" name="summary"  placeholder="Samenvatting"></textarea>

    <textarea type="text" name="content"  placeholder="Inhoud"></textarea>


    <button type="submit">
        {{ __('SAVE') }}
    </button>
</form>

