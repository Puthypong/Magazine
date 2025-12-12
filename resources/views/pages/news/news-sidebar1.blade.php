@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-5">A Matter of Life and Death</h1>
    <h2>Nearly 50,000 Seek Refuge in Banteay Meanchey as Thai Attacks Intensify</h2>

    <img src="{{ asset('img/ns1.jpg') }}" class="image-page" alt="A Matter of Life and Death">
    <p>Banteay Meanchey province is facing one of its largest humanitarian crises in decades as relentless Thai airstrikes and artillery bombardment force tens of thousands of residents to flee their homes in what local authorities describe as a “matter of life and death.”</p>
    <p>According to the Banteay Meanchey Provincial Administration, more than 14,500 families — equal to nearly 50,000 people — have taken shelter in refugee centres across Serei Saophoan City and surrounding districts as fighting along the border escalates. Overall displacement in the province has now surpassed 500,000 people, with civilians moving deeper inland to escape intensifying attacks.</p>
    <p>Khmer Times journalists stationed in the province report that Thailand has expanded its military aggression across multiple fronts, attempting to seize Cambodian villages and border towns through continuous shelling, drone strikes and air attacks.</p>
    <P>Many evacuees described terrifying escapes as artillery rounds struck close to their homes.</P>
    <p>Moeun Kunthea, 29, a housewife from Yeang Thmey village in Kok commune, O’Chrov district, said the bombardment shook her house violently.
        “The sound of the shelling shattered my house,” she said. “I arrived here on December 9 with six family members — my husband and four children.”</p>
    <p>Another evacuee, Oeun Chorn, 60, also fled with six relatives after shells landed near their community.</p>
    <p>Although Poipet City has not been directly hit, thousands of residents have begun fleeing amid rising fear as drones were seen flying overhead and authorities issued precautionary evacuation orders.</p>
    <p>Keo Chanda, 25, who fled with his wife, Ty Sokchea, 35, and their children — including six-month-old twins — said he feared further attacks as Thailand had repeatedly failed to uphold its pledge not to target civilian areas.</p>
    <img src="{{ asset('img/ns11.jpg') }}" class="image-page" alt="A Matter of Life and Death">
    
        <p>“Our village chief told everyone in Psar Kandal to evacuate immediately,” he said. “We left with almost nothing. Life is very difficult now.”</p>

    <a href="{{ url()->previous() }}" class="see-more">← Back</a>
</div>
@endsection
