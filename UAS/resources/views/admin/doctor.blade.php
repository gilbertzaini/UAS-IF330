@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="pageHeading py-5">Daftar Dokter</h1>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Spesialis</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody class="table-light">
            @foreach ($doctors as $doctor)
            <tr>
                <td>{{$doctor->nama}}</td>
                <td>{{$doctor->spesialis}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
