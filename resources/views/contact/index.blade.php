@extends('loyats.main')

@section('content')
    <a  class="btn btn-primary">Add contact</a>

    @foreach($contacts as $contact)
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">{{ $contact->name }}: <span class="text-muted">{{ $contact->subject }}</span></h2>
                <p class="lead">{{ $contact->message }}</p>
                <p>Email: {{ $contact->email }} Created at: {{ $contact->created_at }}</p>
            </div>
            <div class="col-md-5">
                <img src="{{ $contact->photo }}" class="img-thumbnail" alt="..." width="500" height="500">
            </div>
        </div>
        <!-- /END THE FEATURETTES -->

    </div>
    @endforeach
@endsection
