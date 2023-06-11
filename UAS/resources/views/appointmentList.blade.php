@extends('layouts.master')

@section('content')
    <div class="container-fluid col-10 text-center">
        <h1 class="pageHeading py-5">Appointment List</h1>
    
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Jadwal</th>
                    <th>Nama Dokter</th>
                    <th>Keluhan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody class="table-light">
                @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->jadwal->jadwalPraktik }}</td>
                    <td><a href={{ route('review.show', ['id' => $appointment->doctor->id]) }}>{{ $appointment->doctor->nama}}</a></td>
                    <td style="word-break: break-word">{{ $appointment->keluhan }}</td>
                    <td>
                        @if($appointment->status == "Done")
                            <a href="{{ route('review.show', ['id' => $appointment->doctor->id]) }}"><p>Done (Ulas)</p></a>
                        @else
                            {{ $appointment->status }}
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop