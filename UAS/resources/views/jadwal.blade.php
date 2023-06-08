@extends('layouts.master')

@section('content')
<ul id="listJadwal">
    @for ($i = 0; $i < 5; $i++)        
    <li class="dokterJadwal">
        <div class="col-5 mx-auto my-2">
            <div class="d-flex d align-items-center justify-content-between">
                <div class="d-flex justify-content-start mt-2">
                    <div class="d-flex flex-column justify-content-center align-items-center"/>
                        <img class="jadwalFoto mx-4" src="{{asset('storage/assets/fotoDokter/bocil.jpg')}}"/>
                    </div>
                    <div class="d-flex align-items-center" style="word-wrap: break-word;">
                        <div class="d-flex flex-column align-items-center justify-content-center col-8">
                            <a href="#" class="namaDokter text-start" style="word-wrap: break-word; font-weight:bold;">Hj. dr. Indah Desri Wahyuni, Sp.A, M.Kes</a>
                        </div>
                        <img class="ml-3" style="width: 4.5em; padding-left: 1em;" src="{{asset('storage/assets/eyeLogo.png')}}"/>
                    </div>
                </div>                
                
                <div class="d-flex justify-content-start px-2 jadwalDokter my-2 col-4">
                    <ul>
                        <li>Senin 08.00-12.00</li>
                        <li>Selasa 08.00 - 12.00</li>
                        <li>Rabu 08.00 - 10.00</li>                        
                        <li>Kamis 08.00 - 09.00</li>                        
                        <li>Jumat 08.00 - 15.00</li>
                    </ul>
                </div>
            </div>   
            @auth
            
            @endauth        
        </div>
    </li>
    @endfor
</ul>
@stop