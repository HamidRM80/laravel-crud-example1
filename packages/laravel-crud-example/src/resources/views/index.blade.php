<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
    <style>
        table, th, td {
            border: 1px solid black;
            padding: 20px;
        }
    </style>
</head>
<body>
<a href="{{route('post.create')}}">Create Post</a>
<hr>
<table>
    <thead>
    <tr>
        <th>Title</th>
        <th>Content</th>
        <th colspan="3">operations</th>
    </tr>
    </thead>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td><a href="{{route('post.edit', ['post'=>$post->id])}}">Edit</a></td>
            <td><a href="{{route('post.show', ['post'=>$post->id])}}">Show</a></td>
            <td><a href="{{route('post.destroy', ['post'=>$post->id])}}">delete</a></td>
        </tr>
    @endforeach
    <tbody>

    </tbody>
</table>
</body>
</html>
