@extends('layouts.admin')

@section('content')
<div class="container-fluid col-10 text-center">
    <h1 class="pageHeading py-5">Daftar Dokter</h1>

    <table class="table table-striped table-bordered">
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
                <td></td>
                <td>{{$doctor->nama}}</td>
                <td>{{$doctor->spesialis}}</td>
                <td>         
                    <form method="post" action="{{ route('doctor.destroy', ['id'=>$doctor->id]) }}" class="p-6">
                        @csrf
                        @method('delete')
                        <div>
                            <x-danger-button>
                                {{ __('Delete') }}
                            </x-danger-button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
