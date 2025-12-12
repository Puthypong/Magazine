@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="py-5">Healthy Daily Routines</h1>
    <h2>Simple habits that can improve your daily life and mindset</h2>

    <div class="row">
        <!-- Main content -->
        <div class="col-md-8">
            <img src="{{ asset('img/as1.png') }}" class="image-page" alt="Healthy Daily Routines">

            <p class="py-3">Maintaining healthy daily routines is one of the most effective ways to improve your physical, mental, and emotional wellbeing. Simple habits, when practiced consistently, can have a profound impact over time.</p>

            <p>Start your day with a morning routine that energizes and focuses you. This could include stretching, meditation, or a short walk. These activities boost blood circulation, increase alertness, and prepare your mind for the day ahead.</p>

            <p>Stay hydrated and eat balanced meals throughout the day. Incorporate fruits, vegetables, whole grains, and lean proteins into your diet. Proper nutrition helps maintain steady energy levels and supports mental clarity.</p>

            <p>Schedule short breaks during work or study sessions to relax your mind and reduce stress. Even five minutes of deep breathing, stepping outside for fresh air, or listening to calming music can rejuvenate your focus.</p>

            <p>Include physical activity in your daily routine. Whether it’s a brisk walk, yoga, or light exercise, moving your body improves mood, strengthens muscles, and promotes better sleep at night.</p>

            <p>Take time for mindfulness and reflection. Journaling, practicing gratitude, or simply pausing to observe your surroundings helps create emotional balance and improves overall happiness.</p>

            <p>Finally, dedicate moments to activities you enjoy. Hobbies, social interactions, or creative projects enrich your life, build resilience, and enhance personal fulfillment.</p>

            <p>By consistently following these healthy daily routines, you can create a balanced lifestyle that fosters productivity, reduces stress, and enhances your overall quality of life.</p>

            <a href="{{ url()->previous() }}" class="see-more">← Back</a>
        </div>
    </div>

</div>
@endsection
