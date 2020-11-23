@extends('layout/layout')

@section('title')
    <title>Tags</title>
@endsection

@section('content')
    @foreach($tags as $tag)
        <div style="width: 50%; margin: 0 auto;" class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">{{$tag->name}}</h4>
            </div>
            <div class="w-50 m-1">
                <a class="btn btn-warning" href="{{route('tags.edit', $tag->id)}}">Edit</a>

                <form method="post" action="{{route('tags.delete', $tag->id)}}" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </div>
        </div>
    @endforeach
@endsection
