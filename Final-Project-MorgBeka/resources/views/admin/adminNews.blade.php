<h1>news admin table</h1>

<table class="table">
    <tr>
        <th class="head">TITEL</th>
        <th>SUMMARY</th>
        <th>CONTENT</th>
        <th>EDIT</th>
    </tr>

    <td><a href="{{ route('aboutCreate')}}">Create</a></td>

    @foreach($news as $index)
    <tr>
        <td>{{$index->title}}</td>
        <td>{{$index->summary}}</td>
        <td>{{$index->content}}</td>
    </tr>

    <tr>
        <td><a href="{{ route('newsEdit', $index->id)}}">Edit</a></td>
        <td><a href="{{ route('newsDelete', $index->id)}}">Delete</a></td>
    </tr>
    @endforeach
</table>
