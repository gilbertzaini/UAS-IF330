@extends('layouts.master')

@section('content')
    <div class="container-fluid col-10 text-center">
        <h1 class="my-5">Appointment List</h1>
    
        <table class="table table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Jadwal</th>
                    <th>Nama Dokter</th>
                    <th>Keluhan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->jadwal->jadwalPraktik }}</td>
                    <td>{{ $appointment->doctor->nama}}</td>
                    <td style="word-break: break-word">{{ $appointment->keluhan }}</td>
                    <td>{{ $appointment->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop