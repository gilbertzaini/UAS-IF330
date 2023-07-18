@extends('layouts.master')

@section('content')
<form action="/doctors/{{ $doctor->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $doctor->name }}">
    <input type="text" name="spesialis" value="{{ $doctor->spesialis }}">
    <button type="submit">Update</button>
</form>

<div class="container">
    <h1 class="pageHeading py-5">Daftar Dokter</h1>
    
    <div class="d-flex align-items-end justify-end pb-3">
        <a href={{route('doctor.create')}}><x-primary-button class="align-self-end" style="background-color: grey;">Tambah Dokter</x-primary-button></a>
    </div>
    <table id="doctorListTable" class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Spesialis</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="table-light">
            @foreach ($doctors as $doctor)
            <tr>
                <td>
                    <img src="data:image/jpeg;base64,{{ base64_encode($doctor->foto) }}"/>
                </td>
                <td>
                    <a href={{ route('doctor.edit', ['id' => $doctor->id]) }} class="namaDokter text-start" style="word-wrap: break-word;">{{$doctor->nama}}</a>
                </td>
                <td>{{$doctor->spesialis}}</td>
                <td>         
                    <form method="post" action="{{ route('doctor.destroy', ['id'=>$doctor->id]) }}" class="py-auto">
                        @csrf
                        @method('delete')
                        <div class="d-flex align-center justify-center">
                            <button class="btn btn-danger">
                                {{ __('Delete') }}
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
