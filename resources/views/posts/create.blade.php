<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <mata charset="UTF=8">
        <title>Blog</title>
</head>

<body>
    <h1>Blog Name</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class="title">
            <h2>Title</h2>
            <input type="text" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}" />
            <p class="title_error" style="color:red">{{$errors->first('post.title')}}</p>
        </div>
        <div class="body">
            <h2>Body</h2>
            <textarea name="post[body]" placeholder="今日も一日お疲れ様でした" value="{{old('post.body')}}"></textarea>
        </div>
        <input type="submit" value="store" />
        <p class="body_error" style="color:red">{{$errors->first('post.body')}}</p>
    </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>

</html>