@extends('layouts.master')

@section('content')
<ul id="listJadwal">
    @foreach($doctors as $doctor)        
    <li class="dokterJadwal">
        <div class="col-5 mx-auto my-2" style="min-height: 6.2rem;">
            <div class="d-flex d align-items-center justify-content-between">
                <div class="d-flex justify-content-start mt-2">
                    <div class="d-flex flex-column justify-content-center align-items-center"/>
                        <img class="jadwalFoto mx-4" src="{{asset('storage/assets/fotoDokter/bocil.jpg')}}"/>
                    </div>
                    <div class="d-flex align-items-center" style="word-wrap: break-word;">
                        <div class="d-flex flex-column align-items-center justify-content-center col-8">
                            <a href={{ route('review.show', ['id' => $doctor->id]) }} class="namaDokter text-start" style="word-wrap: break-word; font-weight:bold;">{{$doctor->nama}}</a>
                        </div>
                        <x-healthicons-f-eye class="ml-3"/>
                    </div>
                </div>                
                
                <div class="d-flex justify-content-start px-2 jadwalDokter my-auto py-auto col-4" style="height: auto;">
                    <ul class="my-auto">
                        @foreach($doctor->jadwal as $jadwal)
                        <li>{{$jadwal->jadwalPraktik}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>   
            @auth
            <div>                
                <a href='appointment/create/{{$doctor->id}}' class="btn btn-primary mt-2" style="width:100%;">Buat Jadwal</a>
            </div> 
            @endauth        
        </div>
    </li>
    @endforeach
</ul>
@stop