<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
</head>
<body>
<a href="{{route('post.index')}}">All Posts</a>
<hr>
<form action="{{route('post.store')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Enter your title">
    @error('title')
    <strong>{{ $message }}</strong>
    @enderror
    <br>
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Enter your content"></textarea>
    @error('content')
    <strong>{{ $message }}</strong>
    @enderror
    <br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
