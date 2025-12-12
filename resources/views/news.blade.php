@extends('layouts.app')

@section('content')
<div class="news-page">
    <h1 class="page-title">Latest News</h1>
    <p class="page-subtitle">Stay updated with the latest news from around the world.</p>
    <div class="container">
        <div class="articles">
            <div class="article-card">
                <img src="{{ asset('img/tnc.png') }}" alt="News 1" class="article-img">
                <div class="article-content">
                    <h2>Thailand-Cambodia updates:</h2>
                    <p>
                        Thousands flee clashes as border row reignites
                        <a href="{{ route('news.show', 1) }}" class="see-more">See more</a>
                    </p>
                    
                </div>
            </div>

            <div class="article-card">
                <img src="{{ asset('img/students.webp') }}" alt="News 2" class="article-img">
                <div class="article-content">
                    <h2>សាលារៀន៥១៤កន្លែង ត្រូវបានបិទទ្វារ និងប៉ះពាល់ដល់សិស្ស១៣ម៉ឺននាក់ ដោយសារថៃឈ្លានពាន</h2>
                    <p>
                        តាមសេចក្ដីប្រកាសព័ត៌មានរបស់ក្រសួងអប់រំ នាយប់ថ្ងៃទី៩ ខែធ្នូនេះ ស្រុកជាំក្សាន្ត ខេត្តព្រះវិហារ
                        <a href="{{ route('news.show', 2) }}" class="see-more">See more</a>
                    </p>                
                </div>
            </div>

            <div class="article-card">
                <img src="{{ asset('img/plane.jpg') }}" alt="News 3" class="article-img">
                <div class="article-content">
                    <h2>Civil Aviation Spokesperson: Flights between Phnom Penh-Bangkok-Siem Reap ‘operating normally’</h2>
                    <p>Sin Chansereyvutha, Secretary of State and Spokesperson of the Secretariat of Civil Aviation has stated that, as of the afternoon of December 9, 2025 <a href="{{ route('news.show', 3) }}" class="see-more">See more</a></p>
                </div>
            </div>
        </div>
        <!-- sidebar -->
        <div class="sidebar">
            <h3>Hot News</h3>
                <ul>
                    <li><a href="{{ route('news.show', 4) }}"><img src="{{ asset('img/ns1.jpg') }}" alt="Healthy Daily Routines" class="sidebar-card"> A Matter of Life and Death</a></li>
                    <li><a href="{{ route('news.show', 5) }}"><img src="{{ asset('img/ns2.jpg') }}" alt="Minimalist Living" class="sidebar-card"> Thai Forces Launch Drone Strikes, Toxic Gas and Shelling in Military Region 5, Defence Ministry Reports</a></li>
                    <li><a href="{{ route('news.show', 6) }}"><img src="{{ asset('img/ns3.jpg') }}" alt="Remote Work Tips" class="sidebar-card"> Thai Military Shells Civilian Areas and Heritage Sites</a></li>
                </ul>
        </div>
    </div>
</div>
@endsection
