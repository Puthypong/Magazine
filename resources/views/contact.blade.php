@extends('layouts.app') <!-- If you have a main layout -->

@section('content')
<div class="container mt-5">
    <h1>Contact Us</h1>
    <p>Have a question? Send us a message!</p>

    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>
@endsection
