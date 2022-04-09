@extends('loyats.main')

@section('content')
    <div>
        <form>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title">
                <label for="content" class="form-label">Content</label>
                <textarea id="content" name="content" class="form-control"></textarea>
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
