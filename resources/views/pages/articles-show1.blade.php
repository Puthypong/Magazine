@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Lifestyle & Well-Being</h1>

    <img src="{{ asset('img/a1.webp') }}" class="image-page" alt="News image">
       <p>Simple habits that can improve your daily life and mindset are often easier to implement than you might think, yet they can have a profound impact over time.</p>

<p>Start your day with a positive morning routine. Even spending just a few minutes stretching, meditating, or setting intentions for the day can help cultivate a calm and focused mindset.</p>

<p>Drinking enough water and eating nutritious meals throughout the day keeps your energy levels stable and supports mental clarity. Paying attention to your body’s needs is a simple way to maintain both physical and mental health.</p>

<p>Incorporate small moments of mindfulness into your daily schedule. This could be as simple as taking a few deep breaths, enjoying a quiet cup of tea, or going for a short walk. These habits help reduce stress and improve focus.</p>

<p>Writing down your thoughts, goals, or things you are grateful for can strengthen your mindset. Journaling allows you to reflect, track progress, and maintain a more positive perspective on life.</p>

<p>Finally, make time for activities that bring you joy, whether it’s connecting with loved ones, pursuing a hobby, or learning something new. These simple daily habits help cultivate happiness, improve resilience, and gradually transform your life for the better.</p>

        <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection