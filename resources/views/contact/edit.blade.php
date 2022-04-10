@extends('loyats.main')

@section('content')
    <div>
        <form action="{{ route('contact.update', $contact->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ $contact->name }}">

                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="email" value="{{ $contact->email }}">

                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" id="subject" placeholder="subject" value="{{ $contact->subject }}">

                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" class="form-control" placeholder="Message">{{ $contact->message }}</textarea>

                <label for="photo" class="form-label">Photo</label>
                <input type="text" name="photo" class="form-control" id="photo" placeholder="Photo" value="{{ $contact->photo }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
