@extends('layout.layout')

@section('title')
    <title>Create Post</title>
@endsection

@section('content')
    <form method="post" enctype="multipart/form-data" action="{{route('posts.save')}}"
           style="width: 40%; margin: 3% auto;">
        <h3>Create Post</h3>
        <div class="box-body">
            <div class="form-group">
                <label for="postTitle">Post Title</label>
                <input id="postTitle" type="text" class="form-control {{$errors->first('title') ? "is-invalid" : " "}}"
                       placeholder="Enter post title" name="title">
                @if($errors->has('title'))
                    <p class="text-danger mt-2">{{$errors->first('title')}}..</p>
                @endif
            </div>
            <div class="form-group">
                <label for="postCategory">Post Category</label>
                <input id="postCategory" type="text" class="form-control {{$errors->first('category') ? "is-invalid" : " "}}"
                       placeholder="Enter post category" name="category">
                @if($errors->has('category'))
                    <p class="text-danger mt-2">{{$errors->first('category')}}..</p>
                @endif
            </div>
            <div class="form-group">
                <label for="postBody">Post Body</label>
                <textarea id="postBody" class="form-control {{$errors->first('body') ? "is-invalid" : " "}}"
                          placeholder="Enter post text" name="body"></textarea>
                @if($errors->has('body'))
                    <p class="text-danger mt-2">{{$errors->first('body')}}..</p>
                @endif
            </div>
            <div class="form-group">
                <label for="postLikes">Post Likes</label>
                <input id="postLikes" type="number" class="form-control {{$errors->first('likes') ? "is-invalid" : " "}}"
                       placeholder="Enter post likes" name="likes">

                @if($errors->has('likes'))
                    <p class="text-danger mt-2">{{$errors->first('likes')}}..</p>
                @endif
            </div>
            <div class="form-group">
                <label for="tagSelect">Tags</label>
                <select name="tags[]" id="tagSelect" multiple>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection


