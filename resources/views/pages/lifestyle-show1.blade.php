@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Healthy Daily Habits</h1>
    <h2>Simple habits that improve your physical and mental wellbeing every day</h2>

    <img src="{{ asset('img/ls1.jpg') }}" class="image-page" alt="News image">

    <p>Improving your wellbeing doesn’t always require dramatic changes—sometimes the smallest habits make the biggest impact. Start your day by drinking a glass of water to rehydrate your body and wake up your metabolism. A short morning stretch or a 10-minute walk can increase blood flow, reduce stiffness, and boost your mood for the rest of the day. Practicing mindful breathing or taking just a few minutes for meditation helps clear mental clutter and lowers stress levels.</p>
       <p>Eating balanced meals filled with fruits, vegetables, and whole foods keeps your energy steady and supports overall health. Try to step away from screens regularly—too much exposure can cause eye strain, anxiety, and poor sleep. A simple habit like reading a few pages of a book or writing in a journal can help relax your mind and improve emotional clarity. At night, aim for consistent sleep by turning off electronics at least 30 minutes before bed.</p>
        <p>Most importantly, make time for small things that bring you joy: talking to a friend, listening to music, enjoying nature, or practicing a hobby. These moments may seem small but they strengthen your mental resilience and create a more positive daily routine. By practicing these simple habits, you gradually build a healthier, calmer, and more balanced life—one day at a time.</p>
    <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection