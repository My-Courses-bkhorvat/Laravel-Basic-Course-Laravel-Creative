@extends('loyats.main')

@section('content')
    <div>
        <form action="{{ route('photo.update', $photo->id) }}" method="post">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="text" name="photo" class="form-control" id="photo" placeholder="Photo" value="{{ $photo->photo }}">

                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="{{ $photo->description }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
