@extends("layout.layout")
@section("content")
    <div>
        <ul>
            @foreach($posts as $post)
                <li>
                    <p>{{$post->title}}</p>
                    <p>{{$post->post_text}}</p>
                    <p>{{$post->likes}}</p>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
