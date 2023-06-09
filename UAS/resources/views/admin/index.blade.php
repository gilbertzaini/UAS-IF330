<!-- resources/views/admin-profile.blade.php -->

@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Admin Profile</h1>

        <div class="admin-profile">
            <p><strong>Name:</strong> Kelompok 6</p>
            <p><strong>Members:</strong></p>
            <ul>
                <li>Cianando Pautrisio Cendranadi</li>
                <li>Indah Desri Wahyuni</li>
                <li>Gilbert Zaini</li>
                <li>Mahdi Husein Punca</li>
            </ul>
        </div>
    </div>
@endsection

@foreach ($doctors as $doctor)
    <p>{{ $doctor->name }} - {{ $doctor->spesialis }}</p>
    <a href="/doctors/{{ $doctor->id }}/edit">Edit</a>
    <form action="/doctors/{{ $doctor->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach

