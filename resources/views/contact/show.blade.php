@extends('loyats.main')

@section('content')
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">{{ $contact->name }}: <span class="text-muted"><a href="{{ route( 'contact.show', $contact->id ) }}">{{ $contact->subject }}</a></span></h2>
                    <p class="lead">{{ $contact->message }}</p>
                    <p>Email: {{ $contact->email }} Created at: {{ $contact->created_at }}</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ $contact->photo }}" class="img-thumbnail" alt="..." width="500" height="500">
                </div>
            </div>
            <!-- /END THE FEATURETTES -->
            <div>
                <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('contacts.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
@endsection
