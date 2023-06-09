@extends('layouts.master')

@section('content')
<form action="/doctors/{{ $doctor->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $doctor->name }}">
    <input type="text" name="spesialis" value="{{ $doctor->spesialis }}">
    <button type="submit">Update</button>
</form>

@endsection
