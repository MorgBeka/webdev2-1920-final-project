<h1>Create Privacy</>

    <form class="" method="post" action={{ route('aboutUpdate', $privacy->id) }}>
    @csrf
    @method("PATCH")

    <input type="text" name="title" placeholder="Titel"  value="{{$privacy->title}}">

        <textarea type="text" name="summary"  placeholder="Samenvatting">{{$privacy->summary}}"</textarea>

        <textarea type="text" name="content"  placeholder="Inhoud">{{$privacy->content}}</textarea>


        <button type="submit">
            {{ __('UPDATE') }}
        </button>
    </form>

