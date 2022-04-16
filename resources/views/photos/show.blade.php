@extends('layouts.main')

@section('content')

    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ $photo->photo }}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">

                        <div class="card-body">
                            <p class="card-text">{{ $photo->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{ route('photos.index') }}">Back</a></button>
                                </div>
                                <small class="text-muted">{{ $photo->created_at }}</small>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>

@endsection
