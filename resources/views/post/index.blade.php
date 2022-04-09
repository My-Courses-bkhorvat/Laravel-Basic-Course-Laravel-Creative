@extends('loyats.main')



@section('content')
    <div><a href="{{ route('post.create') }}" class="btn btn-primary">Add</a></div>

    @foreach($posts as $post)
        <div>{{ $post->id }}. {{ $post->title }}</div>
    @endforeach
@endsection
