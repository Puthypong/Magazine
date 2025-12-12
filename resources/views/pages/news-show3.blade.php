@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Civil Aviation Spokesperson: Flights between Phnom Penh-Bangkok-Siem Reap ‘operating normally’</h1>

    <img src="{{ asset('img/plane.jpg') }}" class="image-page" alt="News image">

    <p>Sin Chansereyvutha, Secretary of State and Spokesperson of the Secretariat of Civil Aviation, has stated that, as of the afternoon of December 9, 2025, flights between Phnom Penh-Bangkok-Siem Reap are operating normally without any changes, even though Cambodia and Thailand are in a state of conflict.</p>

<p>Speaking to Fresh News, he highlighted that there are a total of 63 flights between Bangkok and Siem Reap per week, including 35 flights from Siem Reap to Suvarnabhumi, 21 flights from Siem Reap to Don Mueang, and 7 flights from Siem Reap to Phuket per week.</p>

<p>There are 77 flights between Bangkok and Phnom Penh, with five Thai airlines flying 53 flights to Techo International Airport. Two Cambodian airlines fly 24 flights per week.</p>

<p>He added, “So far, the two international airports, Siem Reap and Phnom Penh, have not changed. Flights are still operating as usual, while civil aviation is monitoring the situation further day by day.”</p>

<p>He also confirmed that the airspace that was closed during the first clash in July will remain closed until further notice.</p>


    <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection
