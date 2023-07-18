@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Appointment List</h1>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>Jadwal</th>
                <th>Dokter</th>
                <th>Pasien</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
            <tr>
                <td>{{$appointment->jadwalPraktik}}</td>
                <td>{{$appointment->doctor->nama}}</td>
                <td>{{$appointment->user->name}}</td>
                <td>
                    <x-success-button href="{{ route('appointment.approve', ['id' => $appointment->id]) }}">Accept</x-success-button>
                    <x-danger-button href="{{ route('appointment.decline', ['id' => $appointment->id]) }}">Decline</x-danger-button>     
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection