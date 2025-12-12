@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Technology & Life</h1>

    <img src="{{ asset('img/a3.jpg') }}" class="image-page" alt="News image">
        <p>How technology is changing the way we live and connect is a question that touches nearly every aspect of modern life. From communication to work, education, and entertainment, technological advancements have reshaped how we interact with the world.</p>

        <p>Social media and messaging apps have made it easier than ever to stay in touch with friends and family, no matter the distance. Video calls, live streaming, and collaborative platforms allow people to connect in real-time, breaking down geographical barriers.</p>

        <p>Remote work and digital collaboration tools have transformed the workplace. Many organizations now rely on cloud-based software, project management platforms, and virtual meetings to maintain productivity and efficiency while allowing employees greater flexibility.</p>

        <p>Education and learning have also been revolutionized. Online courses, virtual classrooms, and educational apps enable students to access information and acquire skills from anywhere, promoting lifelong learning and personal growth.</p>

        <p>Technology has also changed how we entertain ourselves, with streaming services, gaming platforms, and virtual reality offering immersive experiences that were unimaginable just a few decades ago.</p>

        <p>However, while technology provides countless benefits, it also requires mindfulness. Balancing screen time, protecting privacy, and maintaining real-world connections are essential to ensure that technology enhances life without becoming overwhelming.</p>

        <p>By understanding and leveraging technology thoughtfully, we can improve how we live, work, and connect, making life more efficient, engaging, and meaningful.</p>

        <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection