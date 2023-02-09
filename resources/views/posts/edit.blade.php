@extends("layouts.app")

@section("title")
Edit Form
@endsection
@section("allposts")
<a href="{{route('posts')}}">All Posts</a>

@endsection

@section("content")


<form method="POST" action="{{route('post.update', $post->id)}}" >
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">title</label>
      <input type="text" class="form-control" name="title" value="{{$post->title}}">
    </div>
    <div class="mb-3">
      <label  class="form-label">desc</label>
      <textarea name="desc" id="" cols="30" rows="10" class="form-control">{{$post->desc}}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">creator</label>
        <select name="creator" id=""class="form-control" >
            @foreach ($Users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>

            @endforeach


        </select>
      </div>
    <button type="submit" class="btn btn-primary">EDIT</button>
  </form>


@endsection

