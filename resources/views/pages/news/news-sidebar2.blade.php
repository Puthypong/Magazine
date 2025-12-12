@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Thai Forces Launch Drone Strikes, Toxic Gas and Shelling in Military Region 5, Defence Ministry Reports</h1>
    <img src="{{ asset('img/ns2.jpg') }}" class="image-page" alt="Thai Forces Launch Drone Strikes, Toxic Gas and Shelling in Military Region 5, Defence Ministry Reports">
    <p>The Ministry of National Defence has reported a series of escalating attacks by the Thai military along the Cambodian border between 8 a.m. and 1 p.m. today, including drone strikes, shelling and the use of toxic gas in several villages within Military Region 5.</p>
    <p>According to the ministry’s timeline, Thai infantry units accompanied by tanks advanced into the Prey Chan village area at 8:38 a.m. This was followed by multiple reconnaissance drone flights over the same area at 9:10 a.m., 10:34 a.m. and 12:45 p.m.</p>
    <p>The ministry said Thai forces deployed bomb-equipped drones twice—at 10:26 a.m. and again at 11:58 a.m.—targeting the O’Phluok Damrei area.</p>
    <p>In one of the most serious developments, the ministry reported that Thai troops used toxic gas in Prey Chan village at 11:37 a.m., and again at 12:13 p.m. in both Prey Chan and Chouk Chey villages.</p>
    <p>Shelling resumed shortly before 1 p.m., with Thai forces firing into the Prey Chan area at 12:53 p.m.</p>
    <p>The Defence Ministry condemned what it described as a dangerous escalation and repeated violations of international law, adding that Cambodia continues to monitor the situation closely as clashes intensify along the border.</p>

    <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection