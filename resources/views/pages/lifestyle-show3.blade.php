@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Work–Life Balance</h1>

    <img class="py-6" src="{{ asset('img/ls3.jpeg') }}" class="image-page" alt="News image">
        <p>Learning how to balance productivity and personal happiness is essential in today’s fast-paced world. It’s not just about getting work done efficiently, but also about ensuring that your mental and emotional wellbeing are nurtured every day.</p>

        <p>Start by setting clear priorities for both your professional and personal life. Identify the tasks that truly matter and allocate your time in a way that prevents burnout while still achieving your goals.</p>

        <p>Incorporating short breaks throughout your day can significantly improve focus and creativity. Activities like a brief walk, meditation, or simply stretching help refresh your mind and body, allowing you to return to work feeling energized.</p>

        <p>Another key aspect is establishing boundaries between work and personal time. Avoid checking emails or messages outside of designated hours, and dedicate time to hobbies, family, and self-care. This separation helps maintain a healthy balance and prevents stress from spilling over into your personal life.</p>

        <p>Finally, practice mindfulness and gratitude daily. Reflecting on achievements, appreciating small moments, and celebrating personal wins enhances happiness and motivation, making it easier to maintain productivity without sacrificing your overall wellbeing.</p>

        <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection