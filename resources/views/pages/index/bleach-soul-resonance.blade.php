@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Bleach: Soul Resonance – Gameplay Overview</h1>

    <img src="{{ asset('img/bleach.png') }}" class="image-page" alt="Bleach Soul Resonance">

    <p>
        <strong>Bleach: Soul Resonance</strong> features fast-paced, stylish anime combat inspired by the iconic
        Bleach series. Players take control of their favorite Soul Reapers, Hollows, and Arrancars in an action-packed
        battlefield where movement, timing, and powerful abilities are the keys to victory.
    </p>

    <p>
        The game emphasizes speed and fluidity. With <strong>Flash Steps (Shunpo)</strong>, players can dash across
        the battlefield instantly, dodge enemy attacks, and create high-energy combos. Sword combat plays a central
        role, allowing players to chain together light attacks, heavy strikes, air combos, and cinematic finishing moves.
    </p>

    <p>
        Each character comes with unique skills and special abilities based on the Bleach anime — such as
        <strong>Getsuga Tensho</strong>, <strong>Senbonzakura</strong>, <strong>ice manipulation</strong>,
        <strong>Hollow abilities</strong>, and more. These moves create visually stunning moments and add strategic
        depth to every fight.
    </p>

    <img src="{{ asset('img/bleach2.jpg') }}" class="image-page" alt="Bleach Combat">

    <p>
        One of the main highlights of Soul Resonance is the <strong>Shikai and Bankai transformation system</strong>.
        Transformations can be activated mid-battle, granting new attacks, boosted stats, and impressive visual effects.
        Whether it’s Ichigo’s Bankai speed, Hitsugaya’s ice powers, or Byakuya’s petal blades, each form changes the
        flow of battle dramatically.
    </p>

    <p>
        Players can also experience large-scale <strong>boss battles</strong> against powerful enemies such as
        captains, Espada, or giant Hollows. These encounters require good positioning, reaction timing, and clever
        use of abilities to survive.
    </p>

    <p>
        With its dynamic combat, character transformations, and anime-faithful abilities, <strong>Bleach: Soul
        Resonance</strong> captures the intensity and style of Bleach, making it a thrilling experience for fans of
        action games and anime alike.
    </p>

    <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection
