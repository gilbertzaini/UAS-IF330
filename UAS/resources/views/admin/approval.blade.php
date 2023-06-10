@extends('layouts.admin')

@section('content')
<div class="container-fluid col-10 text-center pb-5">
    <h1 class="pageHeading py-5">Appointment List</h1>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Jadwal</th>
                <th>Dokter</th>
                <th>Pasien</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead class="word-break: break-word">
        <tbody class="table-light">
            @foreach ($appointments as $appointment)
            <tr>
                <td>{{$appointment->jadwal->jadwalPraktik}}</td>
                <td>{{$appointment->doctor->nama}}</td>
                <td>{{$appointment->user->name}}</td>
                <td>{{$appointment->status}}</td>
                <td>
                    <button class="btn btn-success" href="{{ route('appointment.approve', ['id' => $appointment->id]) }}">Accept</button>
                    <button class="btn btn-danger" href="{{ route('appointment.decline', ['id' => $appointment->id]) }}">Decline</button>     
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection