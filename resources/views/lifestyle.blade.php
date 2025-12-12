@extends('layouts.app')

@section('content')
<div class="news-page">
    <h1 class="page-title">Lifestyle</h1>
    <p class="page-subtitle">Discover tips, trends, and stories that enrich your daily life.</p>

    <div class="container">
        <!-- Articles -->
        <div class="articles">

            <div class="article-card">
                <img src="{{ asset('img/ls1.jpg') }}" alt="Lifestyle 1" class="article-img">
                <div class="article-content">
                    <h2>Healthy Daily Habits</h2>
                    <p>
                        Simple habits that improve your physical and mental wellbeing every day.
                        <a href="{{ route('lifestyle.show', 1) }}" class="see-more">See more</a>
                    </p>
                </div>
            </div>

            <div class="article-card">
                <img src="{{ asset('img/ls2.jpg') }}" alt="Lifestyle 2" class="article-img">
                <div class="article-content">
                    <h2>Modern Living Trends</h2>
                    <p>
                        Explore modern lifestyle trends shaping how people live and work today.
                        <a href="{{ route('lifestyle.show', 2) }}" class="see-more">See more</a>                    </p>
                </div>
            </div>

            <div class="article-card">
                <img src="{{ asset('img/ls3.jpeg') }}" alt="Lifestyle 3" class="article-img">
                <div class="article-content">
                    <h2>Work–Life Balance</h2>
                    <p>
                        Learn how to balance productivity and personal happiness effectively.
                        <a href="{{ route('lifestyle.show', 3) }}" class="see-more">See more</a>
                    </p>
                </div>
            </div>

        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Trending Lifestyle</h3>
                <ul>
                    <li><a href="{{ route('lifestyle.show', 4) }}"><img src="{{ asset('img/lss1.webp') }}" alt="Healthy Daily Routines" class="sidebar-card"> Healthy Morning Routines</a></li>
                    <li><a href="{{ route('lifestyle.show', 5) }}"><img src="{{ asset('img/lss2.jpg') }}" alt="Minimalist Living" class="sidebar-card"> Minimalist Living</a></li>
                    <li><a href="{{ route('lifestyle.show', 6) }}"><img src="{{ asset('img/lss3.png') }}" alt="Remote Work Tips" class="sidebar-card"> Remote Work Tips</a></li>
                </ul>
        </div>
    </div>
</div>
@endsection
