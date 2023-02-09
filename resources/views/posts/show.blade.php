@extends("layouts.app")
@section("title")
Show
@endsection
@section("allposts")
<a href="{{route('posts')}}">All Posts</a>

@endsection
@section("content")



    <div class="title">
    </div>
    <div class="info border">
        <p>Title : {{$post['title']}}</p>
        <p>Description : {{ $post['desc'] }}</p>

    </div>
    <hr>
    @endsection
