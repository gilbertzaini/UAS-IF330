@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="pageHeading py-5">Daftar User</h1>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody class="table-light">
            @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->tempatLahir}}, {{$user->tanggalLahir}}</td>
                <td>{{$user->noTelp}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
