@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">Thai Military Shells Civilian Areas and Heritage Sites</h1>
    <img src="{{ asset('img/ns3.jpg') }}" class="image-page" alt="Thai Military Shells Civilian Areas and Heritage Sites">
    <p>The Thai military launched indiscriminate attacks on Cambodian civilian villages— including children’s schools and hospitals— and shelled Ta Krabei Temple and Preah Vihear Temple, both considered sacred and recognized as world heritage sites, on December 12, according to Defence Ministry spokeswoman Maly Socheata.</p>
    <p>Lt. Gen. Socheata stated that between 10:00 p.m. on December 11 and 7:05 a.m. on December 12, Thai forces conducted multiple shelling operations inside Cambodian territory under the jurisdiction of the 4th Military Region.</p>
    <P>At 10:08 p.m., Thai troops fired tank-mounted weapons in the Chom Te and Pet Ta Mok areas. At 10:37 p.m., military snipers targeted the Tuol 95 village area. The attacks continued into the early hours of December 12: at 12:15 a.m., mortars and machine guns were fired near Ta Moan and Ta Krabei Temples.</P>
    <p>Beginning at 4:00 a.m., Thai forces expanded their operations, using mortars and machine guns against targets in An Ses, Phnom 500, O’Phka Sne, Tvea Dek, and Phnom Pong Chap. By 7:05 a.m., they had escalated to deploying all types of artillery toward Thmar Doun, Chub Koki, and Ta Krabei Temple.</p>

    <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection