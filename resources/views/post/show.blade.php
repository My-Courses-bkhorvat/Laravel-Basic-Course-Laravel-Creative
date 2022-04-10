@extends('loyats.main')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <img src="{{ $post->image }}"><p>{{ $post->image }}</p>
    <p>Likes: {{ $post->likes }}</p>
    <p>{{ $post->created_at }}</p>
    <div>
        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('post.destroy', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
    </div>


@endsection
