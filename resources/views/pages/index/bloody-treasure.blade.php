@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Bloody Treasure</h1>
    

    <img src="{{ asset('img/bt.webp') }}" class="image-page" alt="Bloody Treasure gameplay">
    <h2>Quick guide — gameplay, features, and tips</h2>
    <p>
        <strong>Bloody Treasure</strong> is a pirate-themed mobile adventure game that mixes exploration, collectible characters,
        and event-driven mechanics. Players sail through pirate islands, hunt for legendary treasures, recruit and upgrade
        characters, and take part in timed events that offer special rewards.
    </p>

    <h3>Core gameplay</h3>
    
    <p>
        The core loop typically includes exploring maps, completing missions, and collecting items. Missions will often
        involve combat encounters or puzzles, while exploration rewards resources that are needed to level up characters
        and unlock new content. Limited-time events introduce unique characters and cosmetics that players can earn or
        summon through event mechanics.
    </p>
    <img src="{{ asset('img/bt2.jpg') }}" class="image-page" alt="Bloody Treasure gameplay">
    <h3>Characters & progression</h3>
    <p>
        Characters in Bloody Treasure often have distinct roles (attacker, support, tank, etc.) and can be upgraded using
        materials gathered from missions and events. New characters are commonly introduced during events, and some
        characters are obtainable only for a limited time.
    </p>

    <h3>Events & rewards</h3>
    <p>
        Special events are central to the experience — they provide story content, event shops, and opportunities to collect
        rare gear or characters. Keep an eye on in-game announcements for reward codes, event timers, and bonus login gifts.
    </p>

    <h3>Controls & interface</h3>
    <p>
        As a mobile title, controls are optimized for touch. Expect a combination of tap-to-move, ability buttons, and
        context interactions (pick up, open chest, interact with NPC). UI elements typically show mission objectives,
        character stats, and inventory at the top and sides of the screen.
    </p>

    <h3>Tips for new players</h3>
    <ul>
        <li><strong>Complete daily missions:</strong> Daily tasks usually give the best reliable resources for progression.</li>
        <li><strong>Prioritize event currency:</strong> Events often trade exclusive rewards for event currency — focus on those.</li>
        <li><strong>Balance your team:</strong> Bring characters that cover damage, crowd control, and healing/support roles.</li>
        <li><strong>Save summon resources:</strong> Don’t spend all your summons immediately — wait for events that grant higher-value characters.</li>
        <li><strong>Watch tutorials/video guides:</strong> Community videos can show efficient battle tactics and progression routes.</li>
    </ul>

    <h3>Things to watch out for</h3>
    <p>
        Because Bloody Treasure is event-driven and character-collecting focused, it can encourage frequent micro-transactions
        to speed progression. Play at your own pace — focus on getting a balanced roster and enjoying the events rather than
        chasing every limited item.
    </p>

    <h3>Where to find more information</h3>
    <p>
        For the latest updates, community guides and gameplay videos are the best sources since official documentation
        is limited. Search for walkthroughs and event guides on video platforms and Android community sites for hands-on
        demos and strategies.
    </p>

    <p>
        If you want, I can also create a short **FAQ**, add a gameplay video embed area, or build a small section with
        downloadable thumbnail images for your article page.
    </p>

    <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection
