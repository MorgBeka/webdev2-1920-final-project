<h1>Privacy admin table</h1>

<table class="table">
    <tr>
        <th>TITEL</th>
        <th>CONTENT</th>
        <th>EDIT</th>
    </tr>

    <td><a href="{{ route('aboutCreate')}}">Create</a></td>

    @foreach($privacy as $index)
    <tr>
        <td>{{$index->title}}</td>
        <td>{{$index->content}}</td>
    </tr>

    <tr>
        <td><a href="{{ route('aboutEdit', $index->id)}}">Edit</a></td>
        <td><a href="{{ route('aboutDelete', $index->id)}}">Delete</a></td>
    </tr>
    @endforeach
</table>
