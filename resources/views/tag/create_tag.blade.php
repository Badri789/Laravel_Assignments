@extends('layout/layout')

@section('title')
    <title>Create Post</title>
@endsection

@section('content')
    <form method="post" enctype="multipart/form-data" action="{{route('tags.save')}}"
          style="width: 40%; margin: 3% auto;">
        <h3>Create Tag</h3>
        <div class="box-body">
            <div class="form-group">
                <label for="tagName">Post Title</label>
                <input id="tagName" type="text" class="form-control {{$errors->first('name') ? "is-invalid" : " "}}"
                       placeholder="Enter tag name" name="name">
                @if($errors->has('name'))
                    <p class="text-danger mt-2">{{$errors->first('name')}}..</p>
                @endif
            </div>
            <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
@endsection


