@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Remote Work Tips</h1>
    <h2>How to stay productive and balanced while working from home</h2>

    <img src="{{ asset('img/lss3.png') }}" class="image-page" alt="Remote Work Tips">

    <p>Working remotely offers flexibility and freedom, but it can also present challenges in maintaining productivity and work-life balance. With the right strategies, you can thrive while working from home.</p>

    <p>Set up a dedicated workspace. A quiet, organized area helps separate work from personal life and signals your brain that it’s time to focus.</p>

    <p>Create a consistent daily routine. Start and end work at regular times, schedule breaks, and maintain a healthy balance between tasks and rest.</p>

    <p>Minimize distractions. Turn off unnecessary notifications, communicate boundaries with family or roommates, and stay disciplined with your schedule.</p>

    <p>Use technology effectively. Project management tools, video conferencing, and communication apps help you stay connected and productive with your team.</p>

    <p>Take care of your physical health. Stand up, stretch, and move regularly. Incorporate short workouts or walks into your day to maintain energy and prevent fatigue.</p>

    <p>Maintain social connections. Remote work can be isolating, so make time to connect with colleagues, friends, and professional networks.</p>

    <p>Practice mindfulness and self-care. Meditation, journaling, or simply stepping outside for fresh air can help reduce stress and maintain mental wellbeing.</p>

    <p>By implementing these remote work tips, you can enjoy the benefits of flexibility while staying productive, focused, and balanced in your professional and personal life.</p>

    <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection
