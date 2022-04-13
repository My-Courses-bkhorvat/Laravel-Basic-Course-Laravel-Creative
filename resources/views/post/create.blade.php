@extends('loyats.main')

@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                <label for="content" class="form-label">Content</label>
                <textarea id="content" name="content" class="form-control" placeholder="Content"></textarea>
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Image">
            </div>

            <select class="form-select" aria-label="Default select example" id="category" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
