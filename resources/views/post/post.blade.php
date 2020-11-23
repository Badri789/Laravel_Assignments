@extends('layout.layout')

@section('title')
    <title>Post</title>
@endsection

@section('content')
    <div style="width: 50%; margin: 0 auto;" class="card mt-4">
        <div class="card-body">
            <h4 class="card-title">{{$post->title}}</h4>
            <h6 class="card-subtitle mb-2 text-muted">{{$post->category}}</h6>
            <p class="card-text">{{$post->body}}</p>
            <p class="card-text">Likes: {{$post->likes}}</p>
            Tags:
            @foreach($post->tags->pluck('name') as $tag)
                <p style="display: inline">{{$tag}} |</p>
            @endforeach
        </div>
        <div class="w-50 m-1">
            <a class="btn btn-warning" href="{{route('posts.edit', $post->id)}}">Edit</a>

            <form method="post" action="{{route('posts.delete', $post->id)}}" style="display: inline">
                @method('DELETE')
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
    </div>
@endsection






