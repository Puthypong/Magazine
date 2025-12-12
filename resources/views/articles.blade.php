@extends('layouts.app')

@section('content')
<div class="news-page">
    <h1 class="page-title">Latest Articles</h1>
    <p class="page-subtitle">
        Explore our latest articles on lifestyle, culture, and more.
    </p>

    <div class="container">

        <!-- Articles list -->
        <div class="articles">

            <div class="article-card">
                <img src="{{ asset('img/a1.webp') }}" alt="Article 1" class="article-img">
                <div class="article-content">
                    <h2>Lifestyle & Well-Being</h2>
                    <p>
                        Simple habits that can improve your daily life and mindset.
                        <a href="{{ route('articles.show', 1) }}" class="see-more">See more</a>
                    </p>
                </div>
            </div>

            <div class="article-card">
                <img src="{{ asset('img/a2.jpg') }}" alt="Article 2" class="article-img">
                <div class="article-content">
                    <h2>Culture & Traditions</h2>
                    <p>
                        Discover cultural stories and traditions shaping modern society.
                        <a href="{{ route('articles.show', 2) }}" class="see-more">See more</a>
                    </p>
                </div>
            </div>

            <div class="article-card">
                <img src="{{ asset('img/a3.jpg') }}" alt="Article 3" class="article-img">
                <div class="article-content">
                    <h2>Technology & Life</h2>
                    <p>
                        How technology is changing the way we live and connect.
                        <a href="{{ route('articles.show', 3) }}" class="see-more">See more</a>
                    </p>
                </div>
            </div>

        </div>

        <!-- Sidebar -->
         <!-- Sidebar -->
        <div class="sidebar">
            <h3>Popular Articles</h3>
                <ul>
                    <li><a href="{{ route('articles.show', 4) }}"><img src="{{ asset('img/as1.png') }}" alt="Healthy Daily Routines" class="sidebar-card"> Healthy Daily Routines</a></li>
                    <li><a href="{{ route('articles.show', 5) }}"><img src="{{ asset('img/as2.webp') }}" alt="Modern Lifestyle Trends" class="sidebar-card"> Modern Lifestyle Trends</a></li>
                    <li><a href="{{ route('articles.show', 6) }}"><img src="{{ asset('img/as3.jpg') }}" alt="Cultural Insights" class="sidebar-card"> Cultural Insights</a></li>
                </ul>
        </div>



        

    </div>
</div>
@endsection
