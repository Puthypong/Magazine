@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Gods and Mortals Battle to the Death in Anime Series Record of Ragnarok III</h1>

    <img class="py-6" src="{{ asset('img/ror1.png') }}" class="image-page" alt="News image">
        <p>Will humankind live to see another 1,000 days? Find out in Record of Ragnarok III, the third season of the Japanese anime series based on the manga by artist Azychika, writer Shinya Umemura, and story structure creator Takumi Fukui, which streams on Netflix now.</p>
        <p>The anime pits historical figures against deities from various mythologies against each other in a 13-round mortal-vs.-god death match — whichever side reaches seven victories first will claim victory in the Ragnarok. If humankind wins, they’ll get to continue existing … at least for one more millennium.</p>
        <p>Says Fukui: “Much time has passed since the explosive ending to the second season. Thanks to the support of our fans, the third season is finally here! I can't wait for everyone to see the continuation of the battle between gods and humanity!”</p>
        <p>For more details about the action-packed saga, scroll on.</p> 
        <img class="py-6" src="{{ asset('img/ror2.jpg') }}" class="image-page" alt="News image">
        
        
        <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection