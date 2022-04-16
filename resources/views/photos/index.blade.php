@extends('layouts.main')

@section('add_button')
    <a href="{{ route('photo.create') }}" class="btn btn-outline-success">Add photo</a>
@endsection

@section('content')

    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($photos as $photo)

            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ $photo->photo }}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">

                    <div class="card-body">
                        <p class="card-text">{{ $photo->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{ route('photo.show', $photo->id) }}">Show</a></button>
                                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{ route('photo.create') }}">Create</a></button>
                                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{ route('photo.edit', $photo->id) }}">Edite</a></button>
                                <form action="{{ route('photo.destroy', $photo->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                                </form>
                            </div>
                            <small class="text-muted">{{ $photo->created_at }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
