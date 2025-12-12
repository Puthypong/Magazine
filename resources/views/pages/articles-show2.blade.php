@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Culture & Traditions</h1>

    <img src="{{ asset('img/a2.jpg') }}" class="image-page" alt="News image">
       <p>Discover cultural stories and traditions shaping modern society. Understanding our cultural heritage helps us appreciate the values, beliefs, and practices that have influenced communities over generations.</p>

<p>Traditional festivals, rituals, and ceremonies continue to play a vital role in preserving identity and fostering a sense of belonging. They connect individuals to their roots and encourage community participation.</p>

<p>Art, music, and literature are powerful expressions of culture. By exploring these creative outlets, we gain insight into the experiences, struggles, and triumphs of different societies throughout history.</p>

<p>Food and culinary traditions also reflect cultural identity. Local ingredients, cooking methods, and dining customs provide a unique glimpse into the lifestyle and values of a community.</p>

<p>In today’s modern society, cultural stories are being shared globally through digital platforms. This helps bridge gaps between generations and nations, fostering understanding and respect for diversity.</p>

<p>By learning about cultural traditions and stories, we not only honor the past but also gain inspiration for shaping a more inclusive and culturally aware future.</p>

        <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection