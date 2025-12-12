@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Modern Lifestyle Trends</h1>
    <h2>Explore modern lifestyle trends shaping how people live and work today</h2>

    <img src="{{ asset('img/as2.webp') }}" class="image-page" alt="Modern Lifestyle Trends">

    <p>Modern lifestyle trends reflect the way people adapt to changes in technology, culture, and society. These trends influence how we live, work, and interact with one another.</p>

    <p>One prominent trend is remote work and flexible schedules. With technology enabling work from home, individuals have more control over their daily routines, leading to new ways of balancing work and personal life.</p>

    <p>Health and wellness have also become central to modern living. From mindfulness practices to fitness apps and nutritional awareness, people are increasingly prioritizing their physical and mental well-being.</p>

    <p>Sustainable living is another key trend. Many individuals now adopt eco-friendly habits such as reducing waste, using renewable energy, and choosing sustainable products, aiming to reduce their environmental impact.</p>

    <p>Technology continues to shape social interactions and entertainment. Streaming platforms, social media, and digital communities have transformed how we connect, consume media, and form social networks.</p>

    <p>Finally, the rise of personal development and lifelong learning shows a shift toward continuous growth. People are seeking skills, hobbies, and experiences that enrich their lives beyond traditional work and family responsibilities.</p>

    <p>By understanding and embracing modern lifestyle trends, individuals can make informed choices that improve their quality of life, productivity, and personal happiness in today's fast-paced world.</p>

    <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection
