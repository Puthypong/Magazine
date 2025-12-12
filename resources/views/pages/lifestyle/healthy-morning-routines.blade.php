@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Healthy Morning Routines</h1>
    <h2>Start your day energized and focused</h2>

    <img src="{{ asset('img/lss1.webp') }}" class="image-page" alt="Healthy Morning Routines">

    <p>Starting your day with a consistent morning routine can dramatically improve your productivity, mood, and overall wellbeing. Even small habits, when practiced daily, create a lasting positive impact.</p>

    <p>Begin with hydration: drink a glass of water as soon as you wake up. This helps rehydrate your body, kickstart metabolism, and refresh your mind.</p>

    <p>Incorporate movement. A short stretch, yoga session, or a 10-minute walk can wake up your muscles, improve circulation, and boost your energy for the day ahead.</p>

    <p>Practice mindfulness or meditation. Spending 5-10 minutes focusing on your breath or setting intentions for the day can reduce stress and improve mental clarity.</p>

    <p>Fuel your body with a nutritious breakfast. Include whole grains, fruits, and protein to sustain energy and concentration throughout the morning.</p>

    <p>Limit distractions early in the day. Avoid checking emails or social media immediately after waking up; instead, use this time to focus on yourself and your goals.</p>

    <p>Finally, create a simple, consistent routine that works for you. Over time, these healthy morning habits will build resilience, improve productivity, and enhance your overall quality of life.</p>

    <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection
