<h1>Create News</h1>

<form class="" method="POST" action={{ route('newsSave') }}  enctype="multipart/form-data">
@csrf
    <input type="text" name="title" placeholder="Titel">

    <textarea type="text" name="summary"  placeholder="Samenvatting"></textarea>

    <textarea type="text" name="content"  placeholder="Inhoud"></textarea>

    <input type="file" name="file[]" id="file">


    <button type="submit">
        {{ __('SAVE') }}
    </button>
</form>

