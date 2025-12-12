@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Minimalist Living</h1>
    <h2>How simplifying your life can improve your wellbeing</h2>

    <img src="{{ asset('img/lss2.jpg') }}" class="image-page" alt="Minimalist Living">

    <p>Minimalist living is about focusing on what truly matters and removing the excess from your life. By simplifying your surroundings and routines, you can reduce stress and create a more intentional, meaningful lifestyle.</p>

    <p>Start by decluttering your home. Remove items that no longer serve a purpose or bring you joy. A tidy, organized space helps create a calm and productive environment.</p>

    <p>Focus on quality over quantity. Whether it’s clothing, furniture, or personal belongings, investing in fewer, high-quality items reduces waste and promotes sustainability.</p>

    <p>Prioritize your time and energy. Learn to say no to commitments that don’t align with your goals or values. This allows you to spend more time on activities that truly enrich your life.</p>

    <p>Adopt mindful consumption habits. Limit unnecessary purchases and evaluate how each item or experience contributes to your wellbeing. This creates financial freedom and reduces mental clutter.</p>

    <p>Embrace simple daily routines. Simplifying your schedule and habits can lead to more focus, creativity, and satisfaction. Daily rituals like journaling, meditation, or walking help anchor your day.</p>

    <p>Finally, cultivate meaningful connections. Spend time with people who inspire and support you, rather than spreading yourself too thin across superficial relationships.</p>

    <p>By practicing minimalist living, you can create a life that feels lighter, more focused, and deeply satisfying. Simplicity allows you to appreciate what truly matters and brings long-term happiness.</p>

    <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection
