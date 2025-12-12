@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Modern Living Trends</h1>

    <img src="{{ asset('img/ls2.jpg') }}" class="image-page" alt="News image">
        <P>Explore the modern lifestyle trends shaping how people live and work today. From the way we balance work and personal life to how we consume technology, modern lifestyles are evolving rapidly. Remote work and flexible schedules allow people to design days around productivity and wellbeing, rather than just office hours. Health and wellness have become central, with more individuals embracing mindfulness, meditation, and fitness routines that fit seamlessly into busy lives.</P>
        <p>Sustainable living is another major trend, influencing how we shop, travel, and manage resources at home. People are more conscious of ethical consumption, eco-friendly products, and reducing waste in everyday life. Digital tools and social media continue to transform social interactions, hobbies, and learning opportunities, giving individuals new ways to connect, grow, and explore personal interests.</p>
        <p>Modern lifestyle trends also emphasize mental wellbeing, creativity, and personal growth. People are experimenting with hobbies, skill-building, and lifestyle design to create a sense of fulfillment and purpose. Minimalism, decluttering, and intentional living are guiding choices about space, time, and possessions, helping people focus on what truly matters.</p>
        <p>By understanding and embracing these trends, individuals can craft lifestyles that are healthier, more balanced, and aligned with their values, making each day not just productive but meaningful.</p>
        <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection