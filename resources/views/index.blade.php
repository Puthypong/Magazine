<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Magazine' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <a href="{{ url('/') }}">MyMagazine</a>
        </div>
        <div class="menu">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/news') }}">News</a>
            <a href="{{ url('/articles') }}">Articles</a>
            <a href="{{ url('/lifestyle') }}">Lifestyle</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </div>
    </nav>

    <!-- Hero section -->
    <section class="hero">
        <h1>Welcome to MyMagazine</h1>
        <p>Read the latest news, articles, and lifestyle posts.</p>
    </section>



    <!-- Main content -->
    <div class="container">
        <div class="articles">
            <div class="article-card">
                <img src="{{ asset('img/vannda.webp') }}" alt="Article 1" class="article-img">
                <h2>Mann Vannda</h2>
                <p>Mann Vannda is a talented Cambodian singer and performer <a href="{{ route('index.show', 1) }}" class="see-more">See more</a></p>
            </div>


            <div class="article-card">
                <img src="{{ asset('img/cima.jfif') }}" alt="Lifestyle 2" class="article-img">
                <div class="article-content">
                    <h2>La Cima Cartel</h2>
                    <p>
                        La Cima Cartel is a rising music group known for their bold style
                        <a href="{{ route('index.show', 2) }}" class="see-more">See more</a>                    </p>
                </div>
            </div>
            

            <div class="article-card">
                <img src="{{ asset('img/bt.webp') }}" alt="Lifestyle 2" class="article-img">
                <div class="article-content">
                    <h2>Bloody Tresure</h2>
                    <p>
                        Bloody Tresure is a rising music group known for their bold style
                        <a href="{{ route('index.show', 3) }}" class="see-more">See more</a>                    </p>
                </div>
            </div>
            
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Trending</h3>
                <ul>
                    <li><a href="{{ route('index.show', 4) }}"><img src="{{ asset('img/ror1.png') }}" alt="Record of Ragnarok III " class="sidebar-card"> Record of Ragnarok 3</a></li>
                    <li><a href="{{ route('news.show', 1) }}"><img src="{{ asset('img/tnc.png') }}" alt="Thailand-Cambodia updates" class="sidebar-card"> Thailand-Cambodia updates:</a></li>
                    <li><a href="{{ route('index.show', 6) }}"><img src="{{ asset('img/bleach.png') }}" alt="bleach soul resonance" class="sidebar-card"> bleach soul resonance</a></li>
                </ul>
        </div>
    </div>


    
    <!-- Footer -->
     @include('footer')
</body>
</html>
