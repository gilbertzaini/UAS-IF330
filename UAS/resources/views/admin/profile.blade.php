@extends('layouts.master')

@section('content')
<x-guest-layout>
    <div id="adminProfile">
        <h1 style="font-size: 1.2rem; font-weight: bold; text-align: center;">Kelompok 6</h1>
        <img src={{asset('storage/assets/fotoKel.jpeg')}} class="mx-auto py-3" style="width: 70%; border-radius: 10%;"/>
        <div class="px-5 mx-auto">
            <p><strong>Members:</strong></p>
            <ul class="ml-4">  
                <li>Cianando Pautrisio Cendranadi</li>
                <li>Indah Desri Wahyuni</li>
                <li>Gilbert Zaini</li>
                <li>Mahdi Husein Punca</li>
            </ul>
        </div>
    </div>
</x-guest-layout>
@endsection
