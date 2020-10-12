@extends("layout.layout")
@section("content")
<div>
    <h1>Create</h1>
    <form method="post" enctype="multipart/form-data" action="{{route('posts.save')}}">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Post Title</label>
                <input type="name" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Post Text</label>
                <input type="name" class="form-control" placeholder="Post Text" name="post_text">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Post Likes</label>
                <input type="name" class="form-control" placeholder="Post Likes" name="likes">
            </div>
        </div>
        <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

@endsection
