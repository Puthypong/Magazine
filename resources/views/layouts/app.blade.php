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
    <div class="hero-content">
        <h1>Welcome to MyMagazine</h1>
        <p>Read the latest news, articles, and lifestyle posts.</p>
    </div>
</section>


    <!-- Main content -->
    <div class="container mt-5">
        @yield('content') <!-- THIS is where each page content will appear -->
    </div>

    <!-- Footer -->
    @include('footer')

</body>
</html>
