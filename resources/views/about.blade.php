@extends('layouts.app')

@section('content')
<h1>About MyMagazine</h1>
<p>Welcome to <strong>MyMagazine</strong>, your go-to online source for the latest news, articles, and lifestyle tips.</p>


<h2>Our Mission</h2>
<p>We aim to provide accurate, engaging, and timely articles covering a wide range of topics from news and culture to lifestyle and entertainment.</p>

<h3>Our Team</h3>
<p>MyMagazine is run by a passionate team of writers, editors, and designers dedicated to creating an enjoyable reading experience.</p>

<h3>Contact Us</h3>
<p>If you’d like to get in touch, feel free to visit our <a href="{{ url('/contact') }}">Contact Page</a>.</p>
@endsection
