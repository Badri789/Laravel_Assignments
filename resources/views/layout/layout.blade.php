<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}" type="text/css">
    @section('title')
        <title>Layout</title>
    @show
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{route('posts.all')}}">Blog</a>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('posts.all')}}">All Posts
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('posts.create')}}">Create Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tags.all')}}">All Tags</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tags.create')}}">Create Tag</a>
            </li>
        </ul>
    </div>
</nav>
    @yield('content')
</body>
</html>

