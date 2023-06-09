@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Appointment List</h1>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>Schedule</th>
                <th>Doctor Name</th>
                <th>Patient Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($appointments as $appointment) --}}
            <tr>
                <td>June 10, 2023 09:00 AM</td>
                <td>Dr. John Doe</td>
                <td>John Smith</td>
                <td>
                    <button class="btn btn-success">Accept</button>
                    <button class="btn btn-danger">Decline</button>
                </td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
@endsection


{{-- <td>
    <a href="{{ route('appointment.approve', ['id' => $appointment->id]) }}" class="btn btn-success">Accept</a>
    <a href="{{ route('appointment.approve', ['id' => $appointment->id]) }}" class="btn btn-danger">Decline</a>          
</td> --}}