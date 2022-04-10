@extends('loyats.main')

@section('content')
    <div>
        <form action="{{ route('contact.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">

                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="email">

                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" id="subject" placeholder="subject">

                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>

                <label for="photo" class="form-label">Photo</label>
                <input type="text" name="photo" class="form-control" id="photo" placeholder="Photo">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
