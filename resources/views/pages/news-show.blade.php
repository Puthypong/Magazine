@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Thailand–Cambodia updates</h1>
    <h2>Thousands flee clashes as border row reignites</h2>

    <img src="{{ asset('img/tnc.png') }}" class="image-page" alt="News image">

    <p>On December 8, 2025, tensions between Cambodia and Thailand escalated along parts of their shared border following renewed disagreements over border demarcation and security patrol movements.</p>

<p>Reports indicated that clashes erupted in disputed areas, prompting safety concerns for civilians living near the border.</p>

<p>According to regional sources, thousands of residents were temporarily displaced as a precautionary measure. Local authorities from both sides urged civilians to move away from high-risk zones while security forces increased patrols to prevent further escalation.</p>

<p>Officials from both governments called for restraint, emphasizing dialogue and diplomatic channels as the preferred path forward. Regional organizations and ASEAN representatives also expressed concern, encouraging peaceful negotiation to stabilize the situation and protect civilian lives.</p>

<p>The Cambodia–Thailand border has a long history of sensitivity, particularly around disputed territories near historic sites. While no large-scale military confrontation was confirmed, observers noted that continued communication and cooperation remain crucial to avoid further conflict.</p>

<p>As of the evening of December 8, officials stated that talks were underway and that efforts were being made to de-escalate tensions and allow displaced families to return home safely.</p>


    <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection
