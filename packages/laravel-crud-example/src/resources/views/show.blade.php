<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Post</title>
</head>
<body>
<a href="{{route('post.index')}}">All Posts</a>
<hr>
<form>
    <input type="text" name="title" placeholder="Enter your title" value="{{$post->title}}" disabled>
    <br>
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Enter your content"
              disabled>{{$post->content}}</textarea>
    <br>
</form>

</body>
</html>

