@extends('layouts.main')

@section('content')
    <div>
        <form action="{{ route('photo.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="text" name="photo" class="form-control" id="photo" placeholder="Photo">

                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Description">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
