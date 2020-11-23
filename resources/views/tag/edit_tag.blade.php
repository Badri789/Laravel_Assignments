@extends('layout/layout')

@section('title')
    <title>Edit Tag</title>
@endsection

@section('content')
    <form method="post" enctype="multipart/form-data" action="{{route('tags.update', $tag->id)}}"
          style="width: 40%; margin: 3% auto;">
        @csrf
        @method('PUT')
        <h3>Edit Tag</h3>
        <div class="box-body">
            <div class="form-group">
                <label for="tagName">Tag Title</label>
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


