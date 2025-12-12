@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Mann Vannda</h1>
    <p>
        Mann Vannda is a talented Cambodian singer and performer, admired for her captivating voice, unique fashion sense,
        and strong stage presence. Over the years, she has built a loyal fanbase through her ability to blend modern sounds
        with Cambodian cultural influences, creating music that appeals to both young listeners and older audiences.
    </p>
        <img src="{{ asset('img/vannda2.jpg') }}" class="image-page" alt="Mann Vannda">

    <p>
        Her commitment to creating meaningful music, combined with her consistent growth as an artist, has helped her rise
        to become one of Cambodia’s most promising modern stars. From emotional ballads to upbeat hip-hop and pop tracks,
        Vannda has proven her versatility and continues to shape her own artistic identity. Her work has inspired many young
        performers who look up to her creativity and dedication.
    </p>

    <img src="{{ asset('img/vannda.webp') }}" class="image-page" alt="Mann Vannda">

    <p>
        Today, Mann Vannda remains an influential figure in the Cambodian entertainment scene. Whether she’s performing live,
        recording new music, or engaging with fans, she continues to evolve, push artistic boundaries, and leave a meaningful
        impact on Khmer music and culture.
    </p>

    <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection
