@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">La Cima Cartel</h1>

    
        <P>La Cima Cartel is a rising music group known for their bold style and unique blend of urban and Latin influences. Their energetic performances, catchy hooks, and strong visual identity have quickly gained them a loyal fanbase and growing international attention.</P>
        <img class="py-6" src="{{ asset('img/cima.jfif') }}" class="image-page" alt="News image">
        <p>With each release, the group showcases a mix of modern hip-hop, reggaeton, and Latin rhythms, creating a sound that stands out in today’s music scene. Their lyrics often highlight real-life stories, passion, and ambition, making their music relatable to a wide audience.</p>
        <p>Beyond their musical talent, La Cima Cartel is also recognized for their charismatic stage presence and creative music videos, which help bring their songs to life. Their commitment to originality and constant evolution has positioned them as one of the most exciting groups to watch in the new generation of artists.</p>
        <p>As they continue to collaborate with other musicians, produce fresh tracks, and expand their influence, La Cima Cartel is on track to become a major name in the global music industry.</p>
        <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection