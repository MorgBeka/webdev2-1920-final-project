<h1 class="title">about admin table</h1>

<table class="tableAbout">
    <tr>
        <th>TITEL</th>
        <th>SUMMARY</th>
        <th>CONTENT</th>
        <th>EDIT</th>
    </tr>

    <td><a href="{{ route('aboutCreate')}}">Create</a></td>

    @foreach($about as $index)
    <tr>
        <td>{{$index->title}}</td>
        <td>{{$index->summary}}</td>
        <td>{{$index->content}}</td>
    </tr>

    <tr>
        <td><a href="{{ route('aboutEdit', $index->id)}}">Edit</a></td>
        <td><a href="{{ route('aboutDelete', $index->id)}}">Delete</a></td>
    </tr>
    @endforeach
</table>
