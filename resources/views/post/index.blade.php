@extends('loyats.main')

@section('add_button')
    <a href="{{ route('post.create') }}" class="btn btn-outline-success">Add post</a>
@endsection

@section('content')

    @foreach($posts as $post)
        <div><a href="{{ route('post.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a></div>
    @endforeach
@endsection

