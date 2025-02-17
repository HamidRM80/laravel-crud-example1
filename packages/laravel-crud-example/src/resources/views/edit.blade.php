<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
</head>
<body>
<a href="{{route('post.index')}}">All Posts</a>
<hr>
<form action="{{route('post.update', ['post'=>$post->id])}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="title" placeholder="Enter your title" value="{{$post->title}}">
    @error('title')
    <strong>{{ $message }}</strong>
    @enderror
    <br>
    <textarea name="content" id="content" cols="30" rows="10"
              placeholder="Enter your content">{{$post->title}}</textarea>
    @error('content')
    <strong>{{ $message }}</strong>
    @enderror
    <br>
    <input type="submit" value="Update">
</form>

</body>
</html>
