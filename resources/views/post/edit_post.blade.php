@extends('layout.layout')

@section('title')
    <title>Edit Post</title>
@endsection

@section('content')
    <form method="post" enctype="multipart/form-data" action="{{route('posts.update', $post->id)}}"
          style="width: 40%; margin: 3% auto;">
        @csrf
        @method('PUT')
        <h3>Edit Post</h3>
        <div class="box-body">
            <div class="form-group">
                <label for="postTitle">Post Title</label>
                <input id="postTitle" type="text" class="form-control"  value="{{old("title", $post->title)}}"
                       name="title">
            </div>
            <div class="form-group">
                <label for="postCategory">Post Category</label>
                <input id="postCategory" type="text" class="form-control"  value="{{old("category", $post->category)}}"
                       name="category">
            </div>
            <div class="form-group">
                <label for="postBody">Post Body</label>
                <textarea id="postBody" rows="4" class="form-control" name="body">{{old("old", $post->body)}}</textarea>
            </div>
            <div class="form-group">
                <label for="postLikes">Post Likes</label>
                <input id="postLikes" type="number" class="form-control" value="{{old("likes", $post->likes)}}"
                       name="likes">
            </div>
            <div class="form-group">
                <label for="tagSelect">Tags:</label>
                <select name="tags[]" id="tagSelect" multiple>
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}" @if(in_array($tag->id, $post->tags->pluck('id')->toArray()))
                        selected @endif>{{$tag->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
